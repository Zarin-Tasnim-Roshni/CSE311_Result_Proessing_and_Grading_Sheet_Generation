<?php

$db = mysqli_connect("localhost", "root", "", "result_processing");

if(!$db){

    echo "Database not connected";
}
else{ 
    echo "Database connected". "<br>". "<br>";
}

$id = $_POST["id"];
$PASS = $_POST["password"];

echo "Admin_ID: ", $id."<br>";
echo "Admin pw: ", $PASS."<br>";

$sql = "SELECT PASS FROM admin WHERE Admin_ID = $id";
$result = $db->query($sql);

$row = $result->fetch_assoc();

if($row["PASS"]==$PASS){
    
    echo"successfull";

}

else{
    
    echo"error";

}
?>