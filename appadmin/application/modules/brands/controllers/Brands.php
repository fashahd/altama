<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("username")){
			redirect(base_url()."auth/login");
			return;
		}
		$this->load->model("ModelAdmin");
		$this->load->library('pagination');
	}
	
	public function pages($type=null)
	{
		$data["title"] = "Brands";
		if($type == "power-tools"){
			$data["subtitle"] = "Power Tools";
		}
		if($type == "hand-tools"){
			$data["subtitle"] = "Hand Tools";
		}
		if($type == "lubricants"){
			$data["subtitle"] = "Lubricants";
		}
		$data["type"] = $type;
		$this->layout->content('pages',$data);
	}

	function addDescription(){
		$description = $_POST["description"];
		$category 	 = $_POST["category"];

		$sql 	= "SELECT * FROM description WHERE type = '$category'";
		$query	= $this->db->query($sql);
		if($query->num_rows()>0){
			$data = array(
				"description" => $description
			);
			$this->db->where("type", $category);
			$update = $this->db->update("description",$data);
		}else{
			$data = array(
				"description" => $description,
				"type" => $category
			);
			$update = $this->db->insert("description",$data);
		}

		if($update){
			echo "sukses";
			return;
		}else{
			echo "gagal";
			return;
		}
	}

	function uploadbanner(){
		$category = $_POST["category"];
		if(isset($_FILES["filebanner"]["name"])){
			$validextensions = array("jpeg", "jpg", "png");
			$temporary 		= explode(".", $_FILES["filebanner"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["filebanner"]["type"] == "image/png") || ($_FILES["filebanner"]["type"] == "image/jpg") || ($_FILES["filebanner"]["type"] == "image/jpeg")) && ($_FILES["filebanner"]["size"] < 200000000) && in_array($file_extension, $validextensions)) {
				if ($_FILES["filebanner"]["error"] > 0)
				{
					$message = "<span id='invalid'>***Invalid file Size or Type***<span>";
				}else
				{
					$url = base_url()."appsources/banner/";
					$image=basename($_FILES['filebanner']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/banner/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['filebanner']['tmp_name'],$tmppath);
					$message = "sukses";
					$image1 = $tmppath;
				}
			}else
			{
				$message = "<span id='invalid'>Invalid file Size or Type<span>";
			}
		}
		if($message == "sukses"){
			$response = $this->ModelAdmin->addBanner($image1,$category);
			if($response == "sukses"){
				$message = "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
			}else{
				$message = "<span id='invalid'>Invalid file Size or Type<span>";
			}
		}else{
			$response = "max_upload";
		}
		
		$data = array(
			"status" 	=> $response,
			"message"	=> $message
		);
		echo json_encode($data);
		return;
	}
}
