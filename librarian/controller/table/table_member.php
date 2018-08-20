<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
<thead>
    <tr>
        <th>Name</th>                                 
        <th>Gender</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Type</th>
		<th>YearLevel</th>
		<th>Department</th>
		<th>Status</th>
		<th>Action</th>
    </tr>
</thead>
<tbody>
<?php  

  	$member_query = mysqli_query ($con,"select * from member") or die (mysql_error());
	while ($row=mysqli_fetch_array($member_query))
	{
		$member_id = $row['member_id'];  ?>
		
		<tr class="del<?php echo $member_id ?>">                   
            <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
            <td><?php echo $row['gender']; ?> </td> 
            <td><?php echo $row['address']; ?> </td>
            <td><?php echo $row['contact']; ?></td>
			<td><?php echo $row['type']; ?></td> 
			<td><?php echo $row['YearLevel']; ?></td> 
			<td><?php echo $row['Department']; ?></td> 
			<td><?php echo $row['status']; ?></td> 
            <td width="100">
            	<a rel         = "tooltip"
				   title       = "Update" 
				   id          = "tooltip_update<?php echo $member_id; ?>" 
				   href        = "#update_member<?php echo $member_id; ?>" 
				   data-toggle = "modal" 
				   class       = "btn btn-success">
				<i class="icon-pencil icon-large"></i>
				</a>
				<?php include('modal_member_update.php'); ?>
                
                <a rel         = "tooltip"  
                   title       = "Delete" 
                   id          = "tooltip_delete<?php echo $member_id; ?>" 
                   href        = "#delete_member<?php echo $member_id; ?>" 
                   data-toggle = "modal"    
                   class       = "btn btn-danger">
                <i class="icon-trash icon-large"></i>
                </a>
                <?php include('modal_member_delete.php'); ?>
            </td>
            <?php include('toolttip_edit_delete.php'); ?>  <!--Pampaganda ng tooltip-->  
        </tr>
<?php  }  ?>
</tbody>
 <tfoot>
    <tr>
        <th>Name</th>                                 
        <th>Gender</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Type</th>
		<th>YearLevel</th>
		<th>Department</th>
		<th>Status</th>
		<th>Action</th>
    </tr>
</tfoot>
</table>