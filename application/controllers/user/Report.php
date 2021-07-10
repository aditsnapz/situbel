<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ReportModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
		$session = $this->session->userdata('session_user');
		$user = $this->db->get_where('users',['username' => $session['username']])->result_array();
        $reports = $this->ReportModel->show_id($user[0]['id']);
      
        $this->load->view('main.php',[
            "page" => "report",
            "content" => [],
            "reports" => $reports, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama" => $this->input->post('nama'),
            "username" => $this->input->post('email'),
            "role" => $this->input->post('role'),
            "password" => md5($this->input->post('password')),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
        
        if (isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != '') {
            $config['upload_path'] = $this->path;
            $config['max_size'] = '0';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['overwrite'] = FALSE;
            $config['remove_spaces'] = FALSE;
                $filename = $_FILES['foto']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $name = $this->input->post('username').'-'.date("Y-m-d-H-i-s").'.'.$ext;
            $config['file_name'] = $name;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
                var_dump($this->path);
                die();
            }else{
                $data['foto'] = $name;
                
                
                
            }
        } 
        $this->UserModel->insert($data);
        redirect(base_url('User'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"nama" => $this->input->post('nama'),
			"email" => $this->input->post('email'),
            "updated_at" => date("Y-m-d H:i:s"),
        ];

        if($this->input->post('password') != NULL) {
            $data['password'] = md5($this->input->post('password'));
        }

        if (isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != '') {
            $config['upload_path'] = $this->path;
            $config['max_size'] = '0';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['overwrite'] = FALSE;
            $config['remove_spaces'] = FALSE;
                $filename = $_FILES['foto']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $name = $this->input->post('username').'-'.date("Y-m-d-H-i-s").'.'.$ext;
            $config['file_name'] = $name;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
                var_dump($this->path);
                die();
            }else{
                $data['foto'] = $name;
            }
        } 
        $this->UserModel->update($data, $id);
        redirect(base_url('User'));
    }

    public function delete($id)
    {
        $this->UserModel->delete($id);
        redirect(base_url('User'));
    }

}
