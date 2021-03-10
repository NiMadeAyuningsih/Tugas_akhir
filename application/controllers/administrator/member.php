<?php 


class member extends CI_Controller
{
	
	public function index()
	{
		$data['member'] = $this->member_model->tampil_data()->result();
		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/member',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data = array(
			'id_member' => set_value('id_member'),
			'nama' => set_value('nama'),
			'nama_paket' => set_value('nama_paket'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'alamat' => set_value('alamat'),
			'no_hp' => set_value('no_hp'),
			'tgl_daftar' => set_value('tgl_daftar'),
			'tgl_experied' => set_value('tgl_experied'),
			'status' => set_value('status'),
		);

		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/member_form',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->input();
		}else{
			$data = array(
				'id_member' => $this->input->post('id_member', TRUE),
				'nama' => $this->input->post('nama', TRUE),
				'nama_paket' => $this->input->post('nama_paket', TRUE),
				'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
				'alamat' => $this->input->post('alamat', TRUE),
				'no_hp' => $this->input->post('no_hp', TRUE),
				'tgl_daftar' => $this->input->post('tgl_daftar', TRUE),
				'tgl_experied' => $this->input->post('tgl_experied', TRUE),
				'status' => $this->input->post('status', TRUE),
			);

			$this->member_model->input_data($data);
			$this->session->set_flashdata('pesan','data berhasil ditambahkan');
			redirect('administrator/member');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_member', 'id_member','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('nama_paket','nama_paket','required');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('no_hp','no_hp','required');
		$this->form_validation->set_rules('tgl_daftar','tgl_daftar','required');
		$this->form_validation->set_rules('tgl_experied','tgl_experied','required');
		$this->form_validation->set_rules('status','status','required');
	}

	public function update($id)
	{
		$where = array('id_member' => $id);
		$data['member'] = $this->member_model->edit_data($where, 'member')->result();
		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/member_update',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function update_aksi()
	{
		$id = $this->input->post('id_member');
		$nama = $this->input->post('nama');
		$nama_paket = $this->input->post('nama_paket');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$tgl_daftar = $this->input->post('tgl_daftar');
		$tgl_experied = $this->input->post('tgl_experied');
		$status = $this->input->post('status');

		$data = array(
			'nama' => $nama,
			'nama_paket' => $nama_paket,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'tgl_daftar' => $tgl_daftar,
			'tgl_experied' => $tgl_experied,
			'status' => $status
		);

		$where = array(
			'id_member' => $id );
		$this->member_model->update_data($where,$data,'member');
		redirect('administrator/member');
	}

	public function delete($id)
	{
		$where = array('id_member' => $id );
		$this->member_model->hapus_data($where,'member');
		redirect('administrator/member');
	}
}
 