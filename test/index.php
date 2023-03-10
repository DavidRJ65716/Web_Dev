<script src="../assets/js/jquery-3.5.1.js"></script>
<script>var page = "";</script>
<?php
include("function.php");
echo '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="../assets/css/bootstrap.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/basic.css">
<link rel="stylesheet" href="../assets/css/main.css">
<style>
	#container{ padding: 10px;}
</style>
</head>	
<body>
<div id="page-inner">';
include("navg.php");
echo '<div id="mainContent">';
echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
?>
<script>

function updateContent(page){
	console.log(page);
	$.ajax({
        type:'post',
        url:'https://ec2-18-117-218-14.us-east-2.compute.amazonaws.com/hw17/'+page+'.php', 
        success:function(data){			
			switch (page){
                case "home":
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
					document.getElementById("entries").classList.remove("active");
                    document.getElementById("home").classList.add("active");
					
                    break;
                case "school":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
					document.getElementById("entries").classList.remove("active");
                    document.getElementById("school").classList.add("active");
					
                    break;
                case "work":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
					document.getElementById("entries").classList.remove("active");
                    document.getElementById("work").classList.add("active");
					
                    break;
                case "contact":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("school").classList.remove("active");
					document.getElementById("entries").classList.remove("active");
                    document.getElementById("contact").classList.add("active");
					
                    break;
				case "entries":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("school").classList.remove("active");
					document.getElementById("contact").classList.remove("active");
                    document.getElementById("entries").classList.add("active");
					
                    break;
				case "index":
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
					document.getElementById("entries").classList.remove("active");
                    document.getElementById("home").classList.add("active");
					
                    break;
                default:
					
					document.getElementById("school").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
					document.getElementById("entries").classList.remove("active");
					document.getElementById("home").classList.add("active");
                    
					break;
            }
            $('#mainContent').html(data);//Show fetched data 
        }
    });
};
</script>