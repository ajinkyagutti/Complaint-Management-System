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

	$name = $_POST['firstname'].$_POST['lastname'];
	$email = $_POST['email'];
	$_SESSION['email'] = $email;
	$sex = $_POST['sex'];
    $pass = $_POST['password'];
    $bday = $_POST['date'];
	




	$sql="SELECT * FROM `user` WHERE `name`='$name'";
	$result=mysqli_query($con,$sql);
	$rowcount=mysqli_num_rows($result);
	if($rowcount!=0)
		{
			//Username already exists.
		}  	  
	else
	{
		$query="INSERT INTO `user` (`uid`,`name`,`email`,`password`,`sex`,`dob`) VALUES (null,'$name','$email','$pass','$sex','$bday')";
		mysqli_query($con,$query);	
		header('Location: ./complaint-form.html');
	}
	

  



?>