<?php

	// Connect to database
	$db = mysqli_connect("localhost", "root", "", "result_processing");
	
	// mysqli_connect("servername","username","password","database_name")

	// Get all the categories from category table
	$sql = "SELECT * FROM teacher_course ";
	$all_categories = mysqli_query($db,$sql);

	// The following code checks if the submit button is clicked
	// and inserts the data in the database accordingly
	if(isset($_POST['submit']))
	{
		// Store the Product name in a "name" variable
		$name = mysqli_real_escape_string($db,$_POST['Course_Name']);
		
		// Store the Category ID in a "id" variable
		$id = mysqli_real_escape_string($db,$_POST['Teacher_Initial']);
		
		// Creating an insert query using SQL syntax and
		// storing it in a variable.
		/*$sql_insert =
		"INSERT INTO student_course(Course_Name, Student_ID)
			VALUES ('$name','$id')";
		
		// The following code attempts to execute the SQL query
		// if the query executes with no errors
		// a javascript alert message is displayed
		// which says the data is inserted successfully
		if(mysqli_query($db,$sql_insert))
		{
			echo '<script>alert("Course added successfully")</script>';
		}
        */
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form action = "course_reg2.php" method="POST">

		<label>Select a Course</label>

		<select name="Category">
			<?php
				// use a while loop to fetch data
				// from the $all_categories variable
				// and individually display as an option
				while ($category = mysqli_fetch_array(
						$all_categories,MYSQLI_ASSOC)):;
			?>
				<option value="<?php echo $category["Teacher_Initial"];
					// The value we usually set is the primary key
				?>">
					<?php echo $category["Course_Name"];
						// To show the category name to the user
					?>
				</option>
			<?php
				endwhile;
				// While loop must be terminated
			?>
		</select>
		<br>
		<input type="submit" value="submit" >
	</form>
	<br>
</body>
</html>
