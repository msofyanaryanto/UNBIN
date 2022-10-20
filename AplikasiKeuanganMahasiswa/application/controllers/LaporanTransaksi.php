<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanTransaksi  extends CI_Controller{
 
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

			$listTransaksi = $this->db;

			if(isset($_POST['start_date']) && isset($_POST['end_date'])){
				if($_POST['start_date'] != "" && $_POST['end_date'] != ""){
					if($_POST['start_date'] == $_POST['end_date']){
						$listTransaksi = $this->db
						->where('DATE(tr_transaksi.createdAt) =', $_POST['start_date'])
						->get("tr_transaksi")
						->result();

						$xTotal = $this->db
						->select("sum(total) as tJual,sum(totalBeli) as tBeli")
						->where('DATE(tr_transaksi.createdAt) =', $_POST['start_date'])
						->get("tr_transaksi")
						->row();
					}else{						
						$listTransaksi = $this->db
						->where('tr_transaksi.createdAt >=', $_POST['start_date'])
						->where('tr_transaksi.createdAt <=', $_POST['end_date'])
						->get("tr_transaksi")
						->result();

						$xTotal = $this->db
						->select("sum(total) as tJual,sum(totalBeli) as tBeli")
						->where('tr_transaksi.createdAt >=', $_POST['start_date'])
						->where('tr_transaksi.createdAt <=', $_POST['end_date'])
						->get("tr_transaksi")
						->row();
					}					
				}
				$filter['start_date']	= $_POST['start_date'];
				$filter['end_date']		=	$_POST['end_date'];
			}else {
				$xTotal = $this->db
					->select("sum(total) as tJual,sum(totalBeli) as tBeli")
					->get("tr_transaksi")
					->row();

				$listTransaksi = $this->db->get("tr_transaksi")->result();
			}

			//$listTransaksi = $listTransaksi->get("tr_transaksi")->result();

			foreach($listTransaksi as $index => $transaksi){
				$detailTransaksi = $this->db
				->select('ref_barang.nama_barang')
				->join('ref_barang', 'ref_barang.kode_barang = tr_detail_transaksi.barangId')
				->where('tr_detail_transaksi.noStruk',$transaksi->no_struk)
				->get("tr_detail_transaksi")
				
				->result();

				

				$listbarang = [];
				foreach($detailTransaksi as $detailTransaksiVal){
					array_push($listbarang,$detailTransaksiVal->nama_barang);
				}

				$listTransaksi[$index]->list_barang = implode(",",$listbarang);
			}
			$totalPendapatan = $this->db->select_sum('total')->get("tr_transaksi")->row();
			
			$databind = array(
				'totalPendapatan' => $totalPendapatan->total,
				'listTransaksi' => $listTransaksi,
				'filter' => $filter
			);
            $data = array('contents' => 'Dashboard/laporan/laporan_transaksi',
						  'title'	 => 'Laporan Transaksi',
						  'linkTo'	=> 'laporanTransaksi',
						  'data' 	=> $databind,
						  'totalAll' => $xTotal
							);
			$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

}
?>
