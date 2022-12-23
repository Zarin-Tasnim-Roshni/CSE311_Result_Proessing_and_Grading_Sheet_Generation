<html>

<head>
  <title>Teacher Dash</title>
  <link rel="stylesheet" type="text/css" href="home_style.css">
</head>

<body background="r.jpg">
  <?php

  session_start();

  echo "<div class = head>";

  echo "<h1>" . "Welcome, " . $_SESSION["initial"] . " This is your Dashboard." . "</h1>";

  echo "</div>";

  $data = $_SESSION["initial"];


  $db = mysqli_connect("localhost", "root", "", "result_processing");

  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

  $query = "SELECT * FROM teacher_info WHERE Teacher_Initial='$data'";


  $result = $db->query($query);


  if (!$result) {
    die("Query failed: " . $db->error);
  }


  echo "<table>";

  echo "<tr>";
  echo "<th>NAME</th>";
  echo "<th>Teacher Initial</th>";
  echo "<th>Email</th>";
  echo "<th>GENDER</th>";
  echo "</tr>";

  while ($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>" . $row["Teacher_Name"] . "</td>";
    echo "<td>" . $row["Teacher_Initial"] . "</td>";
    echo "<td>" . $row["Email"] . "</td>";
    echo "<td>" . $row["Gender"] . "</td>";
    echo "</tr>";
  }


  echo "</table>";

  $db->close();

  ?>

  <center>
    <button onclick="window.location.href = 'http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/grading/select_course.php';">Submit Grades</button>
    <br></br>
    
    <center>
    <button id="logout-button">Log Out</button>

    <script>
    document.getElementById('logout-button').addEventListener('click', logout);


    function logout() {

  window.location.replace('http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/teacher_login/tlogin.html');

  localStorage.removeItem('user');
}
    </script>
</body>

</html>