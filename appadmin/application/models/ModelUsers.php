<?php
	class ModelUsers extends CI_Model {

		function validation($username,$password){
            $sql    = " SELECT * FROM `users` WHERE username = ? and `password` = ?";
            // return $sql;
            $query  = $this->db->query($sql,array($username,$password));
            if($query->num_rows()>0){
                $row    = $query->row();
                $username  = $row->username;
                $email  = $row->email;
                $name   = $row->fullname;
                $data = array(
                    "status"    => "sukses",
                    "username"  => $username,
                    "name"      => $name,
                    "email"     => $email
                );
            }else{
                $data = array(
                    "status"    => "error"
                );
            }
            return json_encode($data);
        }
    }
?>