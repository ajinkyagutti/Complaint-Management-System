<?php
	session_start();
	$myHost = "localhost";
	$myUserName = "root";
	$myPassword = "";
	$myDataBaseName = "ocm"; 

	$con = mysqli_connect( "$myHost", "$myUserName", "$myPassword", "$myDataBaseName" );

	if( !$con )
	{ 
	    
	    die("connection object not created: ".mysqli_error($con));
	}

	if( mysqli_connect_errno() )
	{ 
	    die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
	}

	
	$fname = $_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$device=$_POST['device'];
	$manu=$_POST['manu'];
	$model=$_POST['model'];
	$warranty=$_POST['warranty'];
	$complaint=$_POST['complaint'];


	
	
		$query="INSERT INTO `complaint` (`cid`,`fname`,`lname`,`email`,`device`,`manufacturer`,`model`,`warranty`,`complaint`,`technician`,`status`) VALUES (null,'$fname','$lname','$email','$device','$manu','$model','$warranty','$complaint',null,null)";
		mysqli_query($con,$query);
		header('Location: ./user-viewtable.php');	
	


?>