<?php
class EmployeeModel extends CI_Model{
    public function insert_student($student){
        return $this->db->insert('student', $student);
    }
}
?>