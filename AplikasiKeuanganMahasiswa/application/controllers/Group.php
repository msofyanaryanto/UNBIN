<?php
class Group  extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_group');
 
	}

	
 
	function index(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$data = array('contents' => 'Dashboard/Groups/index',
						  'data_group' => $this->model_group->tampil_data()->result()
							);
				$this->load->view('Layouts/warper', $data);
		}else{
			session_destroy();
			redirect('dashboard');
		}
		echo $this->uri->segment(2);
	}

	public function add(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$data = array('contents' => 'Dashboard/Groups/add');
				$this->load->view('Layouts/warper', $data);
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function add_action(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
				$name_group = addslashes($this->input->post('name_group'));
				$create_at = addslashes(date("Y-m-d\TH:i:s.u"));
		 
				$data = array(
					'name_group' => $name_group,
					'create_at' => $create_at
					);
				$this->model_group->input_data($data,'ref_group');

				$id_group = $this->db->insert_id();
				$data_user_access = $this->model_group->tampil_data_user_access()->result();

				foreach($data_user_access as $value){
					$array = array(
									'id_group' => $id_group,
									'id_module' => $value->id_module,
									'id_parent' => $value->id_parent
								);
					$this->model_group->input_data_user_access($array,'ref_user_access');
					

				}
				redirect('group');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function delete($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$where = array('id_group' => $id);
				$where_id_user_access = array('id_group' => $id);
				$where_id_user = array('id_group' => $id);

				$this->model_group->hapus_data_user_access($where_id_user_access,'ref_user_access');
				$this->model_group->hapus_data_user($where_id_user,'ref_user');
				$this->model_group->hapus_data($where,'ref_group');
				redirect('group');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function edit($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$where = array('id_group' => $id);
				$data = array( 	'contents' => 'Dashboard/Groups/edit',
								'data_group' => $this->model_group->edit_data($where,'ref_group')->row()
								);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function update($id_group){

		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$name_group = addslashes($this->input->post('name_group'));
				$modified_at = addslashes(date("Y-m-d\TH:i:s.u"));
		 
				$data = array(
								'name_group' => $name_group,
								'modified_at' => $modified_at
								);

				$where = array(
								'id_group' => $id_group
							);
			 
				$this->model_group->update_data($where,$data,'ref_group');
				redirect('group');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	/*FUNCTION USER ACCESS*/

	public function manage($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$where = array('id_group' => $id);
				$data = array( 	'contents' => 'Dashboard/User_access/manage',
								'data_user_access' => $this->model_user_access->edit_data($where,'ref_user_access')->result(),
								'data_group' =>  $this->model_group->edit_data($where,'ref_group')->row()
								);
				$this->load->view('Layouts/warper', $data);
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function update_manage($id_group){

		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			$id_access = array('id_group' => $id_group);
		 		$data_user_access = $this->model_user_access->edit_data($id_access,'ref_user_access')->result();
		 		$hitung_data = count($data_user_access);

		 		for($i=1; $i <= $hitung_data; $i++){
		 			$id_user_access = addslashes($this->input->post('id_user_access'.$i));
		 			$akses = addslashes($this->input->post('akses'.$i));
					$tambah = addslashes($this->input->post('tambah'.$i));
					$lihat = addslashes($this->input->post('lihat'.$i));
					$edit = addslashes($this->input->post('edit'.$i));
					$hapus = addslashes($this->input->post('hapus'.$i));
					$ex_excel = addslashes($this->input->post('ex_excel'.$i));
					$ex_pdf = addslashes($this->input->post('ex_pdf'.$i));
					$modified_at = addslashes(date('Y-m-d\TH:i:s.u'.$i));

		 			$data = array(
		 						'id_user_access' => $id_user_access,
								'akses' => $akses,
								'tambah' => $tambah,
								'lihat' => $lihat,
								'edit' => $edit,
								'hapus' => $hapus,
								'ex_excel' => $ex_excel,
								'ex_pdf' => $ex_pdf,
								'modified_at' => $modified_at
								);
		 			$where = array('id_user_access' => $id_user_access);
		 			$this->model_user_access->update_data($where,$data,'ref_user_access');
		 		}
				redirect('group');
			
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	/*FUNCTION USER ACCESS*/

	
 
}
?>
