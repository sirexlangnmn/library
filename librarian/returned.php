<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">		
					<div class="alert alert-info">
						<strong>Returned Books</strong>
					</div>
			    	<div class="pull-right" style="margin-bottom: 2px ">
						<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
					</div>
			        
			        <!-- table here -->
			        <?php
			          include('controller/table/table_book_returned.php');
			        ?>
					<!-- table here -->	
				
				</div>		
	


				<script>		
				$(".uniform_on").change(function(){
				    var max= 3;
				    if( $(".uniform_on:checked").length == max ){
					
				        $(".uniform_on").attr('disabled', 'disabled');
						         alert('3 Books are allowed per borrow');
				        $(".uniform_on:checked").removeAttr('disabled');
						
				    }else{

				         $(".uniform_on").removeAttr('disabled');
				    }
				})
				</script>		

			</div>
		</div>
    </div>
<?php include('footer.php') ?>	