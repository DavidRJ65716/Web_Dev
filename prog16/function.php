<?php
function redirect ($uri)
{ ?>
	<script type="text/javascript">
	<!--
	document.location.href-"<?php echo $uri?>";
	-->
	</script>

<?php die;}

function db_iconnect ($db){
	
	$dblink = new mysqli("localhost","webuser","T9eDkMFcP7ZMw9kC",$db);
	if ($dblink -> connect_errno) {
  	
		echo "Failed to connect to MySQL: " . $dblink -> connect_error;
  		exit();
	}
	return $dblink;
}
?>