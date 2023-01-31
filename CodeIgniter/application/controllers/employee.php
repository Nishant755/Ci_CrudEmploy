<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Employee extends CI_Controller{
	function __construct(){//constructor
		parent:: __construct();
		$this->load->model('employee_m','m');//load model
	}

	function index(){//we know by ddefault we can load index
		$this->load->view('layout/header');//load
		$this->load->view('employee/index');//load
		$this->load->view('layout/footer');//load
	}

	public function showAllEmployee(){
		$result = $this->m->showAllEmployee();
		echo json_encode($result);//json 
	}

	public function addEmployee(){
		$result = $this->m->addEmployee();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function editEmployee(){
		$result = $this->m->editEmployee();
		echo json_encode($result);
	}

	public function updateEmployee(){
		$result = $this->m->updateEmployee();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function deleteEmployee(){
		$result = $this->m->deleteEmployee();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

}