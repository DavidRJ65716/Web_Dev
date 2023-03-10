<?php
session_start();
echo '<div id="container">
<div class="panel panel-primary">
<div class="panel-heading">Contact Form</div>
<div class="panel-body">
<form method="post" action="">';
/*if (isset($_SESSION['first']) && $_SESSION['first']!=""){
echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)" value="'.$_SESSION['first'].'">';
} else{
echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)">';
echo '<p class="help-block" id="fnameHelp"></p>';
echo '</div>';
}*/

//First Name
if (isset($_GET['err']) && strstr($_GET['err'],"FnameNull")){
echo '<div class="form-group has-error">';
echo '<label class="control-label" for="inputError1">First Name:</label>';

if (isset($_SESSION['first']) && $_SESSION['first']!=""){
echo '<input class="form-control" name="fname" type="text" id="inputError1" id="fname" onblur="checkFName(this.value)" value="'.$_SESSION['first'].'">';
} else{
echo '<input class="form-control" name="fname" type="text" id="inputError1" id="fname" onblur="checkFName(this.value)">';
}

echo '<p class="help-block" id="fnameHelp">Cannot be blank!</p>';
echo '</div>';
} else {
echo '<div class="form-group">';
echo '<label>First Name:</label>';

if (isset($_SESSION['first']) && $_SESSION['first']!=""){
echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)" value="'.$_SESSION['first'].'">';
} else{
echo '<input class="form-control" name="fname" type="text" id="fname" onblur="checkFName(this.value)">';
}

echo '<p class="help-block" id="fnameHelp"></p>';
echo '</div>';
}

//Last Name
if (isset($_GET['err']) && strstr($_GET['err'],"LnameNull")){
echo '<div class="form-group has-error">';
echo '<label class="control-label" for="inputError1">Last Name:</label>';

if (isset($_SESSION['last']) && $_SESSION['last']!=""){
echo '<input class="form-control" name="lname" type="text" id="inputError1" id="lname" onblur="checkFName(this.value)" value="'.$_SESSION['last'].'">';
} else{
echo '<input class="form-control" name="lname" type="text" id="inputError1" id="lname" onblur="checkFName(this.value)">';
}

//echo '<input class="form-control" id="inputError1" name="lname" type="text" id="lname">';
echo '<p class="help-block" id="lnameHelp">Cannot be blank!</p>';
echo '</div>';
} else {
echo '<div class="form-group">';
echo '<label>Last Name:</label>';

if (isset($_SESSION['last']) && $_SESSION['last']!=""){
echo '<input class="form-control" name="lname" type="text" id="lname" onblur="checkFName(this.value)" value="'.$_SESSION['last'].'">';
} else{
echo '<input class="form-control" name="lname" type="text" id="lname" onblur="checkFName(this.value)">';
}

//echo '<input class="form-control" name="lname" type="text" id="lname">';
echo '<p class="help-block" id="lnameHelp"></p>';
echo '</div>';
}

//Email
if (isset($_GET['err']) && strstr($_GET['err'],"emailNull")){
echo '<div class="form-group has-error">';
echo '<label class="control-label" for="inputError1">Email:</label>';

if (isset($_SESSION['email']) && $_SESSION['email']!=""){
echo '<input class="form-control" name="email" type="text" id="inputError1" id="email" onblur="checkFName(this.value)" value="'.$_SESSION['email'].'">';
} else{
echo '<input class="form-control" name="email" type="text" id="inputError1" id="email" onblur="checkFName(this.value)">';
}

//echo '<input class="form-control" id="inputError1" name="email" type="text" id="email">';
echo '<p class="help-block" id="emailHelp">Cannot be blank!</p>';
echo '</div>';
} else if (isset($_GET['err']) && strstr($_GET['err'],"emailBad")){
echo '<div class="form-group has-error">';
echo '<label class="control-label" for="inputError1">Email:</label>';

if (isset($_SESSION['email']) && $_SESSION['email']!=""){
echo '<input class="form-control" name="email" type="text" id="inputError1" id="email" onblur="checkFName(this.value)" value="'.$_SESSION['email'].'">';
} else{
echo '<input class="form-control" name="email" type="text" id="inputError1" id="email" onblur="checkFName(this.value)">';
}

//echo '<input class="form-control" id="inputError1" name="email" type="text" id="email">';
echo '<p class="help-block" id="emailHelp">Incorrect Email format!</p>';
echo '</div>';
} else{
echo '<div class="form-group">';
echo '<label>Email:</label>';
if (isset($_SESSION['email']) && $_SESSION['email']!=""){
echo '<input class="form-control" name="email" type="text" id="email" onblur="checkFName(this.value)" value="'.$_SESSION['email'].'">';
} else{
echo '<input class="form-control" name="email" type="text" id="email" onblur="checkFName(this.value)">';
}
//echo '<input class="form-control" name="email" type="text" id="email">';
echo '<p class="help-block" id="emailHelp"></p>';
echo '</div>';
}

