<?php 
	include('header.php');
	include('session.php'); 
	include('navbar_dashboard.php'); 
?>

	<div class="container">
		<div class="margin-top">
			<div class="row">	
			<?php include('modal_member_insert.php'); ?> 
				<div class="span12">	
	
				   <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><i class="icon-user icon-large"></i>&nbsp;Member Table</strong>
                    </div>
    
                    <div class="pull-right"> <!-- Print Documents -->
						<a href="" onclick="window.print()" class="btn btn-info">
						<i class="icon-print icon-large"></i> Print</a>
					</div> <!-- Print Documents end-->
	
					<p>
                    	<a href="#add_member" data-toggle="modal" class="btn btn-success">
                    	<i class="icon-plus"></i>&nbsp;Add Member</a>
                    </p>
                  
                  	 <!-- table here -->
                    <?php
                      include('controller/table/table_member.php');
                    ?>
                    <!-- table here --> 
							
				</div>		
			</div>
		</div>
    </div>

<?php include('footer.php') ?>