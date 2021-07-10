<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class ReportModel extends CI_Model
{
    public function show()
    {
        $this->db->select('*');
        return $this->db->get('report')->result();
    }

	public function show_id($id)
    {
        $this->db->select('*');
		$this->db->where('users_id',$id);
        return $this->db->get('report')->result();
    }

	public function show_report_tubeldn($id,$id_report)
    {
        $this->db->select('*');
		$this->db->where('users_id',$id);
		$this->db->where('report_type_id',$id_report);
        return $this->db->get('report')->result();
    }

    public function insert($data)
    {
        $this->db->insert('report', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('report', $data);
    }

    public function delete($id)
    {
        $this->db->delete('report', ['id' => $id]);
    }
    
}  
