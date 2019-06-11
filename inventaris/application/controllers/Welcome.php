<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('s_inventaris');
	}
	
	public function index(){
		$this->load->view('login');
	}
	
	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation>set_rules('username','Username','trim|required');
		$this->form_validation>set_rules('password','Password','trim|required');
		if($this->form_validation->run() != false){
			$where = array( 
			'username' => $username,     
			'password' => md5($password)
			
			);
			$data = $this->s_inventaris->edit_data($where,'staff');
			$d = $this->s_inventaris->edit_data($where,'staff')>row();
			$cek = $data->num_rows();    
			if($cek > 0){
				$session = array(      
				'id'=> $d->id_staff,
				'nama'=> $d->nama,
				'status' => 'login'
				);
				$this->session->set_userdata($session);
				redirect(base_url().'staff');
			}else{
				redirect(base_url().'welcome?pesan=gagal');
				}
		}else{
			$this->load->view('login');
		}
	} 

}
