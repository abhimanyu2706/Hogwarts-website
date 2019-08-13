<?php
	$name = $_POST['f_name'] . " " . $_POST['l_name'];	
	$dob  = $_POST['dob'];
	$email = $_POST['email'];
	$p_status = $_POST['parents'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("Hogwarts");
	
	mysql_query("INSERT into student VALUES ('$name','$email','$contact','$dob','$address','$p-status')");
	header("location: admission.html");
	
?>