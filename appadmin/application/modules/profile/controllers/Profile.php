<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MX_Controller {

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

	function deletebod(){
		if($_POST["id"]){
			$sql 	= "SELECT * FROM bod WHERE bod_id = ?";
			$query	= $this->db->query($sql,array($_POST["id"]));
			$row 	= $query->row();
			$bod_image = $row->bod_image;

			$sql 	= "DELETE FROM bod WHERE bod_id = ?";
			$query 	= $this->db->query($sql,array($_POST["id"]));
			if($query){
				unlink($bod_image);
				echo "sukses";
			}else{
				echo "error";
			}
		}else{
			echo "error";
		}
	}

	function deleteboc(){
		if($_POST["id"]){
			$sql 	= "SELECT * FROM boc WHERE boc_id = ?";
			$query	= $this->db->query($sql,array($_POST["id"]));
			$row 	= $query->row();
			$boc_image = $row->boc_image;

			$sql 	= "DELETE FROM boc WHERE boc_id = ?";
			$query 	= $this->db->query($sql,array($_POST["id"]));
			if($query){
				unlink($boc_image);
				echo "sukses";
			}else{
				echo "error";
			}
		}else{
			echo "error";
		}
	}

	function deleteAward(){
		if($_POST["id"]){
			$sql 	= "SELECT * FROM awards WHERE id = ?";
			$query	= $this->db->query($sql,array($_POST["id"]));
			$row 	= $query->row();
			$award_image = $row->award_image;

			$sql 	= "DELETE FROM awards WHERE id = ?";
			$query 	= $this->db->query($sql,array($_POST["id"]));
			if($query){
				unlink($award_image);
				echo "sukses";
			}else{
				echo "error";
			}
		}else{
			echo "error";
		}
	}
	
	public function pages($type=null)
	{
		$data["title"] = "Profile";
		if($type == "company-overview-and-milestone"){
			$data["subtitle"] = "Company Overview";
		}
		if($type == "vision-mission-and-company-value"){
			$data["subtitle"] = "Vision and Mission";
		}
		if($type == "award-and-recognition"){
			$config['per_page']		= 5;
			$config['num_links'] 	= 2;
			$config['uri_segment']	= 4;
			$config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
			$config['full_tag_close'] = '</ul>';
			
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			
			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			
			$config['next_link'] = '>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			
			$config['prev_link'] = '<';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['base_url']		= base_url()."profile/pages/award-and-recognition";
			$config['total_rows']	= $this->db->query("SELECT * FROM awards")->num_rows();
			$this->pagination->initialize($config);
			$start = $this->uri->segment(4, 0);
			$data["pagination"]		= $this->pagination->create_links();
			$data["start"]			= $start;
			$data["jml_record"]		= $config['total_rows'];
			$data['from'] = (int)$this->uri->segment(4) + 1;
			if ($this->uri->segment(4) + $config['per_page'] > $config['total_rows']) {
				$data['to'] = $config['total_rows'];
			} else {
				$data['to'] = (int)$this->uri->segment(4) + $config['per_page'];
			}
			$data["listaward"] = $this->ModelAdmin->getListAward($config['per_page'],$start);
			$data["subtitle"] = "Award and Recognition";
		}
		
		if($type == "board-of-commisioner"){
			$config['per_page']		= 5;
			$config['num_links'] 	= 2;
			$config['uri_segment']	= 4;
			$config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
			$config['full_tag_close'] = '</ul>';
			
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			
			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			
			$config['next_link'] = '>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			
			$config['prev_link'] = '<';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['base_url']		= base_url()."profile/pages/board-of-commisioner";
			$config['total_rows']	= $this->db->query("SELECT * FROM boc")->num_rows();
			$this->pagination->initialize($config);
			$start = $this->uri->segment(4, 0);
			$data["pagination"]		= $this->pagination->create_links();
			$data["start"]			= $start;
			$data["jml_record"]		= $config['total_rows'];
			$data['from'] = (int)$this->uri->segment(4) + 1;
			if ($this->uri->segment(4) + $config['per_page'] > $config['total_rows']) {
				$data['to'] = $config['total_rows'];
			} else {
				$data['to'] = (int)$this->uri->segment(4) + $config['per_page'];
			}
			$data["listbpc"] = $this->ModelAdmin->getListBOC($config['per_page'],$start);
			$data["subtitle"] = "Board of Commisioner";
		}
		
		if($type == "board-of-director"){
			$config['per_page']		= 5;
			$config['num_links'] 	= 2;
			$config['uri_segment']	= 4;
			$config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
			$config['full_tag_close'] = '</ul>';
			
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			
			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			
			$config['next_link'] = '>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			
			$config['prev_link'] = '<';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['base_url']		= base_url()."profile/pages/board-of-director";
			$config['total_rows']	= $this->db->query("SELECT * FROM bod")->num_rows();
			$this->pagination->initialize($config);
			$start = $this->uri->segment(4, 0);
			$data["pagination"]		= $this->pagination->create_links();
			$data["start"]			= $start;
			$data["jml_record"]		= $config['total_rows'];
			$data['from'] = (int)$this->uri->segment(4) + 1;
			if ($this->uri->segment(4) + $config['per_page'] > $config['total_rows']) {
				$data['to'] = $config['total_rows'];
			} else {
				$data['to'] = (int)$this->uri->segment(4) + $config['per_page'];
			}
			$data["listbpc"] = $this->ModelAdmin->getListBOD($config['per_page'],$start);
			$data["subtitle"] = "Board of Director";
		}
		$data["type"] = $type;
		$this->layout->content('pages',$data);
	}

	function addAwards(){
		if (isset($_FILES['award_file'])) {
			set_time_limit(0);
			$allowedImageType = array(
				"image/png",
				"image/jpg",
				"image/jpeg",
				"image/gif"
			);
			if ($_FILES['award_file']["error"] > 0) {
				$output["status"] = 401;
				$output['error'] = "Error in File";
			} elseif (!in_array($_FILES['award_file']["type"], $allowedImageType)) {
				$output["status"] = 401;
				$output['error'] = "You can only upload Image file";
			} elseif (round($_FILES['award_file']["size"] / 1024) > 2048) {
				$output["status"] = 401;
				$output['error'] = "You can upload file size up to 2 MB";
			} else {
				$path[0]     = $_FILES['award_file']['tmp_name'];
				$file        = pathinfo($_FILES['award_file']['name']);
				$fileType    = $file["extension"];
				$desiredExt  = 'jpg';
				$fileNameNew = rand(333, 999) . time() . ".$desiredExt";
				
				$url = 'appsources/awards/'.$fileNameNew;
				$config['upload_path']          = './appsources/awards/';
				$config['file_name'] 			= $fileNameNew;
				$config['allowed_types'] = 'jpg|png|gif|jpeg';
				$config['max_size'] = 1024 * 2;
				// $config['encrypt_name'] = TRUE;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload("award_file"))
				{
					$status = 'error';
					$output['status'] = 401;
					$output['error'] = "Uploading File Failed";
				}
				else
				{
					$data 	= $this->upload->data();
					$output['status'] = 200;
					$output['error'] = "File Upload was Success";
					$data_awards = array(
						"award_title" 		=> $_POST["award_title"],
						"award_category"	=> $_POST["award_category"],
						"award_image"		=> $url
					);

					$query = $this->db->insert("awards",$data_awards);
				}
			}
		}else{			
			$output['status']       = 401;
			$output['error'] = "Uploading File Failed";
		}

		echo json_encode($output);
		return;
	}

	function addBOD(){
		if (isset($_FILES['bod_file'])) {
			set_time_limit(0);
			$allowedImageType = array(
				"image/png",
				"image/jpg",
				"image/jpeg",
				"image/gif"
			);
			if ($_FILES['bod_file']["error"] > 0) {
				$output["status"] = 401;
				// $output['error'] = "Error in File";
				$output['error'] = $this->upload->display_errors();
			} elseif (!in_array($_FILES['bod_file']["type"], $allowedImageType)) {
				$output["status"] = 401;
				$output['error'] = "You can only upload Image file";
			} elseif (round($_FILES['bod_file']["size"] / 1024) > 2048) {
				$output["status"] = 401;
				$output['error'] = "You can upload file size up to 2 MB";
			} else {
				$path[0]     = $_FILES['bod_file']['tmp_name'];
				$file        = pathinfo($_FILES['bod_file']['name']);
				$fileType    = $file["extension"];
				$desiredExt  = 'png';
				$fileNameNew = rand(333, 999) . time() . ".$desiredExt";
				
				$url = 'appsources/bod/'.$fileNameNew;
				$config['upload_path']          = './appsources/bod/';
				$config['file_name'] 			= $fileNameNew;
				$config['allowed_types'] 		= 'jpg|gif|png|jpeg|JPG|PNG';
				$config['max_size'] 			= 1024 * 2;
				// $config['encrypt_name'] = TRUE;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload("bod_file"))
				{
					$status = 'error';
					$output['status'] = 401;
					// $output['error'] = "Uploading File Failed";
					$output['error'] = $this->upload->display_errors();
				}
				else
				{
					$data 	= $this->upload->data();
					$output['status'] = 200;
					$output['error'] = "File Upload was Success";
					$data_awards = array(
						"bod_name" 		=> $_POST["bod_name"],
						"bod_category"	=> $_POST["bod_category"],
						"bod_image"		=> $url
					);

					$query = $this->db->insert("bod",$data_awards);
				}
			}
		}else{			
			$output['status']       = 401;
			// $output['error'] = "Uploading File Failed";
			$output['error'] = $this->upload->display_errors();
		}

		echo json_encode($output);
		return;
	}

	function addBOC(){
		if (isset($_FILES['boc_file'])) {
			set_time_limit(0);
			$allowedImageType = array(
				"image/png",
				"image/jpg",
				"image/jpeg",
				"image/gif"
			);
			if ($_FILES['boc_file']["error"] > 0) {
				$output["status"] = 401;
				// $output['error'] = "Error in File";
				$output['error'] = $this->upload->display_errors();
			} elseif (!in_array($_FILES['boc_file']["type"], $allowedImageType)) {
				$output["status"] = 401;
				$output['error'] = "You can only upload Image file";
			} elseif (round($_FILES['boc_file']["size"] / 1024) > 2048) {
				$output["status"] = 401;
				$output['error'] = "You can upload file size up to 2 MB";
			} else {
				$path[0]     = $_FILES['boc_file']['tmp_name'];
				$file        = pathinfo($_FILES['boc_file']['name']);
				$fileType    = $file["extension"];
				$desiredExt  = 'png';
				$fileNameNew = rand(333, 999) . time() . ".$desiredExt";
				
				$url = 'appsources/boc/'.$fileNameNew;
				$config['upload_path']          = './appsources/boc/';
				$config['file_name'] 			= $fileNameNew;
				$config['allowed_types'] 		= 'jpg|gif|png|jpeg|JPG|PNG';
				$config['max_size'] 			= 1024 * 2;
				// $config['encrypt_name'] = TRUE;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload("boc_file"))
				{
					$status = 'error';
					$output['status'] = 401;
					// $output['error'] = "Uploading File Failed";
					$output['error'] = $this->upload->display_errors();
				}
				else
				{
					$data 	= $this->upload->data();
					$output['status'] = 200;
					$output['error'] = "File Upload was Success";
					$data_awards = array(
						"boc_name" 		=> $_POST["boc_name"],
						"boc_category"	=> $_POST["boc_category"],
						"boc_image"		=> $url
					);

					$query = $this->db->insert("boc",$data_awards);
				}
			}
		}else{			
			$output['status']       = 401;
			// $output['error'] = "Uploading File Failed";
			$output['error'] = $this->upload->display_errors();
		}

		echo json_encode($output);
		return;
	}

	function updatevisimisi(){
		$visi = $_POST["visi"];
		$misi = $_POST["misi"];
		$value = $_POST["value"];
		$data = array("visi"=>$visi,"misi"=>$misi,"value"=>$value);
		$this->db->where("id","0");
		$query = $this->db->update("company_data",$data);
		if($query){
			echo "sukses";
			return;
		}else{
			echo "gagal";
			return;
		}

	}

	function updatecompany(){
		$company = $_POST["company"];
		$data = array("company_overview"=>$company);
		$this->db->where("id","0");
		$query = $this->db->update("company_data",$data);
		if($query){
			echo "sukses";
			return;
		}else{
			echo "gagal";
			return;
		}
	}
}
