<?php
$this->load->view('templates/header');
    $first_name = $empInfo['first_name'] ? $empInfo['first_name'] : '';
    $last_name = $empInfo['last_name'] ? $empInfo['last_name'] : '';
    $email = $empInfo['email'] ? $empInfo['email'] : '';
    $address = $empInfo['address'] ? $empInfo['address'] : '';
    $contact_no = $empInfo['contact_no'] ? $empInfo['contact_no'] : '';
    $salary = $empInfo['salary'] ? $empInfo['salary'] : '';
?>
<div class="row">
    <div class="col-lg-12">
        <h2>CodeIgniter CRUD Operations with MySQL Example</h2>                 
    </div>
</div><!-- /.row -->
 
<div class="row">
    <div class="col-lg-12">
        <a href="<?php print site_url();?>curd" class="pull-right btn btn-primary btn-xs" style="margin: 2px;;"><i class="fa fa-list"></i> List</a>
        <a href="#" class="pull-right btn btn-info btn-xs" style="margin: 2px;"><i class="fa fa-mail-reply"></i> Back To Tutorial</a>                
    </div>
</div><!-- /.row -->
 
<div class="row">   
    <div class="col-lg-12">
        <p><strong>First Name: </strong><?php print $first_name?></p>
        <p><strong>Last Name: </strong><?php print $last_name?></p>
        <p><strong>Email: </strong><?php print $email?></p>
        <p><strong>Address: </strong><?php print $address?></p>
        <p><strong>Phone: </strong><?php print $contact_no?></p>
        <p><strong>Salary: </strong><?php print $salary?></p>
    </div>
</div><!-- /.row -->
<?php
$this->load->view('templates/footer');
?>