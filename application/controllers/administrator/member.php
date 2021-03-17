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
		$data['paket']=$this->paket_model->tampil_data_paket()->result();
		$data['trainer']=$this->Trainer_Model->tampil_data()->result();
		

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
				'nama_trainer' => $this->input->post('nama_trainer', TRUE),
				'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
				'alamat' => $this->input->post('alamat', TRUE),
				'no_hp' => $this->input->post('no_hp', TRUE),
				'tgl_daftar' => $this->input->post('tgl_daftar', TRUE),
				'tgl_experied' => $this->input->post('tgl_experied', TRUE),
				'status' => $this->input->post('status', TRUE),
			);

			$this->member_model->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
			redirect('administrator/member');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_member', 'id_member','required',['required' => 'id member wajib diisi']);
		$this->form_validation->set_rules('nama','nama','required',['required' => 'nama member wajib diisi']);
		$this->form_validation->set_rules('nama_paket','nama_paket','required',['required' => 'paket wajib diisi']);
		$this->form_validation->set_rules('nama_trainer','nama_trainer','required',['required' => 'trainer wajib diisi']);
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',['required' => 'jenis kelamin wajib diisi']);
		$this->form_validation->set_rules('alamat','alamat','required',['required' => 'alamat wajib diisi']);
		$this->form_validation->set_rules('no_hp','no_hp','required',['required' => 'no_hp wajib diisi']);
		$this->form_validation->set_rules('tgl_daftar','tgl_daftar','required',['required' => 'tgl_daftar wajib diisi']);
		$this->form_validation->set_rules('tgl_experied','tgl_experied','required',['required' => 'tgl_experied wajib diisi']);
		$this->form_validation->set_rules('status','status','required',['required' => 'status wajib diisi']);
	}

	public function update($id)
	{
		$data['paket']=$this->paket_model->tampil_data_paket()->result();
		$data['trainer']=$this->Trainer_Model->tampil_data()->result();
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
		$nama_trainer = $this->input->post('nama_trainer');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$tgl_daftar = $this->input->post('tgl_daftar');
		$tgl_experied = $this->input->post('tgl_experied');
		$status = $this->input->post('status');

		$data = array(
			'nama' => $nama,
			'nama_paket' => $nama_paket,
			'nama_trainer' => $nama_trainer,
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
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil di update <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
		redirect('administrator/member');
	}

	public function delete($id)
	{
		$where = array('id_member' => $id );
		$this->member_model->hapus_data($where,'member');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> data berhasil di hapus <button type="button" class="close" data-dismiss="alert" aria-label="close"> <span aria-hidden="true">&times;</span> </button> </div>' );
		redirect('administrator/member');
	}
	public function cari()
		{

		$keyword = $this->input->get('keyword');
		


		$data['member'] = $this->member_model->cari_data($keyword);
		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/member',$data);
 		$this->load->view('templates_administrator/footer');
		}
}
 