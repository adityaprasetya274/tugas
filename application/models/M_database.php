<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_database extends CI_Model
{
	public $mysqli;

	function __construct()
	{
		parent::__construct();
		$this->table =  "pasien";
	}

	function select($where=null){
		if ($where!=null) {
			$this->db->where($where);
		}
		$query = $this->db->get($this->table);

		return $query->result_array();
	}

	function insert($data){
		$this->db->insert($this->table, $data);
	}
	function update($data, $where){
		$this->db->where($where);
		$this->db->update($this->table,$data);
	}
	function update_status($data, $where){
		$this->db->where($where);
		$this->db->update($this->table, $data);
	}
	function delete($where){
		$this->db->where($where);
		$this->db->delete($this->table);
	}
}