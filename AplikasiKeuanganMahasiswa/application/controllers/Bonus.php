<?php
class Bonus  extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_bonus','karyawan');
	}

	
	function index(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			if($this->model_user_access->access_access() == 1){
			$data = array('contents' => 'Dashboard/Bonus/index',
						  'title'	 => 'Bonus',
						  'gaji'	 => $this->karyawan->total_gaji(),
						  'bonus'	 => $this->karyawan->total_bonus()
							);
				$this->load->view('Layouts/warper', $data);
			}else{
				$this->load->view('Layouts/error-404');
			}
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function ajax_list()
	{
		$list = $this->karyawan->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $karyawan) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $karyawan->name_user;
			$row[] = rupiah($karyawan->gaji);
			$row[] = rupiah($karyawan->bonus);

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->karyawan->count_all(),
						"recordsFiltered" => $this->karyawan->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function add(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			if($this->model_user_access->access_add() == 1){
				$data = array('contents' => 'Dashboard/Bonus/add',
							   'title'		 => "Bonus karyawan"		
							);
				$this->load->view('Layouts/warper', $data);
			}else{
				$this->load->view('Layouts/error-404');
			}
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function add_action(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			if($this->model_user_access->access_add() == 1){
					$bonus = str_replace('.','',addslashes($this->input->post('bonus')));

					$this->db->select('*');
					$this->db->from('ref_user');
					$this->db->where("gaji >= '3000000' and id_group = '2'");
					$query_menu = $this->db->get()->result();
					$total = $this->karyawan->gaji();
					foreach($query_menu as $value){
						$rumus = floor($value->gaji / $total * $bonus);
						$data = array(
							'id_user' => $value->id_user,
							'bonus' => $rumus
							);
					$this->db->insert('bonus',$data);
						
					} 
			
					redirect('bonus');
			}else{
				$this->load->view('Layouts/error-404');
			}
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

 
}
?>
