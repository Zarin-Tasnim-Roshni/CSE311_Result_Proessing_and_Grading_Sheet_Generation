<html>
<head>
  <meta charset="utf-8">
  <title>Submit Grades</title>
  <link rel="stylesheet" type="text/css" href="home_style.css">
</head>

<body>

<?php

session_start();


$db = mysqli_connect("localhost", "root", "", "result_processing");

$t_initial = $_SESSION["initial"];
$t_course = $_SESSION["t_coursename"];


echo "Teacher's initial: " . $t_initial . "<br>";
echo "Teacher's course: " . $t_course;


$query = "SELECT * FROM result WHERE Course_Name='$t_course'";
$result = $db->query($query);


if (!$result) {
  die("Query failed: " . $db->error);
}


echo "<table>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Quiz</th>";
echo "<th>Midterm</th>";
echo "<th>Final</th>";
echo "<th>Grade</th>";

echo "</tr>";

while ($row = $result->fetch_assoc()) {

  echo "<tr>";
  echo "<td>" . $row["Student_ID"] . "</td>";
  echo "<td>" . $row["QUIZ"] . "</td>";
  echo "<td>" . $row["MID"] . "</td>";
  echo "<td>" . $row["FINAL"] . "</td>";
  echo "<td>" . $row["GRADE"] . "</td>";
  echo "</tr>";
}

echo "</table>";

?>


  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" 
    style="min-height: 100vh;flex-grow: 1;">
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          
          
          <h1>Submit Grades</h1>
        </div>


        <div class="formbg-outer">
          <div class="formbg">


            <div class="formbg-inner padding-horizontal--48">

              <form action = "grading2.php" method ="POST">

                <div class="field padding-bottom--24">

                    <label>Enter Student ID</label> 
                    <input type = "number" name = "id" value = ""  max="9999999999"  min="0">

                </div>

                <div class="field padding-bottom--24">

                    <label>Quiz (Out of 30) </label>
                    <input type = "number" name = "quiz" value = "" max="30"  min="0">
                    <br><br>

                    <label>Mid (Out of 30)</label>
                    <input type = "number" name = "mid" value = "" max="30" min="0">
                    <br><br>

                    <label>Final (Out of 40)</label>
                    <input type = "number" name = "final" value = "" max="40" min="0">
                    <br><br>

                </div>

                <div class="field padding-bottom--24">

                  <input type = "submit" value = "Submit Grades">
                </div>
              </form>


              <center>
                
              <button id="logout-button">Log Out</button>
              <script>
              document.getElementById('logout-button').addEventListener('click', logout);
              function logout() {
                window.location.replace('http://localhost/CSE311_Result_Proessing_and_Grading_Sheet_Generation/teacher_login/tlogin.html');
                localStorage.removeItem('user');
                session_destroy();
              }
              
              </script>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>