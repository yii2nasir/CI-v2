<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Curd_model extends CI_Model {

protected $_empID;

public static function tableName(){
        return 'employees';
    }
public static function tableFields(){
        return array('id', 'name', 'last_name', 'email', 'address', 'contact_no', 'salary');
}

public function setEmpID($empID) {
    $this->_empID = $empID;
}

// get Employee List
public function getEmpList() {

    $this->db->select($this->tableFields());
    $this->db->from($this->tableName());        
    $query = $this->db->get();
    return $query->result_array();
}
// create new Employee
public function createEmp($data=null) {
    
    $this->db->insert($this->tableName(), $data);
    return $this->db->insert_id();
}
// update Employee
public function updateEmp($id,$data) { 
    
    $this->db->where('id', $id);
    $this->db->update($this->tableName(), $data);
   
}
// for display Employee
public function getEmp() {        
    $this->db->select($this->tableFields());
    $this->db->from($this->tableName());  
    $this->db->where('id', $this->_empID);     
    $query = $this->db->get();
   return $query->row_array();
}
// delete Employee
public function deleteEmp($id) {         
    $this->db->where('id', $id);
    $this->db->delete($this->tableName());  
}

}	
?>