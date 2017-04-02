<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginmodel extends CI_Model {

    public function lcheck($email,$pass)
    {
        $sql="SELECT * FROM tbl_user_admin WHERE admin_email='$email' and admin_password=MD5('$pass')";
        $this->load->database();
        $result=$this->db->query($sql);
        return $result->result();

    }
}