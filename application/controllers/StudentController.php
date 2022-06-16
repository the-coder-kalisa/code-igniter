<?php
class StudentController extends CI_Controller
{
    public function index() {
        $this->load->model("StudentModel", "stud");
        $student = $this->stud->student_data();;
        echo $student;
    }
}

?>