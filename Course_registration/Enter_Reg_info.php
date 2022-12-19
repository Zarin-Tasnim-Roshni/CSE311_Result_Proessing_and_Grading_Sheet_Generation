<?php

$db = mysqli_connect("localhost", "root", "", "result_processing");

if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}

$st_name = $_POST["name"];
$id = $_POST["id"];
$st_email = $_POST["email"];
$st_gender = $_POST["gender"];
$pass = $_POST["password"];

$sql = "INSERT INTO student_info(StudentName,StudentEmail,Gender,password,Student_ID) VALUES('$st_name','$st_email','$st_gender','$pass',$id)";




echo "Student Name: ", $st_name."<br>";
echo "Student ID: ", $id."<br>";
echo "Student Pass: ", $pass."<br>";
echo "Student email: ", $st_email."<br>";
echo "Student gender: ", $st_gender."<br>";


if(mysqli_query($db, $sql)){

    echo "Information Inserted". "<br>". "<br>";
    $sql="INSERT INTO result(Student_ID) VALUES($id)";
    mysqli_query($db, $sql);

     echo "Information Inserted". "<br>". "<br>";

}
else{

    echo "error" . mysqli_error($db);
}


?>