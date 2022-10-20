<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanStok  extends CI_Controller{
 
	function __construct(){
		parent::__construct();	
		$this->load->helper('rupiah_helper');
	}

	
	function index(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$filter = array(
				'start_date' => '',
				'end_date' => ''
			);

			$query = $this->db ->select('
			ref_kategori.kategori, 
			ref_barang.*, 
			ref_pembelian_barang.id_kategori
            ')
            ->join('ref_kategori', 'ref_pembelian_barang.id_kategori = ref_kategori.id_kategori')
            ->join('ref_barang', 'ref_barang.kode_barang = ref_pembelian_barang.id_barang');
			
			if(isset($_POST['start_date']) && isset($_POST['end_date'])){
				if($_POST['start_date'] != "" && $_POST['end_date'] != ""){
					if($_POST['start_date'] == $_POST['end_date']){
						$query = $query
						->where('DATE(ref_barang.createdAt) =', $_POST['start_date']);
					}else{						
						$query = $query
						->where('ref_barang.createdAt >=', $_POST['start_date'])
						->where('ref_barang.createdAt <=', $_POST['end_date']);
					}
				
				}
				$filter['start_date']	= $_POST['start_date'];
				$filter['end_date']		=	$_POST['end_date'];
			}

			$query = $query->get("ref_pembelian_barang")->result();
			
			$databind = array(
				'listStok' => $query,
				'filter' => $filter
			);
            $data = array('contents' => 'Dashboard/laporan/laporan_stok',
						  'title'	 => 'Laporan Stok',
						  'linkTo'	=> 'laporanStok',
						  'data' 	=> $databind,
							);
			$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

}
?>
