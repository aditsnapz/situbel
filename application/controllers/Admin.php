<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		if($this->session->userdata('session_admin')){
            redirect(base_url('admin/Dashboard'));
        }
        $this->load->view('login_admin');
    }
    
    public function do_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users',['username' => $username, 'password' => md5($password)])->result_array();
        if($user[0] != NULL && $user[0]['role'] == 1) {
        
            $data = [
                'username' => $username,
				'foto' => $user[0]['foto'],
				'nama' => $user[0]['nama'],
				'role' => $user[0]['role']
            ];

            $this->session->set_userdata("session_admin",$data);
            redirect(base_url('admin/dashboard'));
        }
        $this->session->set_flashdata('info','maaf username atau password salah');
        redirect(base_url('Login'));
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}
