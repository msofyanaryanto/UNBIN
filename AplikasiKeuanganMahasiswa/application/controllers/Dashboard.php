<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('model_menu');
        }


	
	public function index() {
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$arrTransaksi = '';
			$startDate = date('Y-m',strtotime('-1 month'));
			$endDate = date('Y-m');
			if($this->input->server('REQUEST_METHOD') === 'POST'){
				if($this->input->post('start_date')!=""){
					$startDate = $this->input->post('start_date');
				}
	
				if($this->input->post('end_date')!=""){
					$endDate = $this->input->post('end_date');
				}
			}

			$getDataTransaksi = $this->db->select('SUM(total) as total,CONCAT(MONTHNAME(createdAt)," ",SUBSTR(createdAt,1,4)) as period')
											->where('SUBSTR(createdAt,1,7) >=',$startDate)
											->where('SUBSTR(createdAt,1,7) <=',$endDate)
											->group_by('SUBSTR(createdAt,1,7)')
											->get('tr_transaksi')->result();
			
			$getDataProduk = $this->db->select('SUM(tdt.jumlah) as total, rb.nama_barang')
											->join('ref_barang rb','rb.kode_barang = tdt.barangId')
											->where('SUBSTR(tdt.createdAt,1,7) >=',$startDate)
											->where('SUBSTR(tdt.createdAt,1,7) <=',$endDate)
											->group_by('tdt.barangId')
											->get('tr_detail_transaksi tdt')->result();

			$getDataPembelian = $this->db->select('SUM(rpb.jumlah) as total, rb.nama_barang')
							->join('ref_barang rb','rb.kode_barang = rpb.id_barang')
							->where('SUBSTR(rpb.createdAt,1,7) >=',$startDate)
							->where('SUBSTR(rpb.createdAt,1,7) <=',$endDate)
							->group_by('rpb.id_barang')
							->get('ref_pembelian_barang rpb')->result();



			$data = array(
					'contents' => 'Dashboard/index',
					'startDate'=>$startDate,
					'endDate'=>$endDate,
					'transaksi'=>json_encode($getDataTransaksi),
					'produk'=>json_encode($getDataProduk),
					'pembelian'=>json_encode($getDataPembelian)
			);

			$this->load->view('Layouts/warper',$data);
		}else{
			$this->load->view('Layouts/Login');	
		}

	}

	

	public function get_login() {

		$username = addslashes($this->input->post('username'));
		$password = addslashes($this->input->post('password'));
		$passMD5 = md5(md5($password));

		$query_data = $this->db->get_where('ref_user', array('username' => $username, 'password' => $passMD5));


		if($query_data->num_rows() > 0){
			$name_user = $query_data->row()->name_user;
			$username = $query_data->row()->username;
			$id_group = $query_data->row()->id_group;
			
			// insert ke history
			$this->session->set_userdata('name_user',$name_user);
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('id_group',$id_group);
			$query_user_access = $this->db->get_where('ref_user_access', array('id_group' => $id_group))->result();
			/*$data_user_access = array($query_user_access);*/
			$this->session->set_userdata('data_user_access',$query_user_access);

			$this->db->select('*');
			$this->db->from('ref_module');
			$this->db->join('ref_user_access', 'ref_user_access.id_module = ref_module.id_module');
			$this->db->where('id_group',$id_group);
			$this->db->order_by("sort", "asc");
			$query_menu = $this->db->get()->result();

			$this->session->set_userdata('query_menu',$query_menu);
			
			$data_contents = array('contents' => 'test');

			redirect('dashboard','refresh');;
		}else{
			redirect('dashboard');
		}


	}

	public function get_menu(){
		/*$data = array('listMenu' => $this->model_menu->list_menu());
		print_r($data);
		exit();*/
		/*$this->load->view('test');*/
		/*$parent = "0";
		$hasil = "";
		echo $this->model_menu->menu($parent,$hasil);*/
		$array = $this->db->query("SELECT * from ref_module")->result();
		$parent_id = "0";
		$parents = array();
		echo $this->model_menu->bootstrap_menu($array,$parent_id,$parents);
		exit();


	}

	public function get_data(){
		print_r($this->session->userdata('query_menu'));
		exit();


	}

	public function get_logout() {
		 $this->session->sess_destroy();
		 $this->session->unset_userdata('query_menu',$query_menu);
		 redirect('dashboard');
	} 

	public function get_android() {
		 $this->session->sess_destroy();
		 $this->session->unset_userdata('query_menu',$query_menu);
		 redirect('dashboard');
	}

	
	
}