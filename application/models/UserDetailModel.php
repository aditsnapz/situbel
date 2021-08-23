<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class UserDetailModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('users_detail')->result();
    }

	

	public function show_id($id)
    {
        $this->db->select('*');
		$this->db->where('id',$id);
        return $this->db->get('users_detail')->result();
    }

	public function show_users_id($id)
    {
        $this->db->select('*');
		$this->db->where('users_id',$id);
        return $this->db->get('users_detail')->result();
    }

	
    public function insert($data)
    {
        $this->db->insert('users_detail', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('users_detail', $data);
    }

    public function delete($id)
    {
        $this->db->delete('users_detail', ['id' => $id]);
    }
    
}  
