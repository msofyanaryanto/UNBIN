<?php
class Error  extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_group');
 
	}

	
 
	function index(){
			$this->load->view('Layouts/error-404');
	}

}
?>
