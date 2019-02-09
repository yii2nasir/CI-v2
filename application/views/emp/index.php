<?php
$this->load->view('templates/header');
?>
<div class="row">
    <div class="col-lg-12">
        <h2>CodeIgniter CRUD Operations with MySQL Example</h2>                 
    </div>
</div><!-- /.row -->
 
<div class="row">
    <div class="col-lg-12">
        <a href="<?php print site_url();?>curd/add" class="pull-right btn btn-primary btn-xs" style="margin-bottom: 5px;"><i class="fa fa-plus"></i> Add Employee</a>                
    </div>
</div><!-- /.row -->
 
<div class="row">   
        <div class="col-lg-12">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th width="15%">First Name</th>
        <th width="15%">Last Name</th>
        <th width="15%">Email</th>        
        <th width="10%">Phone</th>
        <th width="10%">Salary</th>
        <th width="25%">Action</th> 
      </tr>
    </thead>
    <tbody> 
        <?php foreach($empInfo as $key=>$element) { ?>
      <tr>
        <td><?php print $element['name']; ?></td>
        <td><?php print $element['last_name']; ?></td>  
        <td><?php print $element['email']; ?></td>
        <td><?php print $element['contact_no']; ?></td> 
        <td><?php print $element['salary']; ?></td> 
        <td>
            <a title="Display" href="<?php print site_url();?>curd/display/<?php print $element['id'];?>" class="btn btn-info btn-xs"><i class="fa fa-eye">View</i></a> 
            <a title="Edit" href="<?php print site_url();?>curd/edit/<?php print $element['id'];?>" class="btn btn-primary btn-xs"><i class="fa fa-edit">edit</i></a> 
            <a title="Delete" href="<?php print site_url();?>curd/delete/<?php print $element['id'];?>" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-trash">delete</i></a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div><!-- /.row -->
<?php
$this->load->view('templates/footer');
?>