<?php
echo '<ul class="nav nav-tabs">';
if(isset($_GET['page']) && $_GET['page']!=""){
		
	switch ($_GET['page']){
		case "work":
			echo '<li role="presentation"><a href="index.php">Home</a></li>';
			echo '<li role="presentation"><a href="index.php?page=school">School</a></li>';
			echo '<li role="presentation" class="active"><a href="index.php?page=work">Work</a></li>';
			echo '<li role="presentation"><a href="index.php?page=contact">Contact</a></li>';
			echo '<li role="presentation"><a href="index.php?page=entries">Entries</a></li>';
			break;
		case "school":
			echo '<li role="presentation"><a href="index.php">Home</a></li>';
			echo '<li role="presentation" class="active"><a href="index.php?page=school">School</a></li>';
			echo '<li role="presentation"><a href="index.php?page=work">Work</a></li>';
			echo '<li role="presentation"><a href="index.php?page=contact">Contact</a></li>';
			echo '<li role="presentation"><a href="index.php?page=entries">Entries</a></li>';
			break;
		case "contact":
			echo '<li role="presentation"><a href="index.php">Home</a></li>';
			echo '<li role="presentation"><a href="index.php?page=school">School</a></li>';
			echo '<li role="presentation"><a href="index.php?page=work">Work</a></li>';
			echo '<li role="presentation" class="active"><a href="index.php?page=contact">Contact</a></li>';
			echo '<li role="presentation"><a href="index.php?page=entries">Entries</a></li>';
			break;
		case "entries":
			echo '<li role="presentation"><a href="index.php">Home</a></li>';
			echo '<li role="presentation"><a href="index.php?page=school">School</a></li>';
			echo '<li role="presentation"><a href="index.php?page=work">Work</a></li>';
			echo '<li role="presentation"><a href="index.php?page=contact">Contact</a></li>';
			echo '<li role="presentation" class="active"><a href="index.php?page=entries">Entries</a></li>';
			break;
		default:
			echo '<li role="presentation" class="active"><a href="index.php">Home</a></li>';
			echo '<li role="presentation"><a href="index.php?page=school">School</a></li>';
			echo '<li role="presentation"><a href="index.php?page=work">Work</a></li>';
			echo '<li role="presentation"><a href="index.php?page=contact">Contact</a></li>';
			echo '<li role="presentation"><a href="index.php?page=entries">Entries</a></li>';
			break;
	}
} else{
	echo '<li role="presentation" class="active"><a href="index.php">Home</a></li>';
	echo '<li role="presentation"><a href="index.php?page=school">School</a></li>';
	echo '<li role="presentation"><a href="index.php?page=work">Work</a></li>';
	echo '<li role="presentation"><a href="index.php?page=contact">Contact</a></li>';
	echo '<li role="presentation"><a href="index.php?page=entries">Entries</a></li>';
}
echo '</ul>';
?>