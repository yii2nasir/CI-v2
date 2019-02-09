<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Curd extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('Curd_model', 'emp');
    $this->load->helper('url');
    $this->load->library('form_validation');
}
// Employee list method

protected function rule(){
    return [   
        ['id','primary'], 
        ['name', 'First Name', 'trim|required'],
        ['last_name', 'Last Name', 'trim|required'],
        ['email', 'Your Email', 'trim|required|valid_email'],
        ['address', 'Address', 'trim|required'],
        ['contact_no', 'Phone', 'trim|required'],
        ['salary', 'Salary', 'trim|required'],   
    ];
}
public function index() {
    $data['page'] = 'emp-list';
    $data['title'] = 'Employee List | TechArise';
    $data['empInfo'] = $this->emp->getEmpList();    
    $this->load->view('emp/index', $data);
}
// Employee Add method
public function add() {
    $data['page'] = 'emp-add';
    $data['title'] = 'Employee Add | TechArise';
    $this->load->view('emp/add', $data);
}
// Employee save method
public function save() {
   foreach($this->rule() as $v){
       $v[1]=='primary'?'':$this->form_validation->set_rules($v[0],$v[1],$v[2] );
   }
      if($this->form_validation->run() == FALSE) {
      $this->add();
    } else { 
        $data=[];
        foreach($this->rule() as $v){
            if($v[1]!='primary'){
                ${$v[0]}=$this->input->post($v[0]); 
                $data=array_merge($data,[$v[0]=>${$v[0]}]);
            }
           }
        $this->emp->createEmp($data);
        redirect('/');
    }
}

// Employee edit method
public function edit($id='') {
    $data['page'] = 'emp-edit';
    $data['title'] = 'Employee Edit | TechArise';
    $this->emp->setEmpID($id);
    $data['empInfo'] = $this->emp->getEmp();
    $this->load->view('emp/edit', $data);
}
// Employee update method
public function update() {
    $this->load->library('form_validation');
    // field name, error message, validation rules
    foreach($this->rule() as $v){
        $v[1]=='primary'?'':
        $this->form_validation->set_rules($v[0],$v[1],$v[2] );
       }
  
    if($this->form_validation->run() == FALSE) {

      $this->edit();
    } else {
       // $emp_id = $this->input->post('emp_id');
       // $this->emp->setEmpID($emp_id);
       $postdata=$this->input->post();
       $data=[];
       $primary='';
      // echo "<pre>";print_r($this->input->post());exit;
        foreach($this->rule() as $v){
            if(in_array($postdata[$v[0]],$v)==false){
               if($v[1]=='primary'){
                $primary=$this->input->post($v[0]);
               // print_r($primary);exit;
               }else{
                $data=array_merge($data,[$v[0]=>$postdata[$v[0]]]);
               }
                
                
            }
            
       }
         
          /* echo "<pre>";
           print_r($data);
           print_r($primary);
           exit;*/
           $data['controller']=$this; 
        $this->emp->updateEmp( $primary,$data);
        redirect('/');
    }
}

// Employee display method
public function display($id='') {
    $data['page'] = 'emp-display';
    $data['title'] = 'Employee Display | ALL';
    $this->emp->setEmpID($id);
    $data['empInfo'] = $this->emp->getEmp();
    $data['controller']=$this; 
    $this->load->view('emp/display', $data);
}
// Employee display method
public function delete($id='') {
    //$this->emp->setEmpID($id);
    $this->emp->deleteEmp($id);
    redirect('/');
}
}
?>