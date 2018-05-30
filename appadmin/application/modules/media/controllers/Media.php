<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("username")){
			redirect(base_url()."auth/login");
			return;
		}
		$this->load->model("ModelAdmin");
	}
	
	public function front($type = null)
	{
		if($type == ""){
			$type = "news";
		}
		$data["type"] = $type;
		$data["title"] = "News And Events";
		$this->layout->content('front',$data);
	}
	
	public function view($news_id = null)
	{
		$data["title"] = "News And Events";
		$data["news_id"] = $news_id;
		$this->layout->content('view',$data);
	}

	function updateNews(){
		$news 			= $_POST["news"];
		$news_indo 		= $_POST["news_indo"];
		$content		= $_POST["content"];
		$content_indo	= $_POST["content_indo"];
		$category 		= $_POST["category"];
		$news_id		= $_POST["news_id"];
		$image1 		= "";
		if(isset($_FILES["image_upload_file"]["name"])){
			$validextensions = array("jpeg", "jpg", "png");
			$temporary 		= explode(".", $_FILES["image_upload_file"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["image_upload_file"]["type"] == "image/png") || ($_FILES["image_upload_file"]["type"] == "image/jpg") || ($_FILES["image_upload_file"]["type"] == "image/jpeg")) && ($_FILES["image_upload_file"]["size"] < 800000000) && in_array($file_extension, $validextensions)) {
				if ($_FILES["image_upload_file"]["error"] > 0)
				{
					$status 	= "error";
					$message 	= "File Error";
				}else
				{
					$url = base_url()."appsources/news/";
					$image=basename($_FILES['image_upload_file']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/news/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['image_upload_file']['tmp_name'],$tmppath);					
					$image1 = $tmppath;
				}
			}
		}
		$datadetail = array(
			'news_tittle' => $news,
			'news_tittle_indo' => $news_indo,
			'news_content' => $content,
			'news_content_indo' => $content_indo,
			"news_category" => $category
		);
		if($image1 != ""){
			$datadetail = array(
				'news_tittle' => $news,
				'news_tittle_indo' => $news_indo,
				'news_content' => $content,
				'news_content_indo' => $content_indo,
				"news_category" => $category,
				"news_image"=>$image1
			);
		}
		$this->db->where("news_id",$news_id);
		$query = $this->db->update("news",$datadetail);
		if($query){
			$status 	= "sukses";
			$message	= "News was Updated";
		}else{
			$status 	= "gagal";
			$message	= "News was Failed to Updated";
		}

		echo json_encode(array("status"=>$status,"message"=>$message));
		return;
	}

	function addNews(){
		$news 			= $_POST["news"];
		$news_indo 		= $_POST["news_indo"];
		$content		= $_POST["content"];
		$content_indo	= $_POST["content_indo"];
		$status = "error";
		$message ="File error";
		if(isset($_FILES["image_upload_file"]["name"])){
			$validextensions = array("jpeg", "jpg", "png");
			$temporary 		= explode(".", $_FILES["image_upload_file"]["name"]);
			$file_extension = end($temporary);
			if ((($_FILES["image_upload_file"]["type"] == "image/png") || ($_FILES["image_upload_file"]["type"] == "image/jpg") || ($_FILES["image_upload_file"]["type"] == "image/jpeg")) && ($_FILES["image_upload_file"]["size"] < 800000000) && in_array($file_extension, $validextensions)) {
				if ($_FILES["image_upload_file"]["error"] > 0)
				{
					$status 	= "error";
					$message 	= "File Error";
				}else
				{
					$url = base_url()."appsources/news/";
					$image=basename($_FILES['image_upload_file']['name']);
					$image=str_replace(' ','|',$image);
					$type = explode(".",$image);
					$type = $type[count($type)-1];
					$tmppath="appsources/news/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
					move_uploaded_file($_FILES['image_upload_file']['tmp_name'],$tmppath);					
					$image1 = $tmppath;
					$datadetail = array(
						'news_tittle' => $news,
						'news_tittle_indo' => $news_indo,
						'news_created_date' => date("Y-m-d H:i:s"),
						'news_content' => $content,
						'news_content_indo' => $content_indo,
						'news_image' => $image1,
						"news_category" => $_POST["category"]
					);
					$query 		= $this->db->insert('news', $datadetail);
					if($query){
						$status 	= "sukses";
						$message 	= "News was Successful add";
					}else{
						$status 	= "error";
						$message 	= "News was Failed to add";
						@unlink($image1);
					}
				}
			}else
			{
				$status 	= "error";
				$message 	= "Size More Than 8MB";
			}
		}

		echo json_encode(array("status"=>$status,"message"=>$message));
		return;
	}

	function deleteevent(){
		$tmppcat_id = $_POST["news_id"];
		$arrcat_id 	= explode("|",$tmppcat_id);
		$this->db->trans_begin();
		for($i=0;$i<count($arrcat_id);$i++){
			$sqldelete 		= "DELETE FROM news WHERE news_id = '{$arrcat_id[$i]}'";
			$querydelete 	= $this->db->query($sqldelete);
		}
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			echo "Event deleted are failed";
		}
		else
		{
			$this->db->trans_commit();
			echo "Event deleted are success";
		}
	}

	function deleteeventimage(){
		$this->db->trans_begin();
		$sql 	= "SELECT event_image FROM events WHERE event_id = '$_POST[image_id]'";
		$query 	= $this->db->query($sql);
		if($query->num_rows()>0){
			$row = $query->row();
			if (file_exists($row->event_image)) {
				unlink($row->event_image);
			}
			$sqldelete 		= "DELETE FROM events WHERE event_id = '$_POST[image_id]'";
			$querydelete 	= $this->db->query($sqldelete);
		}
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			echo "Event deleted are failed";
		}
		else
		{
			$this->db->trans_commit();
			echo "Event deleted are success";
		}
	}

	function addevent(){
		if(isset($_FILES["imageslider"]["name"])){
			$validextensions = array("jpeg", "jpg", "png");
			$temporary 		= explode(".", $_FILES["imageslider"]["name"]);
			$file_extension = end($temporary);
			if((($_FILES["imageslider"]["type"] != "image/png") || ($_FILES["imageslider"]["type"] != "image/jpg") || ($_FILES["imageslider"]["type"] != "image/jpeg")) && in_array($file_extension, $validextensions)){
				$data = array(
					"status" 	=> "error",
					"message"	=> "Allowed Image Extention (jpg or png)"
				);
				echo json_encode($data);
				return;
			}
			if ($_FILES["imageslider"]["size"] > 200000000) {		
				$data = array(
					"status" 	=> "error",
					"message"	=> "Max Upload 2MB"
				);
				echo json_encode($data);
				return;
			}
			if ($_FILES["imageslider"]["error"] > 0)
			{
				$message = "Upload Image Error";
			}else
			{
				$url = base_url()."appsources/event/";
				$image=basename($_FILES['imageslider']['name']);
				$image=str_replace(' ','|',$image);
				$type = explode(".",$image);
				$type = $type[count($type)-1];
				$tmppath="appsources/event/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
				move_uploaded_file($_FILES['imageslider']['tmp_name'],$tmppath);
				$message = "sukses";
				$image1 = $tmppath;
			}
		}
		if($message == "sukses"){
			$response = $this->ModelAdmin->addevent($image1,$_POST["description"],$_POST["category"],$_POST["title"]);
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
}
