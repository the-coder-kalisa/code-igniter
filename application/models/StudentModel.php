<?php
class StudentModel extends CI_Model
{
    private function student_class()
    {
        return $stud_class = "BCA";
    }
    public function student_data()
    {
        $stud_class = $this->student_class();
        return $stud_name = "Rohit  " . "$stud_class";
    }
    public function student_show($id)
    {
        return "User $id";
    }

    public function demo($id){
        return $title = $id;
    }
}
?>