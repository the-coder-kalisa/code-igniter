<?php
class StudentController extends CI_Controller
{
    public function index() {
        $this->load->model("StudentModel", "stud");
        $student = $this->stud->student_data();;
        echo $student;
    }
    public function show($id){
        $this->load->model("StudentModel", "student");
        $student = new StudentModel();
        $student = $student->student_show($id);
        echo $student;
    }
    public function show_Student($id) {
        $this->load->model("StudentModel", "Stu");
        $person = new StudentModel();
        $the = $person->demo($id);
        $data['giovanni'] = $the;
        $this->load->view("Student", $data);
    }
}

?>