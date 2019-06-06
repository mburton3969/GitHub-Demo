<?php 
error_reporting(E_ALL);
include "connection.php";

 $user_name = "Michael Burton.";
 $logged_in = "yes";

/* comments are written within php code below to break down what every step means: */


//Check to see if the $logged_in variable is set to yes...
/*if($logged_in == "yes") {
//Display the word welcome.
echo "welcome";
}else{ //If not logged in...
//Display message
echo "you are not authorized to view this page";
}*/

 ?>



<html>
<head>
	<title>Demo Site</title>
</head>
<body>
	<div>
		<h1>This is a demo site for testing</h1>
		<p>My name is <?php echo $user_name; ?><p>

			<?php
			/*$i = 0;  
			while($i < 10){
				echo "Hello";
				$i++;
			}*/
			?>

	</div>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Color</th>
				<th>INACTIVE</th>
			</tr>
		</thead>
		<tbody>

		<?php
		//Query Statement or Command...
		$q = "SELECT * FROM `favorite_colors`";
		//Get The Data (Takes the Query Statament/Command to the Database and brings back the result...
		$g = mysqli_query($conn, $q) or die($conn->error);
		//Setup the Results using what was brought back from the database...allows data to be readable by user
		$r = mysqli_fetch_array($g);
		echo $r['Name'];


		
		?>

			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Color</td>
				<td>INACTIVE</td>
			</tr>
		</tbody>
	</table>


</body>
</html>








