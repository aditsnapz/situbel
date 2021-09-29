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
      
        $this->load->view('main_admin.php',[
            "page" => "slideradd",
            "content" => [],
        ]);
    }

	public function edit()
	{
		$id = $this->uri->segment(4);
		$slider = $this->SliderModel->show_id($id);
		// var_dump($slider);
		// die();
        $this->load->view('main_admin.php',[
            "page" => "slideredit",
            "content" => [],
			"slider" => $slider,
        ]);
    }

    public function add_process()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama" => $this->input->post('nama'),
            "judul" => $this->input->post('judul'),
            "deskripsi" => $this->input->post('deskripsi'),
            "status" => $this->input->post('status'),
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
            $name = $this->input->post('nama').'.'.$ext;
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

    public function edit_process()
    {
        $id = $this->input->post('id');
		date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama" => $this->input->post('nama'),
            "judul" => $this->input->post('judul'),
            "deskripsi" => $this->input->post('deskripsi'),
            "status" => $this->input->post('status'),
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
            $name = $this->input->post('nama').'.'.$ext;
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
        $this->SliderModel->update($data,$id);
        redirect(base_url('admin/slider'));
    }

    public function delete()
    {
	
        $this->UserModel->delete($this->uri->segment(4));
        redirect(base_url('admin/slider'));
    }

	

}
