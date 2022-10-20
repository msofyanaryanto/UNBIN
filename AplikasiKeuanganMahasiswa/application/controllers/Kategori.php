<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori  extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
	}

	
	function index(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$query = $this->db->get("ref_kategori")->result();
			$data = array('contents' => 'Dashboard/kategori/index',
						  'title'	 => 'Kategori',
						  'linkTo'	=> 'kategori',
						  'data' 	=> $query
							);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	function edit($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$query = $this->db->query("select * from ref_kategori where id_kategori = '$id'")->row();
			$data = array('contents' => 'Dashboard/kategori/edit',
						  'title'	 => 'Kategori',
						  'linkTo'	=> 'kategori',
						  'data' 	=> $query
							);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function add(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
				$data = array('contents' => 'Dashboard/kategori/add',
							'title'	 => 'Kategori',
							'linkTo'	=> 'kategori',	
							);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function delete($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$key = array(
				'id_kategori' => $id,
				);
			$this->db->delete("ref_kategori",$key);
			//notif
			$this->session->set_flashdata("notif","<div class=\"alert alert-alt alert-success alert-dismissible\" role=\"alert\">
					  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					   <span aria-hidden=\"true\">&times;</span>
					  </button><a class=\"alert-link\" href=\"javascript:void(0)\">
					  <i class=\"icon wb-bell\" aria-hidden=\"true\"></i>
					  Data Berhasil di hapus.</a>.
					</div>
					");
			redirect('kategori');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function add_action(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$kategori = addslashes($this->input->post('kategori'));
		 
				$data = array(
					'kategori' => $kategori,
					);
				$this->db->insert('ref_kategori',$data);
				//notif
					$this->session->set_flashdata("notif","<div class=\"alert alert-alt alert-success alert-dismissible\" role=\"alert\">
					<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					<span aria-hidden=\"true\">&times;</span>
					</button><a class=\"alert-link\" href=\"javascript:void(0)\">
					<i class=\"icon wb-bell\" aria-hidden=\"true\"></i>
					Data Berhasil di simpan.</a>.
				</div>
				");
				redirect('kategori');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function update_action($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$kategori = addslashes($this->input->post('kategori'));
			$key = array(
			'id_kategori' => $id,
			);
			$data = array(
				'kategori' => $kategori,
				);
			$this->db->update('ref_kategori',$data,$key);
			

			//notif
			$this->session->set_flashdata("notif","<div class=\"alert alert-alt alert-success alert-dismissible\" role=\"alert\">
					  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					   <span aria-hidden=\"true\">&times;</span>
					  </button><a class=\"alert-link\" href=\"javascript:void(0)\">
					  <i class=\"icon wb-bell\" aria-hidden=\"true\"></i>
					  Data Berhasil di update.</a>.
					</div>
					");
			redirect('kategori');
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}
}
?>
