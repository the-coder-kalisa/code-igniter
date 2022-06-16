<?php
class StudentController extends CI_Controller
{
    public function index() {
        $this->load->model("StudentModel");
        $student = $this->StudentModel->student_data();
        echo $student;
    }
}

?>