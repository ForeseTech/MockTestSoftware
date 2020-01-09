<?php

/*************/
/* INDEX.PHP */
/*************/

/* We get the message variables necessary. */
$msg = $_REQUEST["msg"];

/* We then print the message. */
if($msg==1) {
	echo "<script>alert('Use a different terminal ID!');</script>";
}

?>
<!DOCTYPE html>
<head>
	<title>Mock Test | Login Page</title>
	<style>
		body, html{
			padding: 0;
			margin: 0;
		}
		
		.formInput{
			display: block;
			width: 25%;
			padding: .5%;
			margin: 1% auto;
			font-family: "Verdana", sans-serif;
			color: black;
			font-size: 110%;
		}
		#loginform{
			margin-top: 13%;
		}
		#deptSelect{
			width: 26.75%;
		}
		#head{
			position: fixed;
			top: 0;
			width: 100%;
			border-bottom: 1px solid black;
		}
		#pageHead{
			text-align: center;
			padding: 1% 0%;
			font-size: 135%;
			font-family: "Verdana", sans-serif;
		}
		#submitButt{
			width: 26.5%;
			cursor: pointer;
			margin-top: 2%;
		}
	</style>
</head>

<body>
	<div id="head">
		<header id="pageHead">Aptitude Test</header>
		<div id="timer"></div>
	</div>
	<form id="loginform" method="post" action="loginpage.php">
		<input type="text" class="formInput" name="terminalInput" placeholder="Terminal No." required>
		<input type="password" class="formInput" name="passwordInput" placeholder="Password" required><br><br>
		
		<input type="text" class="formInput" name="nameInput" placeholder="Your Name" required>
		<input type="text" class="formInput" name="regInput" placeholder="Your Registration No." required>
		<select name="deptInput" class="formInput" id="deptSelect" required>
			<option value="">Choose Dept</option>
			<option value="CSE">CSE</option>
			<option value="INF">IT</option>
			<option value="EEE">EEE</option>
			<option value="ECE">ECE</option>
			<option value="CHE">CHEM</option>
			<option value="BIO">BIO</option>
			<option value="CIV">CIVIL</option>
			<option value="MEC">MECH</option>
			<option value="AUT">AUTO</option>
		</select>
		<input type="email" class="formInput" name="emailInput" placeholder="Your E-Mail ID" required>
		<button type="submit" class="formInput" id="submitButt">LOGIN</button>
	</form>
</body>
</html>
