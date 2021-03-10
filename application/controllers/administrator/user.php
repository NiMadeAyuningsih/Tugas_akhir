<?php 


class user extends CI_Controller
{
	
	public function index()
	{
	    $data['user'] = $this->user_model->tampil_data()->result();
		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		 $this->load->view('administrator/user',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data = array(
			'id_user' => set_value('id_user'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'email' => set_value('email'),
			'level' => set_value('level'),
		);

		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/user_form',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->input();
		}else{
			$data = array(
				'id_user' => $this->input->post('id_user', TRUE),
				'username' => $this->input->post('username', TRUE),
				'password' => $this->input->post('password', TRUE),
				'email' => $this->input->post('email', TRUE),
				'level' => $this->input->post('level', TRUE),
			);

			$this->user_model->input_data($data);
			$this->session->set_flashdata('pesan','data berhasil ditambahkan');
			redirect('administrator/user');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_user', 'id_user','required');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('level','level','required');

	}

	public function update($id)
	{
		$where = array('id_user' => $id);
		$data['user'] = $this->user_model->edit_data($where, 'user')->result();
		$this->load->view('templates_administrator/header');
 		$this->load->view('templates_administrator/sidebar');
 		$this->load->view('administrator/user_update',$data);
 		$this->load->view('templates_administrator/footer');
	}

	public function update_aksi()
	{
		$id = $this->input->post('id_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		

		$data = array(
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'level' => $level,
			
		);

		$where = array(
			'id_user' => $id );
		$this->user_model->update_data($where,$data,'user');
		redirect('administrator/user');
	}

	public function delete($id)
	{
		$where = array('id_user' => $id );
		$this->user_model->hapus_data($where,'user');
		redirect('administrator/user');
	}
}