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
			$this->session->set_flashdata('pesan','data berhasil ditambahkan');
			redirect('administrator/paket');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_paket', 'id_paket','required');
		$this->form_validation->set_rules('nama_paket','nama_paket','required');
		$this->form_validation->set_rules('harga_paket','harga_paket','required');

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
		redirect('administrator/paket');
	}

	public function delete($id)
	{
		$where = array('id_paket' => $id );
		$this->paket_model->hapus_data_paket($where,'paket');
		redirect('administrator/paket');
	}
}