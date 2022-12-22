<html>
<head>
  <title>Student Dash</title>
  <link rel="stylesheet" type="text/css" href="home_style.css">
</head>
<body background ="r.jpg">  
<?php

session_start();

echo "Welcome, " . $_SESSION["id"] . "! This is your dashboard.";

$data=$_SESSION["id"] ;


$db = mysqli_connect("localhost", "root", "", "result_processing");

// Check for connection errors
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// Define the query to retrieve data from the table
$query = "SELECT * FROM student_info WHERE Student_ID=$data";

// Execute the query
$result = $db->query($query);

// Check for query errors
if (!$result) {
  die("Query failed: " . $db->error);
}

// Start a HTML table
echo "<table>";

// Print the table headings
echo "<tr>";
echo "<th>NAME</th>";
echo "<th>ID</th>";
echo "<th>Email</th>";
echo "<th>GENDER</th>";
echo "</tr>";

// Print the table rows
while ($row = $result->fetch_assoc()) {

  echo "<tr>";
  echo "<td>" . $row["StudentName"] . "</td>";
  echo "<td>" . $row["Student_ID"] . "</td>";
  echo "<td>" . $row["StudentEmail"] . "</td>";
  echo "<td>" . $row["Gender"] . "</td>";
  echo "</tr>";
}

// End the HTML table
echo "</table>";

// Close the database connection
$db->close();

?>

  <center> 
  <button onclick="window.location.href = 'http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/Course_registration/Registration_Test.html';">View Grades</button>
  <br></br>
  <center>
  <button onclick="window.location.href = 'http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/Login/Login_Test.html';">Print Grades</button>
  <br></br>


</body>
</html>
