<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class staff extends CI_Controller { 

	function __construct(){
		parent::__construct();
		// cek login
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'welcome?pesan=belumlogin');
		}
	} 

	function index(){
		$data['orderbarang'] = $this->db->query("select * from orderbarang order by id_order desc limit 10")->result();
		$data['pengembalian'] = $this->db->query("select * from pengembalian order by id_kembali desc limit 10")->result();
		$data['member'] = $this->db->query("select * from member order by id_member desc limit 10")->result();
		$data['identitas'] = $this->db->query("select * from identitas order by id_member desc limit 10")->result();
		$data['barang'] = $this->db->query("select * from barang order by id_barang desc limit 10")->result();
		$this->load->view('staff/header');
		$this->load->view('staff/index',$data);
		$this->load->view('staff/footer');
	}

} 