<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class laporan_member extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('cetak_pdf');
    }

	function index()
	{
        $pdf = new FPDF('L','mm','Letter');
        $pdf->AddPage();

        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(0,7,'Laporan Data Member',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',8);

        $pdf->Cell(8,6,'No',1,0);
        $pdf->Cell(16,6,'id_member',1,0);
        $pdf->Cell(30,6,'nama',1,0);
        $pdf->Cell(35,6,'nama_paket',1,0);
        $pdf->Cell(25,6,'nama_trainer',1,0);
        $pdf->Cell(25,6,'jenis_kelamin',1,0);
        $pdf->Cell(25,6,'alamat',1,0);
        $pdf->Cell(28,6,'no_hp',1,0);
        $pdf->Cell(25,6,'tgl_daftar',1,0);
        $pdf->Cell(25,6,'tgl_experied',1,0);
        $pdf->Cell(25,6,'status',1,1);

        $pdf->SetFont('Arial','',10);
        $member = $this->db->get('member')->result();
        $no=0;
        foreach ($member as $data){
             $no++;
                $pdf->Cell(8,6,$no,1,0);
                $pdf->Cell(16,6,$data->id_member,1,0);
                $pdf->Cell(30,6,$data->nama,1,0);
                $pdf->Cell(35,6,$data->nama_paket,1,0);
                $pdf->Cell(25,6,$data->nama_trainer,1,0);
                $pdf->Cell(25,6,$data->jenis_kelamin,1,0);
                $pdf->Cell(25,6,$data->alamat,1,0);
                $pdf->Cell(28,6,$data->no_hp,1,0);
                $pdf->Cell(25,6,$data->tgl_daftar,1,0);
                $pdf->Cell(25,6,$data->tgl_experied,1,0);
                $pdf->Cell(25,6,$data->status,1,1);
           
        }
        $pdf->Output();
	}
}