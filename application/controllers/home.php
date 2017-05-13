<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function index(){
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('home');
        $this->load->view('footer');
	}
    
    public function kota(){
        $data['kota'] = $this->m_home->kota();
        $data['provinsi'] = $this->m_home->provinsi();
        
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('kota', $data);
        $this->load->view('footer');
	}
    
    public function input_kota(){
        $id_provinsi = $this->input->post('id_provinsi');
        
        if($id_provinsi == 'pilih di sini'){
            echo "<script>
                    window.location.href='".base_url('home/kota')."';
                    alert('Please Choose Provinsi');
                 </script>";
            
        }else{
        
        $data = array(
                    'id_provinsi' => $id_provinsi,
                    'kota' => $this->input->post('kota')
        ); 
		
		$this->m_home->input_kota($data);
		redirect(base_url('home/kota'));
        }
	}
    
    public function update_kota($id_kota = NULL){
        $data = array(
                    'id_provinsi' => $this->input->post('id_provinsi'),
                    'kota' => $this->input->post('kota')
        );
        
        $this->m_home->update_kota($id_kota, $data);
        redirect(base_url('home/kota'));
    }
    
    public function user(){
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('user');
        $this->load->view('footer');
	}
    
    public function input_user(){
        
        $data = array(
                    'id_provinsi' => $id_provinsi,
                    'kota' => $this->input->post('kota')
        ); 
		
		$this->m_home->input_kota($data);
		redirect(base_url('home/kota'));
        }
}

