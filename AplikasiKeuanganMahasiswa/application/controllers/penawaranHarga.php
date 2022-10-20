<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penawaranHarga  extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_user','karyawan');
	}

	
	function index(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$data = array('contents' => 'Dashboard/penawaranHarga/formPenawaranHarga/index',
						  'title'	 => 'Form Penawaran Harga'
							);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}


 
}
?>