echo '<div class="form-check">';
echo '<label class="form-check-label" for="conCheck">';
echo 'Preferred Contact Method: ';
echo '<input class="form-check-input" type="checkbox" name="conCheck" id="conCheck" value="true">';
echo '</label>';
echo '</div>';

//Phone number
if (isset($_GET['err']) && strstr($_GET['err'],"phoneNull")){
echo '<div class="form-group" has-error>';
echo '<label class="control-label" for="inputError1">Phone number:</label>';

if (isset($_SESSION['phone']) && $_SESSION['phone']!=""){
echo '<input class="form-control" name="phone" type="tel" id="inputError1" id="phone" onblur="checkFName(this.value)" value="'.$_SESSION['phone'].'">';
} else{
echo '<input class="form-control" name="phone" type="tel" id="inputError1" id="phone" placeholder="123-456-7890" onblur="checkFName(this.value)">';
}

//echo '<input class="form-control" type="tel" id="inputError1" name="phone" id="phone" placeholder="123-456-7890">';
	echo '<p class="help-block" id="phoneHelp">Cannot be blank!</p></div>';
} else if (isset($_GET['err']) && strstr($_GET['err'],"phoneBad")){
	echo '<div class="form-group" has-error>';
	echo '<label class="control-label" for="inputError1">Phone number:</label>';

if (isset($_SESSION['phone']) && $_SESSION['phone']!=""){
	echo '<input class="form-control" name="phone" type="tel" id="inputError1" id="phone" onblur="checkFName(this.value)" value="'.$_SESSION['phone'].'">';
} else{
echo '<input class="form-control" name="phone" type="tel" id="inputError1" id="phone" placeholder="123-456-7890" onblur="checkFName(this.value)">';
}

//echo '<input class="form-control" type="tel" id="inputError1" name="phone" id="phone"  placeholder="123-456-7890">';
	echo '<p class="help-block" id="phoneHelp">Incorrect Phone!</p></div>';
} else {
	echo '<div class="form-group">';
echo '<label for="phone">Phone number:</label>';

if (isset($_SESSION['phone']) && $_SESSION['phone']!=""){
	echo '<input class="form-control" name="phone" type="tel" id="phone" onblur="checkFName(this.value)" value="'.$_SESSION['phone'].'">';
} else{
	echo '<input class="form-control" name="phone" type="tel" id="phone" placeholder="123-456-7890" onblur="checkFName(this.value)">';
}

//echo '<input class="form-control" type="tel" id="phone" name="phone" placeholder="123-456-7890">';
echo '<p class="help-block" id="phoneHelp"></p></div>';
}

