<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Menu {   
        public function treemenu($hasil = null,$parent =0){
            $CI     = &get_instance();
            $sql    = " SELECT * FROM `sitemap` WHERE parent_id = '$parent'
                        ORDER BY menu_sort asc";
            $query  = $CI->db->query($sql);
            if($query->num_rows()>0){
                foreach($query->result() as $h){                        
                    if($CI->session->userdata('site_lang') == "indonesia"){
                        if($h->menu_title_id != ''){
                            $h->menu_title = $h->menu_title_id;
                        }
                    }
                    if($h->menu_id == "home"){
                        $h->menu_title = "<i class='fa fa-home'></i>";
                    }
                    if($h->is_parent == "Y"){
                        $hasil .= '
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">'.$h->menu_title.' <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-level">
                                    '.$this->childmenu($h->menu_id,"").'
                                </ul>
                        </li>';
                    }
                    else {
                        $hasil.='<li>
                                    <a href="'.base_url().''.$h->menu_id.'" role="button">'.$h->menu_title.'</a>
                                </li>';
                    }
                }
                return $hasil;
            }
        }

        function childmenu($menu_id,$hasil = null){
            $CI     = &get_instance();
            $sql    = " SELECT * FROM `sitemap` WHERE parent_id = '$menu_id'
                        ORDER BY menu_sort asc";
            $query  = $CI->db->query($sql);
            if($query->num_rows()>0){
                foreach($query->result() as $h){                        
                    if($CI->session->userdata('site_lang') == "indonesia"){
                        if($h->menu_title_id != ''){
                            $h->menu_title = $h->menu_title_id;
                        }
                    }
                    if($h->menu_id == "home"){
                        $h->menu_title = "<i class='fa fa-home'></i>";
                    }
                    if($h->is_parent == "Y"){
                        $hasil .= '
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">'.$h->menu_title.' <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-level">
                                    '.$this->childmenu($h->menu_id).'
                                </ul>
                        </li>';
                    }
                    else {
                        $hasil.='<li>
                                    <a href="'.base_url().$menu_id.'/page/'.$h->menu_id.'" role="button">'.$h->menu_title.'</a>
                                </li>';
                    }
                }
                return $hasil;
            }
        }
    }
?>