<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('example_models','customers');
		$this->load->helper('rupiah');
	}

	public function index()
	{
		
		$data = array('contents' => 'Dashboard/Example/index',
						'title' => "CTOR"
							);
				$this->load->view('Layouts/warper', $data);
	}

	public function ajax_list()
	{
		$list = $this->customers->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $customers->name_group;
			$row[] = $customers->name_user;
			$row[] = rupiah($customers->gaji);
			$row[] = $customers->username;

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->customers->count_all(),
						"recordsFiltered" => $this->customers->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

}


?>