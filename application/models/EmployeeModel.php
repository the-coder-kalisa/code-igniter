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
        $data = array("firstname"=>"kalfasdfafdafda");
        $this->db->set($data);
        $this->db->where('studentid',$id);
        $this->db->update("student",$data);
    }
}
?>