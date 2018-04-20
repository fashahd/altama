<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("username")){
			redirect(base_url()."auth/login");
			return;
		}
		$this->load->model("ModelAdmin");
	}
	
	public function front()
	{
		$data["title"] = "Dashboard";
		$this->layout->content('front',$data);
	}

	function uploadmilestone(){
		if(isset($_FILES["file"]["type"]))
		{
			$validextensions = array("jpeg", "jpg", "png");
			$temporary = explode(".", $_FILES["file"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
			) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
			&& in_array($file_extension, $validextensions)) {
				if ($_FILES["file"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
				}
				else
				{
					if (file_exists("appsources/banner/" . $_FILES["file"]["name"])) {
						echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
					}
					else
					{
						$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
						$targetPath = "appsources/banner/".$_FILES['file']['name']; // Target path where file is to be stored
						move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
						echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
						echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
						echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
						echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
						echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
					}
				}
			}
			else
			{
			echo "<span id='invalid'>***Invalid file Size or Type***<span>";
			}
		}
	}

	function addslider(){
		if(isset($_FILES["imageslider"]["name"])){
			$validextensions = array("jpeg", "jpg", "png");
			$temporary 		= explode(".", $_FILES["imageslider"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["imageslider"]["type"] == "image/png") || ($_FILES["imageslider"]["type"] == "image/jpg") || ($_FILES["imageslider"]["type"] == "image/jpeg")) && ($_FILES["imageslider"]["size"] < 200000000) && in_array($file_extension, $validextensions)) {
				if ($_FILES["imageslider"]["error"] > 0)
				{
					$message = "Upload Image Error";
				}else
				{
					$url = base_url()."appsources/banner/";
					$image=basename($_FILES['imageslider']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/banner/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['imageslider']['tmp_name'],$tmppath);
					$message = "sukses";
					$image1 = $tmppath;
				}
			}else
			{
				$message = "Size More Than 2MB";
			}
		}
		if($message == "sukses"){
			$response = $this->ModelAdmin->addslider($image1);
			if($response == "sukses"){
				$message = "Slider Success to Add";
			}else{
				$message = "Slider Failed to Add";
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

	function deleteslider(){
		$this->db->trans_begin();
		$sql 	= "SELECT image_url FROM banner WHERE id = '$_POST[image_id]'";
		$query 	= $this->db->query($sql);
		if($query->num_rows()>0){
			$row = $query->row();
			if (file_exists($row->image_url)) {
				unlink($row->image_url);
			}
			$sqldelete 		= "DELETE FROM banner WHERE id = '$_POST[image_id]'";
			$querydelete 	= $this->db->query($sqldelete);
		}
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			echo "Slider deleted are failed";
		}
		else
		{
			$this->db->trans_commit();
			echo "Slider deleted are success";
		}
	}
}
