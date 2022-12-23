<html>
<head>
  <title>Result</title>
  <link rel="stylesheet" type="text/css" href="home_style.css">
</head>
<body background ="r.jpg">  
<?php

session_start();

echo"<div class = head>";

echo "<h1>"."Welcome, " . $_SESSION["id"] . " This is your Result."."</h1>" ;

echo"</div>";

$data=$_SESSION["id"] ;


$db = mysqli_connect("localhost", "root", "", "result_processing");

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

$query = "SELECT * FROM result WHERE Student_ID=$data";
$result = $db->query($query);


if (!$result) {
  die("Query failed: " . $db->error);
}


echo "<table>";

echo "<tr>";
echo "<th>Course</th>";
echo "<th>Quiz</th>";
echo "<th>Midterm</th>";
echo "<th>Final</th>";
echo "<th>Grade</th>";

echo "</tr>";

while ($row = $result->fetch_assoc()) {

  echo "<tr>";
  echo "<td>" . $row["Course_Name"] . "</td>";
  echo "<td>" . $row["QUIZ"] . "</td>";
  echo "<td>" . $row["MID"] . "</td>";
  echo "<td>" . $row["FINAL"] . "</td>";
  echo "<td>" . $row["GRADE"] . "</td>";
  echo "</tr>";
}

echo "</table>";

$db->close();

?>

  <center>
  <button onclick="window.print()">Print Result</button>
  <br></br>

</body>
</html>
