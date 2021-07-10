<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class UserModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('users')->result();
    }

	public function show_admin()
    {
        $this->db->select('*');
		$this->db->where('role',1);
        return $this->db->get('users')->result();
    }

	public function show_user()
    {
        $this->db->select('*');
		$this->db->where('role',10);
        return $this->db->get('users')->result();
    }

	public function show_id($id)
    {
        $this->db->select('*');
		$this->db->where('id',$id);
        return $this->db->get('users')->result();
    }

	public function show_detail_study_id($id)
	{
		$this->db->select('*,users_detail.id as users_detail_id,,study.id as study_id');
		$this->db->where('users.id',$id);
		$this->db->join('users_detail','users_detail.users_id = users.id');
		$this->db->join('study','study.users_id = users.id');
        return $this->db->get('users')->result();
	}

	public function show_user_tubeldn()
    {
        $this->db->select('*');
		$this->db->where('users_detail.status',1);
		$this->db->join('users','users_detail.users_id = users.id');
        return $this->db->get('users_detail')->result();
    }

    public function insert($data)
    {
        $this->db->insert('users', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function delete($id)
    {
        $this->db->delete('users', ['id' => $id]);
    }
    
}  
