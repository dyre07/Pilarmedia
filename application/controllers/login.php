<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
	public function index(){
		$this->load->view('login');
	}
    
    public function doLogin(){
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $num_rows = $this->m_login->check($email, $pass);
        
        if($num_rows==1){
            $data['user'] = $this->m_login->user($email, $pass);
            $ses = array(
                'id_user' => $data['user'][0]['id_user'],
				'nama' => $data['user'][0]['email'],
				'login' => TRUE
            );
            
            $this->session->set_userdata($ses);
            echo "<script>
                    window.location.href='".base_url('home')."';
                    alert('Login Success');
                 </script>";
        }else{
            echo "<script>
                    window.location.href='".base_url('login')."';
                    alert('Login Failed, Wrong Username or Password');
                 </script>";
        }
    }
}

