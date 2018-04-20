<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelUsers");
	}

	function signout(){
		$this->session->unset_userdata('username');
		redirect("auth/login");
	}
	
	public function login()
	{
		$this->load->view('login');
	}

	function validation(){
		$username 	= $_POST["username"];
		$pwd 		= $_POST["password"];
		$password 	= md5($pwd);

		$response 	= $this->ModelUsers->validation($username,$password);
		$data = json_decode($response, true);
		if($data["status"] == "error"){
			echo "error";
			return;
		}

		if($data["status"] == "sukses"){			
			$this->session->set_userdata("username",$data["username"]);
			echo "sukses";
			return;
		}
	}
}
