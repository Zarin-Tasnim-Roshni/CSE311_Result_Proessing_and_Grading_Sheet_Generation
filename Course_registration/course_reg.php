<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="course_style.css">

</head>


<body background ="r.jpg">  


<?php 

session_start();



	$db = mysqli_connect("localhost", "root", "", "result_processing");
	
	$sql = "SELECT * FROM teacher_course";
	$all_categories = mysqli_query($db,$sql);

	

	if(isset($_POST['submit']))
	{
		$name = mysqli_real_escape_string($db,$_POST['Course_Name']);
		
		$id = mysqli_real_escape_string($db,$_POST['Teacher_Initial']);
		
    } ?>
	
	<form action = "course_reg2.php" method="POST">

		<label>Select Courses:</label>

		<select name="Category">
			<?php

				while ($category = mysqli_fetch_array(
						$all_categories,MYSQLI_ASSOC)):;
			?>
				<option value="<?php echo $category["Course_Name"];
				?>">

					<?php echo $category["Course_Name"];

					?>
					
				</option>
			<?php
				endwhile;
            
			?>
		</select>
		<br>

		<input type="hidden" name="secret" value= <?php echo $_SESSION['ID']?>>

		<input type="submit" value="submit"> 
	</form>

	<?php

	$x = $_SESSION['ID'];

$query = "SELECT * FROM result WHERE Student_ID=$x";
$result = $db->query($query);


if (!$result) {
  die("Query failed: " . $db->error);
}


echo "<table>";

echo "<tr>";
echo "<th>Courses Taken</th>";

echo "</tr>";

while ($row = $result->fetch_assoc()) {

  echo "<tr>";
  echo "<td>" . $row["Course_Name"] . "</td>";
  echo "</tr>";
}

echo "</table>";

	?>

	<br>
</body>
</html>