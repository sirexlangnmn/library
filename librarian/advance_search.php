<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>

<?php
$title = $_POST['title'];
$category = $_POST['category'];
$author = $_POST['author'];
?>

    <div class="container">
		<div class="margin-top">
			<div class="row">
			<?php include('modal_book_insert.php'); ?> 	
				<div class="span12">	
				   <div class="alert alert-info">
                    	<button type="button" class="close" data-dismiss="alert">&times;</button>
                    	<strong><i class="icon-user icon-large"></i>&nbsp;Books Table</strong>
               		</div>

					<ul class="nav nav-pills">	<!-- dashboard for different books -->
						<li class="active"><a href="book_all.php">All</a></li>
						<li><a href="book_new.php">New Books</a></li>
						<li><a href="book_old.php">Old Books</a></li>
						<li><a href="book_lost.php">Lost Books</a></li>
						<li><a href="book_damage.php">Damage Books</a></li>
						<li><a href="book_sub_rep.php">Subject for Replacement</a></li>
					</ul>	<!-- dashboard for different books -->

					<div class="pull-right">
						<a href="" onclick="window.print()" class="btn btn-info">
						<i class="icon-print icon-large"></i> Print</a>
					</div>
					
					<p>
						<a href="add_books.php" class="btn btn-success">
						<i class="icon-plus"></i>&nbsp;Add Books</a>
					</p>

                    <!-- table here -->
			        <?php
			          include('controller/table/table_book_advance_search.php');
			        ?>
					<!-- table here -->	
							
			
				</div>		
			</div>
		</div>
    </div>

<?php include('footer.php') ?>