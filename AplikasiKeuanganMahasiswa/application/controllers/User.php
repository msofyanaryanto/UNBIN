<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User  extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_user','karyawan');
	}

	
	function index(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$query = $this->db->query("SELECT
			ref_group.name_group, 
			ref_user.name_user, 
			ref_user.id_user, 
			ref_user.username, 
			ref_user.created_at
		FROM
			ref_user
			INNER JOIN
			ref_group
			ON 
				ref_user.id_group = ref_group.id_group")->result();
			$data = array('contents' => 'Dashboard/Users/index',
						  'title'	 => 'User',
						  'data' 	=> $query
							);
				$this->load->view('Layouts/warper', $data);
			
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
			$row[] = $karyawan->name_group;
			$row[] = $karyawan->name_user;
			$row[] = $karyawan->username;

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
				$data = array('contents' => 'Dashboard/Users/add',
							   'select_group' => $this->karyawan->select_group()->result(),
							   'title'		 => "User"		
							);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function add_action(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$id_group = addslashes($this->input->post('id_group'));
				$gaji = str_replace('.','',addslashes($this->input->post('gaji')));
				$name_user = addslashes($this->input->post('name_user'));
				$username = addslashes($this->input->post('username'));
				$password = addslashes(md5(md5($this->input->post('password'))));
				$created_at = addslashes(date("Y-m-d\TH:i:s.u"));
		 
				$data = array(
					'id_group' => $id_group,
					'name_user' => $name_user,
					'username' => $username,
					'password' => md5(md5($password)),
					'created_at' => $created_at
					);
				$this->db->insert('ref_user',$data);

				redirect('user');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function edit($id){
		$getData = $this->db->where('id_user',$id)->from('ref_user')->get()->row();
		$data = array('contents' => 'Dashboard/Users/edit',
					'select_group' => $this->karyawan->select_group()->result(),
					'title'	 => 'User',
					'data' 	=> $getData
				);
		$this->load->view('Layouts/warper', $data);
	}

	public function edit_action(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$id_group = addslashes($this->input->post('id_group'));
			$gaji = str_replace('.','',addslashes($this->input->post('gaji')));
			$name_user = addslashes($this->input->post('name_user'));
			$username = addslashes($this->input->post('username'));
			$password = addslashes(md5(md5($this->input->post('password'))));
			$created_at = addslashes(date("Y-m-d\TH:i:s.u"));
		
			$data['id_group'] = $id_group;
			$data['name_user'] = $name_user;
			$data['username'] = $username;
			if($this->input->post('password') !=""){
				$data['password'] = md5(md5($password));
			}

			$this->db->where('id_user',$id)->update('ref_user',$data);

			redirect('user');
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function delete($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$this->db->where('id_user',$id)->from('ref_user')->delete();
			redirect('user');
		}else{
			session_destroy();
			redirect('dashboard');
		}
		
	}
}
?>
