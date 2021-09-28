<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class SliderModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('slider')->result();
    }

	public function show_active_id($id)
    {
        $this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('users_id',$id);
        return $this->db->get('slider')->result();
    }

    public function insert($data)
    {
        $this->db->insert('slider', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('slider', $data);
    }

    public function delete($id)
    {
        $this->db->delete('slider', ['id' => $id]);
    }
    
}  
