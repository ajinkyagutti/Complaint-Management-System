<?php
	session_start();
?><html>

	<head>
		<link rel="stylesheet" type="text/css" href="prac1.css">
		<script src="compn.js"></script>
	</head>

	<body>
		
		<div id="header">
			<ul>
				<li class="systemname">Online Complaint Management System</li>
				<li class="loginoptions"><a href="#">Complaint Form</a></li>
				<?php echo '<li class="loginoptions"><a href="user-viewtable.php">Complaint List</a></li>'; ?>
				<li class="loginoptions"><a href="index.html">Sign Out</a></li>
			</ul>
		</div>

		<div id="compform">
			<form method="post" action="lodge.php" name="comp" onsubmit="return compValidate()">
				<h1>Complaint Form</h1>
				<input type="text" name="fname" class="firstname" placeholder="First Name">
				<input type="text" name="lname" class="lastname" placeholder="Last Name"><br>
				<input type="text" name="email" class="email" placeholder="Email"><br>
				<select name="device" class="device">
          			<option value="" selected >Select your Device</option>
          			<option value="mobile">Mobile Phone</option>
                <option value="tv">Television</option>
                <option value="computer">Computer/Laptop</option>
                <option value="home">Home Electronics</option>
          			
        </select>
        		
        	<div class="warranty">
            <p>Is your device under warranty?</p>
					<input type="radio" name="warranty" value="yes">
        				<label >Yes</label>
        				&nbsp;&nbsp;&nbsp;
       			 		<input type="radio" name="warranty" value="no">
        				<label >No</label><br>
            </div>

            <input type="text" name="manu" class="email" placeholder="Enter Manufacturer's Name">

            <input type="text" name="model" class="email" placeholder="Enter the model number">

            <input type="text" name="complaint" class="email" placeholder="Enter the problem description">

					<input type="submit" class="submit" value="Submit">


				
			</form>
		</div>

		<div id="footer">
			
			Copyright &copy; 2015, Online Complaint Management System
		</div>

	</body>

</html>