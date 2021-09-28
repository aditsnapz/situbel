<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->path = 'assets/uploads/user/images/';
    }

	public function index()
	{
        $users = $this->UserModel->show_user();
      
        $this->load->view('main_admin.php',[
            "page" => "user",
            "content" => [],
            "users" => $users, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama" => $this->input->post('nama'),
            "username" => $this->input->post('username'),
            "role" => 10,
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
            $name = $this->input->post('username').'.'.$ext;
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
        redirect(base_url('admin/user'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"nama" => $this->input->post('nama'),
			"email" => $this->input->post('email'),
			"username" => $this->input->post('username'),
            "updated_at" => date("Y-m-d H:i:s"),
        ];

        if($this->input->post('password') != NULL) {
            $data['password'] = md5($this->input->post('password'));
        }

        if (isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != '') {
            $config['upload_path'] = $this->path;
            $config['max_size'] = '0';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = FALSE;
                $filename = $_FILES['foto']['name'];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $name = $this->input->post('username').'.'.$ext;
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
        redirect(base_url('admin/user'));
    }

    public function delete()
    {
	
        $this->UserModel->delete($this->uri->segment(4));
        redirect(base_url('admin/user'));
    }

	public function activation()
    {
	
		$data = [
			"status" => 1,
		];
        var_dump($this->UserModel->update($data, $this->uri->segment(4)));
		
        redirect(base_url('admin/user'));
    }

}
