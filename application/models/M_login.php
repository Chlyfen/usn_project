<?php
class M_login extends CI_Model{
    function cekadmin($username,$password){
        $hasil=$this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_username='$username' AND pengguna_password=md5('$password')");
        return $hasil;
    }
    
    function cekloginadmin($username,$password){
        $hasil = $this->db->query("SELECT * FROM tbl_admin WHERE admin_username='$username' AND admin_password=md5('$password')");
        return $hasil;
    }
  
}
