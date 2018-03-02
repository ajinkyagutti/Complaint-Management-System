<?php
	session_start();
?><html>

	<head>
		<link rel="stylesheet" type="text/css" href="prac1.css">
	</head>

	<body>
		s
		<div id="header">
			<ul>
				<li class="systemname">Online Complaint Management System</li>
				<li class="mainoptions"><a href="technician-table.php">Set Status</a></li>
				<li class="mainoptions"><a href="index.html">Sign Out</a></li>
			</ul>
		</div>

		<div id="admincomplainttableview">

			<table id="admincomplainttable" align="center">
		
				<tr class="row">
					<th class="thcell">C_ID</th>
					
					<th class="thcell">Name</th>
					<th class="thcell">Email</th>
					
					<th class="thcell">Device</th>
					<th class="thcell">Manufacturer's name</th>
					<th class="thcell">Model Number</th>
					<th class="thcell">Warranty</th>
					<th class="thcell">Description</th>
					<th class="thcell">Technician</th>		
					<th class="thcell">&nbsp Status &nbsp</th>
				</tr>

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

	$sql="SELECT * FROM `complaint` WHERE `technician` = '$_SESSION[tname]'";
	$result=mysqli_query($con,$sql);
	//$row=mysqli_fetch_array($result,MYSQLI_NUM);


while($row=mysqli_fetch_array($result))
				echo '<tr class="row">
					
					<td class="cell">'.$row[0].'</td>
					
					
					<td class="cell">'.$row[1].'</td>
					<td class="cell">'.$row[3].'</td>
					<td class="cell">'.$row[4].'</td>
					<td class="cell">'.$row[5].'</td>
					<td class="cell">'.$row[6].'</td>
					<td class="cell">'.$row[7].'</td>
					<td class="cell">'.$row[8].'</td>		
					<td class="cell">'.$row[9].'</td>  
					<td class="cell">'.$row[10].'</td>	
				</tr>
				';
				?>



			</table>	

		</div>	


		<div id="footer">
			Copyright &copy; 2015, Online Complaint Management System
		</div>

	</body>

</html>