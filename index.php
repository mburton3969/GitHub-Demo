<?php 
 $user_name = "Michael Burton.";
 $logged_in = "yes";

if($logged_in == "yes") {
echo "welcome";
}else{ 
echo "you are not authorized to view this page";
break;
}

/* php code above means: 

 ?>



<html>
<head>
	<title>Demo Site</title>
</head>
<body>
	<div>
		<h1>This is a demo site for testing</h1>
		<p>My name is <?php echo $user_name; ?><p>
	</div>
</body>
</html>