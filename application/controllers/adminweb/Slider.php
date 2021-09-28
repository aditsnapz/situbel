<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SliderModel');
        $this->path = 'assets/uploads/slider/images/';
    }

	public function index()
	{
        $sliders = $this->SliderModel->show();
      
        $this->load->view('main_admin.php',[
            "page" => "slider",
            "content" => [],
            "sliders" => $sliders, 
        ]);
    }

    public function add()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama" => $this->input->post('nama'),
            "slidername" => $this->input->post('slidername'),
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
            $name = $this->input->post('slidername').'.'.$ext;
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
        $this->SliderModel->insert($data);
        redirect(base_url('admin/slider'));
        
        
    }

    public function edit()
    {
        $id = $this->input->post('id');
        date_default_timezone_set("Asia/Jakarta");
        $data = [
			"nama" => $this->input->post('nama'),
			"email" => $this->input->post('email'),
			"slidername" => $this->input->post('slidername'),
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
            $name = $this->input->post('slidername').'.'.$ext;
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
        redirect(base_url('admin/slider'));
    }

    public function delete()
    {
	
        $this->UserModel->delete($this->uri->segment(4));
        redirect(base_url('admin/slider'));
    }

	

}
