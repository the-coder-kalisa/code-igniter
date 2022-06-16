<?php
class EmployeeModel extends CI_Model{
    public function insert_student($student){
        return $this->db->insert('student', $student);
    }
    public function delete_student($id){
        $this -> db -> where('studentid', $id);
        return $this -> db -> delete('student');
    }
    public function update_student($id, $stu) {
        $this->db->set($stu);
        $this->db->where('studentid',(int)$id);
        $this->db->update("student",$stu);
    }
}
?>