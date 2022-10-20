<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier  extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
	}

	
	function index(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$query = $this->db->get("ref_supplier")->result();
			$data = array('contents' => 'Dashboard/supplier/index',
						  'title'	 => 'Supplier',
						  'linkTo'	=> 'Supplier',
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
			$query = $this->db->query("select * from ref_supplier where id_supplier = '$id'")->row();
			$data = array('contents' => 'Dashboard/supplier/edit',
						  'title'	 => 'Supplier',
						  'linkTo'	=> 'Supplier',
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
				$data = array('contents' => 'Dashboard/supplier/add',
							'title'	 => 'Supplier',
							'linkTo'	=> 'Supplier',	
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
				'id_supplier' => $id,
				);
			$this->db->delete("ref_supplier",$key);
			//notif
			$this->session->set_flashdata("notif","<div class=\"alert alert-alt alert-success alert-dismissible\" role=\"alert\">
					  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					   <span aria-hidden=\"true\">&times;</span>
					  </button><a class=\"alert-link\" href=\"javascript:void(0)\">
					  <i class=\"icon wb-bell\" aria-hidden=\"true\"></i>
					  Data Berhasil di hapus.</a>.
					</div>
					");
			redirect('supplier');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function add_action(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$supplier = addslashes($this->input->post('supplier'));
            $nomor_handphone = addslashes($this->input->post('nomor_handphone'));
            $email = addslashes($this->input->post('email'));
            $alamat = addslashes($this->input->post('alamat'));

				$data = array(
					'nama_supplier' => $supplier,
                    'nomor_handphone' => $nomor_handphone,
                    'email' => $email,
                    'alamat' => $alamat,
					);
				$this->db->insert('ref_supplier',$data);
				//notif
					$this->session->set_flashdata("notif","<div class=\"alert alert-alt alert-success alert-dismissible\" role=\"alert\">
					<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					<span aria-hidden=\"true\">&times;</span>
					</button><a class=\"alert-link\" href=\"javascript:void(0)\">
					<i class=\"icon wb-bell\" aria-hidden=\"true\"></i>
					Data Berhasil di simpan.</a>.
				</div>
				");
				redirect('supplier');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function update_action($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			
            $supplier = addslashes($this->input->post('supplier'));
            $nomor_handphone = addslashes($this->input->post('nomor_handphone'));
            $email = addslashes($this->input->post('email'));
            $alamat = addslashes($this->input->post('alamat'));

				$data = array(
					'nama_supplier' => $supplier,
                    'nomor_handphone' => $nomor_handphone,
                    'email' => $email,
                    'alamat' => $alamat,
					);

			$key = array(
			'id_supplier' => $id,
			);
			
			$this->db->update('ref_supplier',$data,$key);
			

			//notif
			$this->session->set_flashdata("notif","<div class=\"alert alert-alt alert-success alert-dismissible\" role=\"alert\">
					  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					   <span aria-hidden=\"true\">&times;</span>
					  </button><a class=\"alert-link\" href=\"javascript:void(0)\">
					  <i class=\"icon wb-bell\" aria-hidden=\"true\"></i>
					  Data Berhasil di update.</a>.
					</div>
					");
			redirect('supplier');
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}
}
?>
