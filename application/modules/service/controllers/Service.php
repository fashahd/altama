<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($module = null)
	{
		$data["module"] 	= "Service Center";
		$data["menu_side"] 	= $this->ModelGeneral->getPageCategory("profile");
		$data["module_id"]	= $module;
		$this->layout->content("index",$data);
	}

	function getlokasi($city = null,$province=null){
		// Header File XML
		header("Content-type: text/xml");
		

		if($this->session->userdata("city") != ''){
			$city = $this->session->userdata("city");
		}else{
			$city = "";
		}

		// 	// Parent node XML
		echo '<markers>';
		$sql 	= "SELECT * FROM services WHERE service_city like '%$city%'";
		$query 	= $this->db->query($sql);
		// $listservice = "";
		if($query->num_rows()>0){
			foreach($query->result() as $row){
				$lat = "";
				$lng = "";
				$address = str_replace(" ","+",$row->service_address);
				// $address = $row->service_address;
				$coordinates = $this->getCoordinates($address);
				$results = $coordinates->results;
				// print_r($coordinates);
				foreach($results as $key){
					$lat = $key->geometry->location->lat;
					$lng = $key->geometry->location->lng;
				}
				echo '<marker ';
				echo 'name="' . $this->parseToXML($row->service_store) . '" ';
				echo 'address="' . $this->parseToXML($row->service_address) . '" ';
				echo 'telpon="' . $this->parseToXML($row->service_phone) . '" ';
				echo 'lat="' . $lat . '" ';
				echo 'lng="' . $lng . '" ';

				echo '/>';
			}
		}else{
			echo "0 results";
		}
		echo '</markers>';
	}

	function getCoordinates($address){
		$url = "https://maps.googleapis.com/maps/api/geocode/json?address=$address&key=AIzaSyBpPTMY70Xnw93pGr6VSJ1rJngApIfPr7E";
		//  Initiate curl
		$ch = curl_init();
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$url);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);

		// Will dump a beauty json :3
		// return $url;
		return json_decode($result);
	}

	function parseToXML($htmlStr)
	{
		$xmlStr=str_replace('<','<',$htmlStr);
		$xmlStr=str_replace('>','>',$xmlStr);
		$xmlStr=str_replace('"','"',$xmlStr);
		$xmlStr=str_replace("'","'",$xmlStr);
		$xmlStr=str_replace("&",'&',$xmlStr);
		return $xmlStr;
	}
}
