<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MX_Controller {

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
	public function index($module = null,$type=null)
	{
		if($module == "News"){
			if($type == ""){
				$type = "press_release";
			}

			$config['per_page']		= 3;
			$config['num_links'] 	= 2;
			$config['uri_segment']	= 5;
			$config['full_tag_open'] = '<ul class="pagination-lg hide-first-last pagination-grid pagination" data-page-items="6" data-options="scrollTop:true,prev:Prev,next:Next">';
			$config['full_tag_close'] = '</ul>';
			
			$config['first_link'] = '<i class="fa fa-angle-double-left"></i> <span>First</span>';
			$config['first_tag_open'] = '<li class="first disabled">';
			$config['first_tag_close'] = '</li>';
			
			$config['last_link'] = '<span>Last</span>';
			$config['last_tag_open'] = '<li class="last">';
			$config['last_tag_close'] = '</li>';
			
			$config['next_link'] = 'Next<i class="fa fa-angle-right"></i>';
			$config['next_tag_open'] = '<li class="next">';
			$config['next_tag_close'] = '</li>';
			
			$config['prev_link'] = '<i class="fa fa-angle-left"></i> Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			
			$config['cur_tag_open'] = '<li class="page active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			
			$config['num_tag_open'] = '<li class="page">';
			$config['num_tag_close'] = '</li>';
			$config['base_url']		= base_url()."news/index/News/$type";
			$config['total_rows']	= $this->db->query("SELECT * FROM news where news_category = '$type'")->num_rows();
			$this->pagination->initialize($config);
			$start = $this->uri->segment(5, 0);
			$data["pagination"]		= $this->pagination->create_links();
			$data["start"]			= $start;
			$data["jml_record"]		= $config['total_rows'];
			$data['from'] = (int)$this->uri->segment(5) + 1;
			if ($this->uri->segment(5) + $config['per_page'] > $config['total_rows']) {
				$data['to'] = $config['total_rows'];
			} else {
				$data['to'] = (int)$this->uri->segment(5) + $config['per_page'];
			}
			$ret = "";
            $sql    = " SELECT * FROM news as a
						WHERE news_category = '$type'
                        ORDER BY a.news_id desc
                        LIMIT $start,$config[per_page]";
            $query  = $this->db->query($sql);
            if($query->num_rows()>0){
                foreach($query->result() as $row){
					$titik = "";
					if (strlen($row->news_content_indo) > 500){
						$titik = '...';
					}
					$ret .= '						
						<div data-sort="2" class="maso-item col-md-12 cat1 cat3">							
							<div class="advs-box advs-box-side" data-anima="fade-left" data-trigger="hover">
								<div class="row">
									<div class="col-md-4">
										<div class="img-box"><img src="'.base_url().'appadmin/'.$row->news_image.'" alt=""></div>
									</div>
									<div class="col-md-8">
										<h3>'.$row->news_tittle_indo.'</h3>
										<hr class="anima">
										<p>
										'.substr(str_replace("<div>","",$row->news_content_indo), 0, 500).$titik.'
										</p>
										<a class="btn" href="'.base_url().'news/read/'.$row->news_id.'">Read more</a>
									</div>
								</div>
							</div>
						</div>
					';
                }
            }
			$data["listdata"] = $ret;
		}else{
			if($type == ""){
				$type = "external";
			}

			$config['per_page']		= 6;
			$config['num_links'] 	= 2;
			$config['uri_segment']	= 5;
			$config['full_tag_open'] = '<ul class="pagination-lg hide-first-last pagination-grid pagination" data-page-items="6" data-options="scrollTop:true,prev:Prev,next:Next">';
			$config['full_tag_close'] = '</ul>';
			
			$config['first_link'] = '<i class="fa fa-angle-double-left"></i> <span>First</span>';
			$config['first_tag_open'] = '<li class="first disabled">';
			$config['first_tag_close'] = '</li>';
			
			$config['last_link'] = '<span>Last</span>';
			$config['last_tag_open'] = '<li class="last">';
			$config['last_tag_close'] = '</li>';
			
			$config['next_link'] = 'Next<i class="fa fa-angle-right"></i>';
			$config['next_tag_open'] = '<li class="next">';
			$config['next_tag_close'] = '</li>';
			
			$config['prev_link'] = '<i class="fa fa-angle-left"></i> Prev';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			
			$config['cur_tag_open'] = '<li class="page active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			
			$config['num_tag_open'] = '<li class="page">';
			$config['num_tag_close'] = '</li>';
			$config['base_url']		= base_url()."news/index/Event/$type";
			$config['total_rows']	= $this->db->query("SELECT * FROM events where event_category = '$type'")->num_rows();
			$this->pagination->initialize($config);
			$start = $this->uri->segment(5, 0);
			$data["pagination"]		= $this->pagination->create_links();
			$data["start"]			= $start;
			$data["jml_record"]		= $config['total_rows'];
			$data['from'] = (int)$this->uri->segment(5) + 1;
			if ($this->uri->segment(5) + $config['per_page'] > $config['total_rows']) {
				$data['to'] = $config['total_rows'];
			} else {
				$data['to'] = (int)$this->uri->segment(5) + $config['per_page'];
			}
			$ret = "";
            $sql    = " SELECT * FROM events as a
						WHERE event_category = '$type'
                        ORDER BY a.event_id desc
                        LIMIT $start,$config[per_page]";
            $query  = $this->db->query($sql);
            if($query->num_rows()>0){
                foreach($query->result() as $row){
					$ret .= '
						<div class="col-md-4" style="padding-top:20px">
							<div class="img-box adv-img adv-img-down-text">
								<a class="img-box img-scale-up i-center" href="#">
									<div class="caption">
										<h4>'.$row->event_title.'</h4>
									</div>
									<img alt="" src="'.base_url().'appadmin/'.$row->event_image.'">
								</a>
							</div>
						</div>
					';
                }
            }
			$data["listdata"] = $ret;
		}
		$data["module_id"]	= $module;
		$data["module"] 	= $this->ModelGeneral->getPageTitle("news/index/news");
		$data["type"]=$type;
		$this->layout->content("index",$data);
	}

	function read($id = null){
		$data["news_id"] = $id;
		$data["module"] 	= $this->ModelGeneral->getPageTitle("news/index/news");
		$this->layout->content("read",$data);

	}
}
