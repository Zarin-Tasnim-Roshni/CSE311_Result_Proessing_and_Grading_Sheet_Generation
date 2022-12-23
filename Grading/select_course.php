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

$t_initial=$_SESSION["initial"];
$db = mysqli_connect("localhost", "root", "", "result_processing");

$sql = "SELECT * FROM teacher_course WHERE Teacher_Initial='$t_initial'";
$all_categories = mysqli_query($db,$sql);

if(isset($_POST['submit']))
{
  $name = mysqli_real_escape_string($db,$_POST['Course_Name']);
  
  $id = mysqli_real_escape_string($db,$_POST['Teacher_Initial']);

} ?>

<form action = "setsession.php" method="POST">

  <label>Select Your Course:</label>

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

  <input type="hidden" name="secret" value= <?php echo $_SESSION['initial']?>>

  <input type="submit" value="submit"> 

  
</form>
<br>
</body>
</html>