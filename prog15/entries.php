<script src="../assets/js/jquery-3.5.1.js"></script>
<?php
echo '<div id="container">';
echo '<div class="panel panel-primary">';
echo '<div class="panel-heading">Contact Form Entries</div>';
echo '<div class="panel-body">';
echo '<table border="1">';
echo '<thead>';
echo '<tr role="row">';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Email</th>';
echo '<th>Comment</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody id="content">';
echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
<script>
function refresh_div(){
	$.ajax({
		type: 'post',
		url: 'https://ec2-18-117-218-14.us-east-2.compute.amazonaws.com/hw16/query_entries.php',
		success: function(data) {
			$('#content').html(data)	
		}
	});
};
setInterval(function(){ refresh_div(); }, 500);
</script>