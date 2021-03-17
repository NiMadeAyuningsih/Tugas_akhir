<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_transaksi extends CI_Controller {

// Load database
	 public function __construct() {
		 parent::__construct();
		 $this->load->model('transaksi_model');
	 }

	// public function index() {
	// 	 $data = array( 'title' => 'Data transaksi',
	// 	 'transaksi' => $this->transaksi_model->tampil_data_transaksi());
	// 	 $this->load->view('administrator/laporan_transaksi',$data);
	//  }

	 public function index()
	 {
	 	$data['transaksi'] = $this->transaksi_model->tampil_data_transaksi('vtransaksi')->result();
	 	$this->load->view('administrator/laporan_transaksi',$data);
	 }

	public function export_excel(){

		// $data['transaksi'] = $this->transaksi_model->tampil_data_transaksi('vtransaksi')->result();
	 // 	$this->load->view('administrator/laporan_transaksi_excel', $data);

		 $data = array( 'title' => 'Laporan trasnsaksi',
		 'vtransaksi' => $this->transaksi_model->tampil_data_transaksi());
		 $this->load->view('administrator/laporan_transaksi_excel',$data);
	 }

}