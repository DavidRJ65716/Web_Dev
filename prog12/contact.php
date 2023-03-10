<html>
<head>
<meta charset="utf-8">
<title>Contact</title>
<link rel="stylesheet" href="../assets/css/bootstrap.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/basic.css">
<link rel="stylesheet" href="../assets/css/main.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/contact.js"></script>
</head>	
	<body>
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="index.html">Contact</a>
    		</div>
    		<ul class="nav nav-pills">
  				<li role="presentation" class="active"><a href="index.html">Home</a></li>
				<li role="presentation" class="active"><a href="school.html">School</a></li>
				<li role="presentation" class="active"><a href="work.html">Work</a></li>
				<li role="presentation" class="active"><a href="contact.html">Contact</a></li>
			</ul>
  			</div>
		</nav>
		
		<?php
		session_start();
		echo '<div id="container">
		<div class="panel panel-primary">
		<div class="panel-heading">Contact Form</div>
		<div class="panel-body">
		<form method="post" action="">
		<div class="form-group">
		<label>First Name:</label>';
		if (isset($_SESSION['first']) && $_SESSION['first']!=""){
			echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)" value="'.$_SESSION['first'].'">';
		} else{
			echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)">';
			echo '<p class="help-block" id="fnameHelp"></p>';
			echo '</div>';
		}
		
		if (isset($_GET['err']) && strstr($_GET['err'],"LnameNull")){
			echo '<div class="form-group has-error">';
			echo '<label class="control-label" for="inputError1">Last Name:</label>';
			echo '<input class="form-control" id="inputError1" name="lname" type="text" id="lname">';
			echo '<p class="help-block" id="lnameHelp">Cannot be blank!</p>';
			echo '</div>';
		} else {
			echo '<div class="form-group">';
			echo '<label>Last Name:</label>';
			echo '<input class="form-control" name="lname" type="text" id="lname">';
			echo '<p class="help-block" id="lnameHelp"></p>';
			echo '</div>';
		}
		
		if (isset($_GET['err']) && strstr($_GET['err'],"emailNull")){
			echo '<div class="form-group has-error">';
			echo '<label class="control-label" for="inputError1">Email:</label>';
			echo '<input class="form-control" id="inputError1" name="email" type="text" id="email">';
			echo '<p class="help-block" id="emailHelp">Cannot be blank!</p>';
			echo '</div>';
		} else if (isset($_GET['err']) && strstr($_GET['err'],"emailBad")){
			echo '<div class="form-group has-error">';
			echo '<label class="control-label" for="inputError1">Email:</label>';
			echo '<input class="form-control" id="inputError1" name="email" type="text" id="email">';
			echo '<p class="help-block" id="emailHelp">Incorrect Email format!</p>';
			echo '</div>';
		} else{
			echo '<div class="form-group">';
			echo '<label>Email:</label>';
			echo '<input class="form-control" name="email" type="text" id="email">';
			echo '<p class="help-block" id="emailHelp"></p>';
			echo '</div>';
		}
		
		echo '<div class="form-check">';
		echo '<label class="form-check-label" for="conCheck">';
		echo 'Peferred Contact Method</label>';
		echo '<input class="form-check-input" type="checkbox" name="conCheck" id="conCheck">';
		echo '</div>';
		
		if (isset($_GET['err']) && strstr($_GET['err'],"phoneNull")){
			echo '<div class="form-group" has-error>';
			echo '<label class="control-label" for="inputError1">Phone number:</label>';
			echo '<input class="form-control" type="tel" id="inputError1" name="phone" id="phone" placeholder="123-456-7890">';
			echo '<p class="help-block" id="phoneHelp">Cannot be blank!</p></div>';
		} else if (isset($_GET['err']) && strstr($_GET['err'],"phoneBad")){
			echo '<div class="form-group" has-error>';
			echo '<label class="control-label" for="inputError1">Phone number:</label>';
			echo '<input class="form-control" type="tel" id="inputError1" name="phone" id="phone" placeholder="123-456-7890">';
			echo '<p class="help-block" id="phoneHelp">Incorrect Phone!</p></div>';
		} else {
			echo '<div class="form-group">';
			echo '<label for="phone">Phone number:</label>';
			echo '<input class="form-control" type="tel" id="phone" name="phone" placeholder="123-456-7890">';
			echo '<p class="help-block" id="phoneHelp"></p></div>';
		}
		
		if (isset($_GET['err']) && strstr($_GET['err'],"dobNull")){
			echo '<div class="form-group" has-error>';
			echo '<label class="control-label" for="inputError1">Date of Birth:</label>';
			echo '<input class="form-control" type="date" id="inputError1" name="dob" id="dob" placeholder="123-456-7890">';
			echo '<p class="help-block" id="dobHelp">Cannot be blank!</p></div>';
		} else if (isset($_GET['err']) && strstr($_GET['err'],"dobBad")){
			echo '<div class="form-group" has-error>';
			echo '<label class="control-label" for="inputError1">Date of Birth:</label>';
			echo '<input class="form-control" type="date" id="inputError1" name="dob" id="dob" placeholder="123-456-7890">';
			echo '<p class="help-block" id="dobHelp">Incorrect Date!</p></div>';
		} else {
			echo '<div class="form-group">';
			echo '<label for="dob">Date of Birth:</label>';
			echo '<input class="form-control" type="date" id="dob" name="dob">';
			echo '<p class="help-block" id="dobHelp"></p></div>';
		}
							
		echo '<div class="form-group">';
		echo '<label for="comment">Comment:</label>';
		echo '<textarea id="comment" name="comment" rows="10" cols="50"></textarea>';
		echo '<p class="help-block" id="commentHelp"></p>';
		echo '</div>';
		echo '<hr>
			<button id="submit" name="submit" class="btn btn-block btn-success" type="submit">Submit</button>
			</form>
			</div>
			</div>
			</div>
			</div>';
			if (isset($_POST['submit'])) {
				//die("Submit has been pressed");
				
				$validPhone = '/^\d{3}[-]\d{3}[-]\d{4}$/';
				$validEmail = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
				$err="";
				$comment=$_POST['comment'];
				if (isset($_POST['fname']) && $_POST['fname']!=""){
					$firstName=$_POST['fname'];
					$_SESSION['first']=$firstName;
				} else{
					$err.="FnameNull";
				}
				
				if (isset($_POST['lname']) && $_POST['lname']!=""){
					$lastName=$_POST['lname'];
					$_SESSION['last']=$lastName;
				} else{
					$err.="LnameNull";
				}
				
				if (isset($_POST['email']) && $_POST['email']!=""){
					$email=$_POST['email'];
					$_SESSION['email']=$email;
				} else{
					$err.="emailNull";
				}
								
				if (isset($_POST['email']) && $_POST['email']!=""){
					$email=$_POST['email'];
					
					if(!preg_match($validEmail, $email)){
						$err.="emailBad";
					}else {
						$_SESSION['email']=$email;
					}
					$_SESSION['email']=$email;
				} else{
					$err.="emailNull";
				}
								
				if (isset($_POST['phone']) && $_POST['phone']!=""){
					$phone=$_POST['phone'];
					
					if(!preg_match($validPhone, $phone)){
						$err.="phoneBad";
					}else {
						$_SESSION['phone']=$phone;
					}
				} else{
					$err.="phoneNull";
				}
				
				//checkdate(
				
				if (isset($_POST['dob']) && $_POST['dob']!=""){
					$dob=$_POST['dob'];
					
					$keywords = preg_split("/\//", $dob);
					if(checkdate($keywords[0],$keywords[1],$keywords[2])){
						$_SESSION['dob']=$dob;
					}else {
						$err.="dobBad";
					}
				} else{
					$err.="dobNull";
				}
				
				$keywords = preg_split("/\//", "12/12/1212");
				
				if (isset($err) && $err!=""){
					//die("Error is: $err");
					//redirect("index.php?page=contact&err=$err");
					header("Location: https://ec2-18-117-218-14.us-east-2.compute.amazonaws.com/hw13/contact.php?page=contact&err=$err", true, 301);
				} else {
					header("Location: https://ec2-18-117-218-14.us-east-2.compute.amazonaws.com/hw13/contact.php", true, 301);
				}
				echo "<div>First Name: $firstName</div>";
				echo "<div>Last Name: $lastName</div>";
				echo "<div>Email: $email</div>";
				echo "<div>Phone: $phone</div>";
				echo "<div>Birthday: $dob</div>";
				echo "<div>Comment: $comment</div>";
			}
		?>
		
	</body>
</html>
