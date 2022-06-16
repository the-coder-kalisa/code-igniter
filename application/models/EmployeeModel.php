<?php
class EmployeeModel extends CI_Model{
    public function insert_student($student){
        return $this->db->insert('student', $student);
    }
    public function delete_student($id){
        return $this->db->delete('student', $id);
    }
    public function update_student($id, $student) {
        return $this->db->update('student', $id, $student);
    }
}
?>