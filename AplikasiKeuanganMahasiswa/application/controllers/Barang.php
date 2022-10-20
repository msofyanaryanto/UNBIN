<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
	}

	
	function index(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$query = $this->db->query("SELECT
			ref_barang.*, 
			ref_kategori.kategori
		FROM
			ref_barang
			INNER JOIN
			ref_kategori
			ON 
				ref_barang.id_kategori = ref_kategori.id_kategori")->result();
			$data = array('contents' => 'Dashboard/barang/index',
						  'title'	 => 'Data Barang',
						  'linkTo'	=> 'barang',
						  'data' 	=> $query,
							);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

}
?>
