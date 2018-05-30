<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata("username")){
			redirect(base_url()."auth/login");
			return;
		}
		$this->load->model("ModelAdmin");
	}
	
	public function page($type = null)
	{
		if($type == ""){
			$type = "job";
		}
		$data["title"] = "Career";
		$data["type"] = $type;
		$this->layout->content('page',$data);
	}

	function addJob(){
		$data = array(
			"job_position" => $_POST["position"],
			"job_requirement" => $_POST["requirement"]
		);

		$query  = $this->db->insert("job", $data);
		if($query){
			echo "sukses";
			return;
		}else{
			echo "gagal";
			return;
		}
	}

	function addTesti(){
		$data = array(
			"fullname" => $_POST["fullname"],
			"position" => $_POST["position"],
			"testimoni" => $_POST["testimoni"]
		);

		$query  = $this->db->insert("testimoni", $data);
		if($query){
			echo "sukses";
			return;
		}else{
			echo "gagal";
			return;
		}
	}

	function deletejob(){
		$tmppcat_id = $_POST["service_id"];
		$arrcat_id 	= explode("|",$tmppcat_id);
		$this->db->trans_begin();
		for($i=0;$i<count($arrcat_id);$i++){
			$sqldelete 		= "DELETE FROM job WHERE job_id = '{$arrcat_id[$i]}'";
			$querydelete 	= $this->db->query($sqldelete);
		}
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			echo "Job Vacancy deleted are failed";
		}
		else
		{
			$this->db->trans_commit();
			echo "Job Vacancy deleted are success";
		}
	}

	function deletetesti(){
		$tmppcat_id = $_POST["service_id"];
		$arrcat_id 	= explode("|",$tmppcat_id);
		$this->db->trans_begin();
		for($i=0;$i<count($arrcat_id);$i++){
			$sqldelete 		= "DELETE FROM testimoni WHERE testimoni_id = '{$arrcat_id[$i]}'";
			$querydelete 	= $this->db->query($sqldelete);
		}
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			echo "Testimoni deleted are failed";
		}
		else
		{
			$this->db->trans_commit();
			echo "Testimoni deleted are success";
		}
	}
}
