<?php 


class trainer extends CI_Controller
{
	
	public function index()
	{
	    $data['trainer'] = $this->Trainer_Model->tampil_data()->result();
		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		 $this->load->view('administrator/trainer',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data = array(
			'id_trainer' => set_value('id_trainer'),
			'nama_trainer' => set_value('nama_trainer'),
			'no_hp' => set_value('no_hp'),
			'waktu' => set_value('waktu'),
			'bayaran' => set_value('bayaran'),
		);

		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/trainer_form',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->input();
		}else{
			$data = array(
				'id_trainer' => $this->input->post('id_trainer', TRUE),
				'nama_trainer' => $this->input->post('nama_trainer', TRUE),
				'no_hp' => $this->input->post('no_hp', TRUE),
				'waktu' => $this->input->post('waktu', TRUE),
				'bayaran' => $this->input->post('bayaran', TRUE),
			);

			$this->Trainer_Model->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
			redirect('administrator/trainer');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_trainer', 'id_trainer','required',['required' => 'id trainer wajib diisi']);
		$this->form_validation->set_rules('nama_trainer','nama_trainer','required',['required' => 'trainer wajib diisi']);
		$this->form_validation->set_rules('no_hp','no_hp','required',['required' => 'no_hp wajib diisi']);
		$this->form_validation->set_rules('waktu','waktu','required',['required' => 'waktu wajib diisi']);
		$this->form_validation->set_rules('bayaran','bayaran','required',['required' => 'bayaran wajib diisi']);

	}

	public function update($id)
	{
		$where = array('id_trainer' => $id);
		$data['trainer'] = $this->Trainer_Model->edit_data($where, 'trainer')->result();
		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/trainer_update',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function update_aksi()
	{
		$id = $this->input->post('id_trainer');
		$nama_trainer = $this->input->post('nama_trainer');
		$no_hp = $this->input->post('no_hp');
		$no_hp = $this->input->post('waktu');
		$bayaran = $this->input->post('bayaran');
		

		$data = array(
			'nama_trainer' => $nama_trainer,
			'no_hp' => $no_hp,
			'waktu' => $waktu,
			'bayaran' => $bayaran,
			
		);

		$where = array(
			'id_trainer' => $id );
		$this->Trainer_Model->update_data($where,$data,'trainer');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil di update <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
		redirect('administrator/trainer');
	}

	public function delete($id)
	{
		$where = array('id_trainer' => $id );
		$this->Trainer_Model->hapus_data($where,'trainer');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil di hapus <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
		redirect('administrator/trainer');
	}
}