//Date of Birth
if (isset($_GET['err']) && strstr($_GET['err'],"dobNull")){
	echo '<div class="form-group" has-error>';
	echo '<label class="control-label" for="inputError1">Date of Birth:</label>';

if (isset($_SESSION['dob']) && $_SESSION['dob']!=""){
	echo '<input class="form-control" name="dob" type="date" id="inputError1" id="dob" onblur="checkFName(this.value)" value="'.$_SESSION['dob'].'">';
} else{
	echo '<input class="form-control" name="dob" type="date" id="inputError1" id="dob" onblur="checkFName(this.value)">';
}

//echo '<input class="form-control" type="date" id="inputError1" name="dob" id="dob" placeholder="123-456-7890">';
	echo '<p class="help-block" id="dobHelp">Cannot be blank!</p></div>';
} else if (isset($_GET['err']) && strstr($_GET['err'],"dobBad")){
	echo '<div class="form-group" has-error>';
	echo '<label class="control-label" for="inputError1">Date of Birth:</label>';

if (isset($_SESSION['dob']) && $_SESSION['dob']!=""){
	echo '<input class="form-control" name="dob" type="date" id="inputError1" id="dob" onblur="checkFName(this.value)" value="'.$_SESSION['dob'].'">';
} else{
	echo '<input class="form-control" name="dob" type="date" id="inputError1" id="dob" onblur="checkFName(this.value)">';
}

//echo '<input class="form-control" type="date" id="inputError1" name="dob" id="dob" placeholder="123-456-7890">';
	echo '<p class="help-block" id="dobHelp">Incorrect Date!</p></div>';
} else {
	echo '<div class="form-group">';
	echo '<label for="dob">Date of Birth:</label>';

if (isset($_SESSION['dob']) && $_SESSION['dob']!=""){
	echo '<input class="form-control" name="dob" type="date" id="dob" onblur="checkFName(this.value)" value="'.$_SESSION['dob'].'">';
} else{
	echo '<input class="form-control" name="dob" type="date" id="dob" onblur="checkFName(this.value)">';
}

//echo '<input class="form-control" type="date" id="dob" name="dob">';
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
$err="";
$comment=addslashes($_POST['comment']);
	
if (isset($_POST['fname']) && $_POST['fname']!=""){
	
	$firstName=addslashes($_POST['fname']);
	$_SESSION['first']=$firstName;
} else{
	$err.="FnameNull";
}

if (isset($_POST['lname']) && $_POST['lname']!=""){
	
	$lastName=addslashes($_POST['lname']);
	$_SESSION['last']=$lastName;
} else{
$err.="LnameNull";
}
	
if (isset($_POST['conCheck']) && $_POST['conCheck']!=""){
	$conCheck=$_POST['conCheck'];
	$checkbox=1;
	$_SESSION['conCheck']=$conCheck;
} else {
	$checkbox=0;
}

if (isset($_POST['email']) && $_POST['email']!=""){
	
	$email=$_POST['email'];
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		
		$_SESSION['email']=$email;
	} else{
		
		$_SESSION['email']=$email;
		$err.="emailBad";
	}

} else{
	$err.="emailNull";
}

if (isset($_POST['phone']) && $_POST['phone']!=""){
	
	$phone=$_POST['phone'];
	
	if(!preg_match($validPhone, $phone)){
		$_SESSION['phone']=$phone;
		$err.="phoneBad";
	} else{
		$_SESSION['phone']=$phone;
	}
} else{
	$err.="phoneNull";
}

//checkdate(
if (isset($_POST['dob']) && $_POST['dob']!=""){
	
	$dob=$_POST['dob'];

	//$keywords = explode('-', $dob);
	
	$date_now = date("Y-m-d"); // this format is string comparable

	if ($dob >= $date_now) {
        $err.="dobBad";
		$_SESSION['dob']=$dob;
    }else{
        $_SESSION['dob']=$dob;
    }
	
} else{
	$err.="dobNull";
}

$keywords = preg_split("/\//", "12/12/1212");

if (isset($err) && $err!=""){
	
	//die("Error is: $err");
	//redirect("index.php?page=contact&err=$err");
	header("Location: https://ec2-18-117-218-14.us-east-2.compute.amazonaws.com/hw17/index.php?page=contact&err=$err", true, 301);
}
	
$dblink=db_iconnect("contact_form");
$sql="INSERT INTO `entries`(`first_name`, `last_name`, `email`, `preferred`, `phone`, `dob`, `comment`) VALUES ('$firstName','$lastName','$email',$checkbox,'$phone','$dob','$comment')";
$dblink->query($sql);

//echo "<div>First Name: $firstName</div>";
//echo "<div>Last Name: $lastName</div>";
//echo "<div>Email: $email</div>";
//echo "<div>Preferred form of Contact: $conCheck</div>";
//echo "<div>Phone: $phone</div>";
//echo "<div>Birthday: $dob</div>";
//echo "<div>Comment: $comment</div>";
	
header("Location: https://ec2-18-117-218-14.us-east-2.compute.amazonaws.com/hw17/index.php?page=contact", true, 301);
}
echo '<div id="footer-sec">
<p>David R. Jackson</p>
</div>';
?>

