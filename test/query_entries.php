<?php
include("function.php");
$dblink=db_iconnect("contact_form");
$sql="Select * from `entries`";
$result=$dblink->query($sql) or die("Something went wrong $sql<br>".$dblink->error);

while($data = $result -> fetch_array(MYSQLI_ASSOC)){
	
	echo '<tr>';
	echo '<td>'.$data['first_name'].'</td>';
	echo '<td>'.$data['last_name'].'</td>';
	echo '<td>'.$data['email'].'</td>';
	echo '<td>'.$data['comment'].'</td>';
	echo '</tr>';
}
?>