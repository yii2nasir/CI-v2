<?php
$this->load->view('templates/header');
//echo "<pre>";print_r($this->rule());exit;
$id = $empInfo['id'] ? $empInfo['id'] : '';
@$name = $empInfo['name'] ? $empInfo['name'] : '';
$last_name = $empInfo['last_name'] ? $empInfo['last_name'] : '';
$email = $empInfo['email'] ? $empInfo['email'] : '';
$address = $empInfo['address'] ? $empInfo['address'] : '';
$contact_no = $empInfo['contact_no'] ? $empInfo['contact_no'] : '';
$salary = $empInfo['salary'] ? $empInfo['salary'] : '';
?>
<div class="row">
<div class="col-lg-12">
    <h2> CodeIgniter CRUD Operations with MySQL Example</h2>                 
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
    <?php if(validation_errors()) { ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
    <?php } ?>
</div>
</div>
<form action="<?php print site_url();?>curd/update" method="POST" class="edit-emp" id="edit-emp">
<input type="hidden" name="id" value="<?php print $id; ?>">
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-user-o"></i>
                </span>
                <input type="text" name="name" class="form-control" id="first-name" placeholder="First Name" value="<?php print $name; ?>">
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-user-o"></i>
                </span>
                <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Last Name" value="<?php print $last_name; ?>">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?php print $email; ?>">
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-map-marker"></i>
                </span>
                <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="<?php print $address; ?>">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-phone"></i>
                </span>
                <input type="text" name="contact_no" class="form-control" id="contact-no" placeholder="Contact No" value="<?php print $contact_no; ?>">
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-money"></i>
                </span>
                <input type="text" name="salary" class="form-control" id="last-name" placeholder="Salary" value="<?php print $salary; ?>">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 text-right">
        <a href="<?php print site_url();?>curd" id="cancel-emp" class="btn btn-danger"><i class="fa fa-undo"></i> Cancel</a>
        <button type="submit" name="add_emp" id="submit-emp" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
    </div>
</div>  
</form>
<?php
$this->load->view('templates/footer');
?>