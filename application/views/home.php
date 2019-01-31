<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Welcome to CodeIgniter</title>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css">

</head>
<body>

		<!-- add member -->
		<?php include_once "member/showmember.php";?>
	<!-- /add mmebers -->
	<!-- add member -->
	<?php include_once "member/addmember.php";?>
	<!-- /add mmebers -->
	
	<!-- edit member -->
	<?php include_once "member/editmember.php";?>
	<!-- /edit mmebers -->
	
	<!-- removeMember -->
	<?php include_once "member/removemember.php";?>
	<!-- removeMember -->

	
	<!-- jquery -->
	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- datatables -->
	<script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
	<!-- custom js -->
	<script type="text/javascript" src="custom/js/home.js?v=1"></script>

</body>
</html>