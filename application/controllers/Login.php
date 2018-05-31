<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('header');
		$this->load->view('v_login');
		$this->load->view('footer');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->login_model->auth_admin($username,$password);

        if($cek_admin->num_rows() > 0){ 
						$data=$cek_admin->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['user_level']=='1'){ 
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['uname']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');

		         }else{
		            $this->session->set_userdata('akses','2');
								$this->session->set_userdata('ses_id',$data['uname']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');
		         }

        }else{
					$cek_pasien=$this->login_model->auth_pasien($username,$password);
					if($cek_pasien->num_rows() > 0){
							$data=$cek_pasien->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['id']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('page');
					}else{  
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect('page');
					}
        }

    }
    
  function daftar(){
    $this->load->view('header');
      $this->load->view('v_daftar');
      $this->load->view('footer');
  }

    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}
