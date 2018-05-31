<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{
	public $mysqli;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_database');
	}

	function index(){
		$data['pasien'] = $this->m_database->select();
		$this->load->view('head');
		$this->load->view('v_admin', $data);
		$this->load->view('footer');
	}

	function insert_data(){
		$data = array(
			'id' => $this->input->post('id'),
			'password' => $this->input->post('pass'),
			'nama' => $this->input->post('nama'),
			'ttl' => $this->input->post('ttl'),
			'alamat' => $this->input->post('alamat'),
			'jk' => $this->input->post('jk'),
			'no_telp' => $this->input->post('no_telp'),
			'jp' => $this->input->post('jp')
		);
		$data['password'] = md5($data['password']);

		$this->m_database->insert($data);

		redirect('login','refresh');
	}

	function edit(){
		$this->load->view('head');
		$this->load->view('v_edit');
		$this->load->view('footer');
	}

	function edit_data(){
		$id = $this->input->post('id');

		if ($this->input->post('pass')== null) {
			$data = array(
				'nama' => $this->input->post('nama'),
				'ttl' => $this->input->post('ttl'),
				'alamat' => $this->input->post('alamat'),
				'jk' => $this->input->post('jk'),
				'no_telp' => $this->input->post('no_telp'),
				'jp' => $this->input->post('jp')
			);
		} else {
			$data = array(
			'password' => $this->input->post('pass'),
			'nama' => $this->input->post('nama'),
			'ttl' => $this->input->post('ttl'),
			'alamat' => $this->input->post('alamat'),
			'jk' => $this->input->post('jk'),
			'no_telp' => $this->input->post('no_telp'),
			'jp' => $this->input->post('jp')
		);		
		}

		$where =  array('id' => $id);
		$this->m_database->update($data, $where);
		redirect('crud');		
	}
	function status(){
		$id = $this->input->post('id');
		$where =  array('id' => $id);
		$status = $this->input->post('status');
			if (isset($satus)) {
				$status=1;
				$data = array('status' => $satus);
			} else {
				alert ('error');
			};
		$this->m_database->update_status($data, $where);

		redirect('crud');

	}
	function delete_data(){
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$this->m_database->delete($where);
		redirect('crud');
	}
	function coba(){
		$status = $this->input->post('status');
			if (isset($satus)) {
				print 'hello';
			} else {
				print ('error');
			};
	}
}