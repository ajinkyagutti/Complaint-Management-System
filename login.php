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

	$email = $_POST['username'];
    $pass = $_POST['password'];
    if($email == "admin@admin.com" && $pass = "admin" )
    {header('Location: ./admin-complaint-table.php');}
else if ($email == "a@technician.com" && $pass = "atech") {
		$_SESSION['tname']="a";
		header('Location: ./technician-table.php');
	}
	else if ($email == "b@technician.com" && $pass = "btech") {
		$_SESSION['tname']="b";
		header('Location: ./technician-table.php');
	}
	else if ($email == "c@technician.com" && $pass = "ctech") {
		$_SESSION['tname']="c";
		header('Location: ./technician-table.php');
	}
	else{
	$query="SELECT * FROM `user` WHERE `email`='$email' AND `password`='$pass'";
	$result=mysqli_query($con,$query);
	$rowcount=mysqli_num_rows($result);
	if($rowcount!=0)
		{	$_SESSION['email'] = $email;
			header('Location: ./complaint-form.php');
		}  	  
	else
	{
		echo "wrong email or pasword.Go back and try again";
	}
}

  
?>