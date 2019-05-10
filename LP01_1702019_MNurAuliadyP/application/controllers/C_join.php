<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_join extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_join');
        $this->load->helper('url');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->model('M_join');
		// $data['krt'] = $this->Mbebas->getAll()->result();
		$this->load->view('V_home');
	}

	public function left_join(){
		$data['krt'] = $this->M_join->left();
		$this->load->view('V_left', $data);
	}

	public function right_join(){
		$data['krt'] = $this->M_join->right();
		$this->load->view('V_right', $data);
	}

	public function inner_join(){
		$data['krt'] = $this->M_join->inner();
		$this->load->view('V_inner', $data);
	}


}
