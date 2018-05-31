<?php
class Login_model extends CI_Model{
	
	function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM admin WHERE uname='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

	
	function auth_pasien($username,$password){
		$query=$this->db->query("SELECT * FROM pasien WHERE id='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

}
