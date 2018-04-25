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
		$data["type"] = $type;
		$this->layout->content('pages',$data);
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
