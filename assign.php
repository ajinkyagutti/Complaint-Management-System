<?php
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
	/*$sql="SELECT * FROM `complaint` WHERE `cid`='$POST[cid]'";
	$result=mysqli_query($con,$sql);
	$rowcount=mysqli_num_rows($result);
	if($rowcount!=0)
		{*/
			
		$query="UPDATE `complaint` SET `technician` = '$_POST[tech]' WHERE `cid` ='$_POST[cid]'";
		mysqli_query($con,$query);
		header('Location: ./admin-complaint-table.php');  
	
?>