<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
<thead>
    <tr>
        <th>Username</th>                                 
        <th>Fullname</th>                                 
        <th>Mobile Number</th>
        <th>Email</th>                                 
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php

  $user_query=mysqli_query($con,"select * from Admin")or die(mysql_error());  
  while($row=mysqli_fetch_array($user_query))
  {
      $user_id = $row['user_id']; ?>
  
      <tr class="del <?php echo $user_id ?> ">
          <td><?php echo $row['username']; ?></td> 
          <td><?php echo $row['fullname']; ?></td> 
          <td><?php echo $row['mobile_number']; ?></td> 
          <td><?php echo $row['email']; ?></td> 
          <td width="100"> 
              <a rel         = "tooltip"
                 title       = "Update"
                 id          = "tooltip_update<?php echo $user_id; ?>" 
                 href        = "#update_admin<?php echo $user_id; ?>" 
                 data-toggle = "modal" 
                 class       = "btn btn-success">
                 <i class="icon-pencil icon-large"></i>
              </a>
              <?php include('modal_admin_update.php'); ?> <!-- Modal update admin -->
           
              <a rel         = "tooltip"
                 title       = "Delete" 
                 id          = "tooltip_delete<?php echo $user_id; ?>"  
                 href        = "#delete_admin<?php echo $user_id; ?>" 
                 data-toggle = "modal"  
                 class       = "btn btn-danger">
                 <i class="icon-trash icon-large"></i>
              </a>
              <?php include('modal_admin_delete.php'); ?> <!-- Modal delete admin -->
           </td>
           <?php include('toolttip_edit_delete.php'); ?>  <!--Pampaganda ng tooltip-->  
      </tr>
<?php } ?>   
</tbody>
<tfoot>
    <tr>
        <th>Username</th>                                 
        <th>Fullname</th>                                 
        <th>Mobile Number</th>
        <th>Email</th>                                 
        <th>Action</th>
    </tr>
</tfoot>
</table>