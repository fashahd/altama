<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("username")){
			redirect(base_url()."auth/login");
			return;
		}
		$this->load->model("ModelAdmin");
	}
	
	public function page()
	{
		$data["title"] = "Service Center";
		$this->layout->content('page',$data);
	}

	function addService(){
		$data = array(
			"service_store" => $_POST["store"],
			"service_address" => $_POST["address"],
			"service_phone" => $_POST["phone"],
			"service_city"	=> $_POST["city"],
			"service_province" => $_POST["province"]
		);

		$query  = $this->db->insert("services", $data);
		if($query){
			echo "sukses";
			return;
		}else{
			echo "gagal";
			return;
		}
	}
}
