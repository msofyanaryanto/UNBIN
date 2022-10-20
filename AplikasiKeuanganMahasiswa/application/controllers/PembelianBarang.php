<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembelianBarang extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
	}

	
	function index(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$query = $this->db->query("SELECT
			ref_kategori.kategori, 
			ref_pembelian_barang.*, 
			ref_supplier.nama_supplier
		FROM
			ref_pembelian_barang
			INNER JOIN
			ref_kategori
			ON 
				ref_pembelian_barang.id_kategori = ref_kategori.id_kategori
			INNER JOIN
			ref_supplier
			ON 
				ref_pembelian_barang.id_supplier = ref_supplier.id_supplier")->result();
			$data = array('contents' => 'Dashboard/pembelianBarang/index',
						  'title'	 => 'Pembelian Barang',
						  'linkTo'	=> 'pembelianBarang',
						  'data' 	=> $query,
							);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	function search(){
		$kode_barang = addslashes($this->input->post('id_barang'));
		$validasiData = $this->db->query("SELECT
		ref_pembelian_barang.id_supplier,
		ref_pembelian_barang.id_kategori, 
		ref_barang.*
	FROM
		ref_pembelian_barang
		INNER JOIN
		ref_barang
		ON 
			ref_pembelian_barang.id_barang = ref_barang.kode_barang where kode_barang = '$kode_barang'");
		if($validasiData->num_rows() > 0){
			$data = $validasiData->row();
			$callback = array (
				'status' => "success",
				'id_supplier' => $data->id_supplier,	
				'id_kategori' => $data->id_kategori,
				'nama_barang' => $data->nama_barang,
				'harga_beli' => $data->harga_beli,
				'harga_jual' => $data->harga_jual,
			);
		}else{
			$callback = array (
				'status' => "success",
				'id_supplier' => "",	
				'id_kategori' => "",
				'nama_barang' => "",
				'harga_beli' => "",
				'harga_jual' => "",
			);
		}
		echo json_encode($callback); 
		
	}

	function edit($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$query = $this->db->query("select * from ref_pembelian_barang where id_pembelian = '$id'")->row();
			$kategori = $this->db->get("ref_kategori")->result();
			$supplier = $this->db->get("ref_supplier")->result();
			$data = array('contents' => 'Dashboard/pembelianBarang/edit',
						  'title'	 => 'Pembelian Barang',
						  'linkTo'	=> 'pembelianBarang',
						  'data' 	=> $query,
                          'kategori' => $kategori,
                          'supplier' => $supplier
							);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function add(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
                $kategori = $this->db->get("ref_kategori")->result();
                $supplier = $this->db->get("ref_supplier")->result();
				$data = array('contents' => 'Dashboard/pembelianBarang/add',
							'title'	 => 'Pembelian Barang',
							'linkTo'	=> 'pembelianBarang',	
                          'kategori' => $kategori,
                          'supplier' => $supplier
							);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function delete($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$getStock = $this->db->query("select * from ref_pembelian_barang where id_pembelian = '$id'")->row();
			$barang = $this->db->query("select * from ref_barang where kode_barang = '$getStock->id_barang'");
			if($barang->num_rows() > 0){
					$value = $barang->row();
					$dataBarang = array(
						stok => $value->stok - $getStock->jumlah
					);
					$keyBarang = array (
						'kode_barang' => $getStock->id_barang
					);
					$this->db->update('ref_barang',$dataBarang,$keyBarang);

					
			}		
			$key = array(
				'id_pembelian' => $id,
				);
			$this->db->delete("ref_pembelian_barang",$key);
			//notif
			$this->session->set_flashdata("notif","<div class=\"alert alert-alt alert-success alert-dismissible\" role=\"alert\">
					  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					   <span aria-hidden=\"true\">&times;</span>
					  </button><a class=\"alert-link\" href=\"javascript:void(0)\">
					  <i class=\"icon wb-bell\" aria-hidden=\"true\"></i>
					  Data Berhasil di hapus.</a>.
					</div>
					");
			redirect('pembelianBarang');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function add_action(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
		    	$id_barang = addslashes($this->input->post('barangID'));
                $id_kategori = addslashes($this->input->post('kategoriID'));
                $id_supplier = addslashes($this->input->post('supplierID'));
                $nama_barang = addslashes($this->input->post('namaBarang'));
                $jumlah = addslashes($this->input->post('jumlah'));
                $hargaBeli = addslashes($this->input->post('hargaBeli'));
                $hargaJual = addslashes($this->input->post('hargaJual'));

				$data = array(
					'id_barang' => $id_barang,
                    'id_kategori' => $id_kategori,
                    'id_supplier' => $id_supplier,
                    'nama_barang' => $nama_barang,
                    'jumlah' => $jumlah,
                    'harga_beli' => $hargaBeli,
                    'harga_jual' => $hargaJual,
					'createdBy'	=>  $this->session->userdata('username')
					);
				$this->db->insert('ref_pembelian_barang',$data);
				
				$validasiData = $this->db->query("select stok from ref_barang where kode_barang = '$id_barang'");
				
				if($validasiData->num_rows() > 0){
					$barang = $validasiData->row();
					
					$dataBarang = array(
						'stok' => $barang->stok + $jumlah,
						);
					$keyValid = array(
						'kode_barang' => $id_barang
					);
					$this->db->update('ref_barang',$dataBarang,$keyValid);
				}else{
					$dataBarang = array(
						'kode_barang' => $id_barang,
						'id_kategori' => $id_kategori,
						'nama_barang' => $nama_barang,
						'stok' => $jumlah,
						'harga_beli' => $hargaBeli,
						'harga_jual' => $hargaJual,
						'createdBy'	=>  $this->session->userdata('username')
						);
					$this->db->insert('ref_barang',$dataBarang);
				}
				
				//notif
					$this->session->set_flashdata("notif","<div class=\"alert alert-alt alert-success alert-dismissible\" role=\"alert\">
					<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					<span aria-hidden=\"true\">&times;</span>
					</button><a class=\"alert-link\" href=\"javascript:void(0)\">
					<i class=\"icon wb-bell\" aria-hidden=\"true\"></i>
					Data Berhasil di simpan.</a>.
				</div>
				");
				redirect('pembelianBarang');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function update_action($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
		
			$key = array(
			'id_pembelian' => $id,
			);
				$id_barang = addslashes($this->input->post('barangID'));
                $id_kategori = addslashes($this->input->post('kategoriID'));
                $id_supplier = addslashes($this->input->post('supplierID'));
                $nama_barang = addslashes($this->input->post('namaBarang'));
                $jumlah = addslashes($this->input->post('jumlah'));
				$jumlahOld = addslashes($this->input->post('jumlahOld'));
                $hargaBeli = addslashes($this->input->post('hargaBeli'));
                $hargaJual = addslashes($this->input->post('hargaJual'));

				$data = array(
					'id_barang' => $id_barang,
                    'id_supplier' => $id_supplier,
                    'nama_barang' => $nama_barang,
                    'jumlah' => $jumlah,
                    'harga_beli' => $hargaBeli,
                    'harga_jual' => $hargaJual,
					'createdBy'	=>  $this->session->userdata('username')
					);
				
			$this->db->update('ref_pembelian_barang',$data,$key);
			
			$validasiData = $this->db->query("select stok from ref_barang where kode_barang = '$id_barang'");
				
				if($validasiData->num_rows() > 0){
					$barang = $validasiData->row();
					
					$dataBarang = array(
						'stok' => $barang->stok - $jumlahOld + $jumlah,
						);
					$keyValid = array(
						'kode_barang' => $id_barang
					);
					$this->db->update('ref_barang',$dataBarang,$keyValid);
				}

			//notif
			$this->session->set_flashdata("notif","<div class=\"alert alert-alt alert-success alert-dismissible\" role=\"alert\">
					  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					   <span aria-hidden=\"true\">&times;</span>
					  </button><a class=\"alert-link\" href=\"javascript:void(0)\">
					  <i class=\"icon wb-bell\" aria-hidden=\"true\"></i>
					  Data Berhasil di update.</a>.
					</div>
					");
			redirect('pembelianBarang');
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}
}
?>
