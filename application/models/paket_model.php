<?php 
/**
 * 
 */
class paket_model extends CI_Model
{

public function tampil_data_paket()
	{
		return $this->db->get('paket');
	}

	public function input_data_paket($data)
	{
		$this->db->insert('paket', $data);
	}
	public function edit_data_paket($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function update_data_paket($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data_paket($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}