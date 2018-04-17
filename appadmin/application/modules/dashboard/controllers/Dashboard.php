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
	}
	
	public function front()
	{
		$this->load->view('welcome_message');
	}
}
