<?php 
/**
 * 
 */
class member_model extends CI_Model
{
	
	public function tampil_data()
	{
		return $this->db->get('member');
	}

	public function input_data($data)
	{
		$this->db->insert('member', $data);
	}
	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function cari_data($keyword)
	{
		$this->db->select('*');
		$this->db->from('member');
		$this->db->like('nama',$keyword);
		return $this->db->get()->result();

	}
	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}

	
 