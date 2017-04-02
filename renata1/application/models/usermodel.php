<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model {

    public function lcheck($email,$pass)
    {
        $sql="SELECT * FROM tbl_admin WHERE email='$email' and password=MD5('$pass')";
        $this->load->database();
        $result=$this->db->query($sql);
        return $result->result_array();

    }
}