<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('m_database');
    if($this->session->userdata('masuk') != TRUE){
      redirect('login');
    }
  }

  function index(){
     

    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $data['pasien'] = $this->m_database->select();
      $this->load->view('head');
      $this->load->view('v_admin', $data);
      $this->load->view('footer');
    }else{
      $data['pasien'] = $this->m_database->select();
    $this->load->view('head');
    $this->load->view('v_pasien', $data);
    $this->load->view('footer');
    }
  }
}
