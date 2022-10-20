<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi  extends CI_Controller{
 
	function __construct(){
		parent::__construct();	
		$this->load->helper('rupiah_helper');
	}

	
	function index(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$query = $this->db->query("select kode_barang, nama_barang , stok, harga_jual,harga_beli from ref_barang where stok > 0")->result();
			$id = $this->session->userdata('username');

			// generate kode struk
			$struk = $this->db->query("select  max(no_struk) as maxKode from tr_transaksi ");
			$cek = $struk->num_rows();
			$kode = $struk->row()->maxKode;
			$noUrut = (int) substr($kode, 3, 3);
			$noUrut++;
			$char = "STR";
			$newID = $char . sprintf("%03s", $noUrut);
			// tutup generate

			// validasi struk
			$dataTransaksi = $this->db->query("select no_struk from tr_transaksi where status='Belum Bayar' and createdBy = '$id'");
			if($dataTransaksi->num_rows() < 1){
				$oldId = $newID;
			}else{
				$struk = $dataTransaksi->row();
				$oldId = $struk->no_struk;
			}

			$dataKeranjang = $this->db->query("SELECT
			*, 
			tr_detail_transaksi.*, 
			ref_barang.nama_barang
		FROM
			tr_detail_transaksi
			INNER JOIN
			ref_barang
			ON 
				tr_detail_transaksi.barangId = ref_barang.kode_barang where noStruk = '$oldId'");
			$total = $this->db->query("select sum(total_harga) as total  from tr_detail_transaksi where noStruk = '$oldId'");



			$data = array('contents' => 'Dashboard/transaksi/index',
						  'title'	 => 'Transaksi',
						  'linkTo'	=> 'transaksi',
						  'data' 	=> $query,
						  'no_struk' => $oldId,
						  'data_keranjang' => $dataKeranjang->result(),
						  'total' => $total->row()->total
							);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	function deleteBarang($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){

			$key = array(
				"detail_transaksi_id" => $id,
			);
			$this->db->delete("tr_detail_transaksi",$key);
				redirect('transaksi');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}



	function addProd($id,$noStruk,$harga,$harga_beli){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$user = $this->session->userdata('username');
			// get data for validasi
			$dataTransaksi = $this->db->query("select id_transaksi from tr_transaksi where no_struk  = '$noStruk' and status='Belum Bayar'")->num_rows();
			$dataTransaksiDetail = $this->db->query("select detail_transaksi_id, jumlah, barangId from tr_detail_transaksi where noStruk  = '$noStruk' and barangId='$id'");
			$dataDetail = array(
				"barangId" => $id,
				"noStruk" => $noStruk,
				"harga" => $harga,
				"jumlah" => 1,
				"total_harga" => $harga,
				"total_harga_beli" => $harga_beli
			);
			$dataV = array(
				"status" => "Belum Bayar",
				"no_struk" => $noStruk,
				"createdBy" => $this->session->userdata('username')
			);

			$key = array(
				"detail_transaksi_id" => $dataTransaksiDetail->row()->detail_transaksi_id,
			);
			$total = $dataTransaksiDetail->row()->jumlah + 1;
			
			$updateData = array(
				"jumlah" => $total,
				"total_harga" => $total * $harga,
				"total_harga_beli" => $total * $harga_beli
			);

			if($dataTransaksi < 1){
				$this->db->insert("tr_transaksi", $dataV);
			}
			if($dataTransaksiDetail->num_rows() < 1){
				$this->db->insert("tr_detail_transaksi", $dataDetail);
			}else{
				$this->db->update("tr_detail_transaksi",$updateData,$key);
			}
		
				$this->load->view('Layouts/warper', $data);
				redirect('transaksi');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}


	function bayar($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$user = $this->session->userdata('username');
			// get data for validasi
			
			$dataTransaksiDetail = $this->db->query("select * from tr_detail_transaksi where noStruk  = '$id'")->result();
			$total = $this->db->query("select sum(total_harga) as total,sum(total_harga_beli) as total_beli  from tr_detail_transaksi where noStruk = '$id'");
			$key = array(
				"no_struk" => $id,
			);
			$updateData = array(
				"status" =>"Sudah Bayar",
				"total" => $total->row()->total,
				"totalBeli" => $total->row()->total_beli
			);

			$this->db->update("tr_transaksi",$updateData,$key);	
			$dataTransaksi = $this->db->query("select * from tr_transaksi where no_struk  = '$id' ")->row();
			$data = array(
						  'data' 	=> $dataTransaksi,
						  'data_detail' => $dataTransaksiDetail,
						  'total' => $total->row()->total
							);
			
				$this->load->view('Dashboard/transaksi/cetak', $data);

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
