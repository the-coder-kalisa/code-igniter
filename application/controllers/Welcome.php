<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		$this->load->view('welcome_message');
	}
	public function demo()
	{
		$this->load->view('about.php');
	}
	public function home()
	{
		echo "hello";
	}
	public function employee()
	{
		$data = $this->db->get('student');
		// print_r($data->result_array());
		$stu['k'] =$data->result_array();
		$this->load->view("Employee", $stu);
	}
	public function store()
	{
		// $this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email Address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			$data = ['email' => $this->input->post('email'), 'password' => $this->input->post('password')];
			print_r($data);
		}else{
		redirect(base_url('employee'));
		}
	}
}
