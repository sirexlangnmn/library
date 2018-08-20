<!DOCTYPE html>
<html>
<head>
		<title>Quezon City Polytechnic University</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link rel="stylesheet" media="screen" href="design/css/bootstrap.css">
	<link rel="stylesheet" media="screen" href="design/css/bootstrap-responsive.css">
	<link rel="stylesheet" media="screen" href="design/css/docs.css">
	<link rel="stylesheet" media="screen" href="design/css/diapo.css">
	<link rel="stylesheet" media="screen" href="design/css/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="design/css/style.css" />
	<link rel="stylesheet" type="text/css" href="design/css/DT_bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="design/css/print.css" media="print" />
	
	<!-- js -->			
    <script src="design/js/jquery-1.7.2.min.js"></script>
    <script src="design/js/bootstrap.js"></script>
	<script src="design/js/jquery.hoverdir.js"></script>
			

		
	<script type="text/javascript" src="design/js/jquery.dataTables.js" charset="utf-8" language="javascript"></script>
    <script type="text/javascript" src="design/js/DT_bootstrap.js" charset="utf-8" language="javascript"></script>
	<script type='text/javascript' src='design/js/jquery.easing.1.3.js'></script> 
	<script type='text/javascript' src='design/js/jquery.hoverIntent.minified.js'></script> 
	<script type='text/javascript' src='design/js/diapo.js'></script> 


	<!--sa calendar-->	
	<script type="text/javascript" src="design/js/datepicker.js"></script>
    <link href="design/css/datepicker.css" rel="stylesheet" type="text/css" />

</head>

<body>

<!--
  Note:
* Walang error yun include, pero walang effect yun css at js.
  Kaya napilitan ako ilabas yun codes sa include ko at ilagay dito sa mismong page.

* Para mabawasan ang mga pages at maiwasan ang complex inclusion, 
  minabuti ko na baguhin at gawin simple.
  Plano ko na ihiwalay lang ang mismong PHP codes sa mga HTML sturucture. 

* Si index.php na naka include si librarian/navbar.php
  ay pinag isa ko na lang sa page ni index.php
-->

<?php
	include('librarian/dbcon.php');
	include("librarian/header.php");
?>

  	<div class="navbar navbar-fixed-top navbar-inverse">  <!-- include("librarian/navbar.php"); -->
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse collapse"> 
					<ul class="nav">
					<!-- .nav, .navbar-search, .navbar-form, etc -->

					<!--  Empty Navaigation Bar -->
					</ul>
                </div>
            </div>
        </div>
	</div> <!-- include("librarian/navbar.php"); -->

	<div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">
					<div class="sti">
						<img src="images/QCPU.png" class="img-rounded">
					</div>
					<div class="login">
						<div class="log_txt">
							<p><strong>Please Enter the Details Below..</strong></p>
						</div>

						<form class="form-horizontal" method="POST" action="librarian/login.php">
								<div class="control-group">
									<label class="control-label" for="inputEmail">Username</label>
									<div class="controls">
										<input type="text" name="username" id="username" placeholder="Username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Password</label>
									<div class="controls">
										<input type="password" name="password" id="password" placeholder="Password" required>
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<button id="submit" name="submit" type="submit" class="btn">
										<i class="icon-signin icon-large"></i>&nbsp;Submit
										</button>
								</div>
								</div>
						</form>
					
					</div>
				</div>		
			</div>
		</div>
	</div>

<?php include ("librarian/footer.php"); ?>

<link href="design/vendors/chosen.min.css" rel="stylesheet" media="screen">
<link href="design/vendors/uniform.default.css" rel="stylesheet" media="screen">
<script src="design/vendors/chosen.jquery.min.js"></script>
<script src="design/vendors/bootstrap-datepicker.js"></script>

<script>
$(function() {
	<!--$(".datepicker").datepicker(); -->
	<!--$(".uniform_on").uniform(); -->
   		$(".chzn-select").chosen();
		<!--$('.textarea').wysihtml5(); -->

});
</script>

</body>
</html>