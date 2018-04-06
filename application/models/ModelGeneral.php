<?php
class ModelGeneral extends CI_Model {
    function getPageTitle($menu_id){
        $sql    = " SELECT * FROM `sitemap` WHERE menu_id = '$menu_id'";
        $query  = $this->db->query($sql);
        if($query->num_rows()>0){
            $row = $query->row();
            $menu_title = $row->menu_title;
        }else{
            $menu_title = "";
        }

        return $menu_title;
    }

    function getPageCategory($menu_id){
        $sql    = " SELECT * FROM `sitemap` WHERE parent_id = '$menu_id' order by menu_sort asc";
        $query  = $this->db->query($sql);
        if($query->num_rows()>0){
            $result = $query->result();
        }else{
            $result = false;
        }

        return $result;
    }
}
?>