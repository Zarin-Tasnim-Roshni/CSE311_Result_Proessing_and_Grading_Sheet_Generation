<html>

<head>
  <title>Student Dash</title>
  <link rel="stylesheet" type="text/css" href="home_style.css">
</head>

<body background="r.jpg">
  <?php

  session_start();

  echo "<div class = head>";

  echo "<h1>" . "Welcome, " . $_SESSION["id"] . " This is your Dashboard." . "</h1>";

  echo "</div>";

  $data = $_SESSION["id"];


  $db = mysqli_connect("localhost", "root", "", "result_processing");

  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

  $query = "SELECT * FROM student_info WHERE Student_ID=$data";


  $result = $db->query($query);


  if (!$result) {
    die("Query failed: " . $db->error);
  }


  echo "<table>";

  echo "<tr>";
  echo "<th>NAME</th>";
  echo "<th>ID</th>";
  echo "<th>Email</th>";
  echo "<th>GENDER</th>";
  echo "</tr>";

  while ($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>" . $row["StudentName"] . "</td>";
    echo "<td>" . $row["Student_ID"] . "</td>";
    echo "<td>" . $row["StudentEmail"] . "</td>";
    echo "<td>" . $row["Gender"] . "</td>";
    echo "</tr>";
  }


  echo "</table>";

  $db->close();

  ?>

  <center>
    <button onclick="window.location.href = 'http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/view_result/result.php';">View Grades</button>
    <br></br>
    
    <center>
    <button onclick="window.location.href = 'http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/profile_pages/studentlogout.php';">logout</button>
  
</body>

</html>