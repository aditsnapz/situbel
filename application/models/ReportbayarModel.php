<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class ReportbayarModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('report_bayar')->result();
    }

	public function show_id($id)
    {
        $this->db->select('*');
		$this->db->where('users_id',$id);
        return $this->db->get('report_bayar')->result();
    }

    public function insert($data)
    {
        $this->db->insert('report_bayar', $data);
		return $this->db->insert_id();
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('report_bayar', $data);
    }

    public function delete($id)
    {
        $this->db->delete('report_bayar', ['id' => $id]);
    }
    
}  
