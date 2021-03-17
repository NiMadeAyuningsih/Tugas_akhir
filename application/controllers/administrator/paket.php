<?php 


class paket extends CI_Controller
{
	
	public function index()
	{
	    $data['paket'] = $this->paket_model->tampil_data_paket()->result();
		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		 $this->load->view('administrator/paket',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data = array(
			'id_paket' => set_value('id_paket'),
			'nama_paket' => set_value('nama_paket'),
			'harga_paket' => set_value('harga_paket'),
		);

		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/paket_form',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->input();
		}else{
			$data = array(
				'id_paket' => $this->input->post('id_paket', TRUE),
				'nama_paket' => $this->input->post('nama_paket', TRUE),
				'harga_paket' => $this->input->post('harga_paket', TRUE),
			);

			$this->paket_model->input_data_paket($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
			redirect('administrator/paket');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_paket', 'id_paket','required',['required' => 'id paket wajib diisi']);
		$this->form_validation->set_rules('nama_paket','nama_paket','required',['required' => ' paket wajib diisi']);
		$this->form_validation->set_rules('harga_paket','harga_paket','required',['required' => 'harga paket wajib diisi']);

	}

	public function update($id)
	{
		$where = array('id_paket' => $id);
		$data['paket'] = $this->paket_model->edit_data_paket($where, 'paket')->result();
		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/paket_update',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function update_aksi()
	{
		$id = $this->input->post('id_paket');
		$nama_paket = $this->input->post('nama_paket');
		$harga_paket = $this->input->post('harga_paket');
		

		$data = array(
			'nama_paket' => $nama_paket,
			'harga_paket' => $harga_paket,
			
		);

		$where = array(
			'id_paket' => $id );
		$this->paket_model->update_data_paket($where,$data,'paket');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil di update <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
		redirect('administrator/paket');
	}

	public function delete($id)
	{
		$where = array('id_paket' => $id );
		$this->paket_model->hapus_data_paket($where,'paket');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil di hapus <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
		redirect('administrator/paket');
	}
}