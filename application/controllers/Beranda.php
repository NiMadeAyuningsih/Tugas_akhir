<?php

 class Beranda extends CI_Controller
 {

 	public function index()
 	{
 		
 		$this->load->view('template_user/header_beranda');
 		$this->load->view('template_user/user');
 		$this->load->view('template_user/footer_beranda');
 	}
 } 
 