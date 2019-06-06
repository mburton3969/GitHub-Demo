<?php 
 $user_name = "Michael Burton.";
 $logged_in = "yes";

/* comments are written within php code below to break down what every step means: */


//Check to see if the $logged_in variable is set to yes...
if($logged_in == "yes") {
//Display the word welcome.
echo "welcome";
}else{ //If not logged in...
//Display message
echo "you are not authorized to view this page";
break;//This shuts down everything after this command. It breaks the program.
}

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