<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class ReporttypeModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('report_type')->result();
    }

	public function show_id($id)
    {
        $this->db->select('*');
		$this->db->where('id',$id);
        return $this->db->get('report_type')->result()[0];
    }

    public function insert($data)
    {
        $this->db->insert('report_type', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('report_type', $data);
    }

    public function delete($id)
    {
        $this->db->delete('report_type', ['id' => $id]);
    }
    
}  
