<?php 


class transaksi	 extends CI_Controller
{
	
	public function index()
	{
		$data['transaksi'] = $this->transaksi_model->tampil_data_transaksi()->result();
		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/transaksi',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data['member']=$this->member_model->tampil_data()->result();
		$data['paket']=$this->paket_model->tampil_data_paket()->result();
		$data['user']=$this->user_model->tampil_data()->result();
		$data['trainer']=$this->Trainer_Model->tampil_data()->result();
		
		

		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/transaksi_form',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		
			$data = array(
				'id_transaksi' => $this->input->post('id_transaksi', TRUE),
				'id_member' => $this->input->post('id_member', TRUE),
				'id_paket' => $this->input->post('id_paket', TRUE),
				'id_user' => $this->input->post('id_user', TRUE),
				'status' => $this->input->post('status', TRUE),
				'tgl_bayar' => $this->input->post('tgl_bayar', TRUE),
				'id_trainer' => $this->input->post('id_trainer', TRUE)
			);

			$this->transaksi_model->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
			redirect('administrator/transaksi');
		
	}
	public function _rules()
	{
		$this->form_validation->set_rules('id_transaksi', 'id_transaksi','required',['required' => 'id_transaksi wajib diisi']);
		$this->form_validation->set_rules('id_member','id_member','required',['required' => 'id_member wajib diisi']);
		$this->form_validation->set_rules('id_paket','id_paket','required',['required' => 'id_paket wajib diisi']);
		$this->form_validation->set_rules('id_user','id_user','required',['required' => 'id_user wajib diisi']);
		
		$this->form_validation->set_rules('status','status','required',['required' => 'status wajib diisi']);
		$this->form_validation->set_rules('tgl_bayar','tgl_bayar','required',['required' => 'tgl_bayar wajib diisi']);
		$this->form_validation->set_rules('id_trainer','id_trainer','required',['required' => 'id_trainer wajib diisi']);
		
	}

	public function update($id)
	{
		$data['member']=$this->member_model->tampil_data()->result();
		$data['paket']=$this->paket_model->tampil_data_paket()->result();
		$data['user']=$this->user_model->tampil_data()->result();
		$data['trainer']=$this->Trainer_Model->tampil_data()->result();
		$where = array('id_transaksi' => $id);
		$data['transaksi'] = $this->transaksi_model->edit_data($where, 'transaksi')->result();
		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/transaksi_update',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function update_aksi()
	{
		$id = $this->input->post('id_transaksi');
		$id_member = $this->input->post('id_member');
		$id_paket = $this->input->post('id_paket');
		$id_user = $this->input->post('id_user');
		$status	 = $this->input->post('status');
		$tgl_bayar = $this->input->post('tgl_bayar');
		$id_trainer = $this->input->post('id_trainer');
		

		$data = array(
			'id_member	' => $id_member	,
			'id_paket' => $id_paket	,
			'id_user' => $id_user,
			'status' => $status,
			'tgl_bayar' => $tgl_bayar,
			'id_trainer' => $id_trainer,
			
		);

		$where = array(
			'id_transaksi' => $id );
		$this->transaksi_model->update_data($where,$data,'transaksi');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil di update <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
		redirect('administrator/transaksi');
	}

	public function delete($id)
	{
		$where = array('id_transaksi' => $id );
		$this->transaksi_model->hapus_data($where,'transaksi');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil di hapus <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
		redirect('administrator/transaksi');
	}
}
 