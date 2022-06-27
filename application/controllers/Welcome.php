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
		$stu['k'] =$data->result_array();
		$this->load->view("Employee", $stu);
	}
	public function store()
	{
		$data = ["firstname" => $this->input->post("firstname"), "lastname" => $this->input->post("lastname"), "gender" => $this->input->post("gender")];
		$this->load->model("EmployeeModel");
		$student = new EmployeeModel();
		$student->insert_student($data);
		redirect(base_url("employee"));
	}
	public function delete($id){
		$this->load->model("EmployeeModel");
		$student = new EmployeeModel();
		$student->delete_student($id);
		redirect(base_url("employee"));
	}
	public function edit($id){
		$this->load->model("EmployeeModel");
		$k["k"] = $id;
		$this->load->view("Employee", $k);
		$student = new EmployeeModel();
		$stu = [
			"firstname" => $this->input->post("firstname"),
			"lastname" => $this->input->post("lastname"),
			"gender" => $this->input->post("gender")
		];
		if($stu["firstname"] !== NULL) {

			$student->update_student($id, $stu);
			redirect("employee");
		}
	}
}
