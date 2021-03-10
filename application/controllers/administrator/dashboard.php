<?php

 class Dashboard extends CI_Controller
 { 	

 	function __construct(){
 		parent::__construct();

 		if (!isset($this->session->userdata['username'])) {
 			$this->session->set_flashdata('pesan','maaf anda belum login');
 			redirect('administrator/auth');
 		}
 	}

 	public function index()
 	{
 		$data = $this->user_model->ambil_data($this->session->userdata ['username']);
 		$data = array(
 			'username' => $data->username,
 			'level' => $data->level);
 		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/dashboard',$data);
 		$this->load->view('templates_administrator/footer');
 	}
 } 
 