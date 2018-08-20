<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link rel="stylesheet" media="screen" href="../design/css/bootstrap.css">
	<link rel="stylesheet" media="screen" href="../design/css/bootstrap-responsive.css">
	<link rel="stylesheet" media="screen" href="../design/css/docs.css">
	<link rel="stylesheet" media="screen" href="../design/css/diapo.css">
	<link rel="stylesheet" media="screen" href="../design/css/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="../design/css/style.css" />
	<link rel="stylesheet" type="text/css" href="../design/css/DT_bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../design/css/print.css" media="print" />
	
	<!-- js -->			
    <script src="../design/js/jquery-1.7.2.min.js"></script>
    <script src="../design/js/bootstrap.js"></script>
	<script src="../design/js/jquery.hoverdir.js"></script>
			

	<!--Datatable, pagination, search, sorting-->
	<script type="text/javascript" src="../design/js/jquery.dataTables.js" charset="utf-8" language="javascript"></script>

    <script type="text/javascript" src="../design/js/DT_bootstrap.js" charset="utf-8" language="javascript"></script>
	<script type='text/javascript' src='../design/js/jquery.easing.1.3.js'></script> 
	<script type='text/javascript' src='../design/js/jquery.hoverIntent.minified.js'></script> 
	<script type='text/javascript' src='../design/js/diapo.js'></script> 

	<!--Calendar Date timepicker-->	
	<script type="text/javascript" src="../design/js/datepicker.js"></script>
    <link href="../design/css/datepicker.css" rel="stylesheet" type="text/css" />


<script>
jQuery(document).ready(function() {
$(function(){
	$('.pix_diapo').diapo();
});
});
</script>	
<noscript>
		<style>
			.da-thumbs li a div {
				top: 0px;
				left: -100%;
				-webkit-transition: all 0.3s ease;
				-moz-transition: all 0.3s ease-in-out;
				-o-transition: all 0.3s ease-in-out;
				-ms-transition: all 0.3s ease-in-out;
				transition: all 0.3s ease-in-out;
			}
			.da-thumbs li a:hover div{
				left: 0px;
			}
		</style>
	</noscript>	

</head>
<?php include('dbcon.php'); ?>
<body>