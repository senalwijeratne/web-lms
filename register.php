<?php


$stdf_name = $_POST["fname"];
$stdl_name = $_POST["lname"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$passcon = $_POST["conpass"];
$numb = $_POST["telno"];
$gen = $_POST["opt"];


include ("config.php");
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO mem_details ( f_name,l_name,email,password,password_con,teleno,gender)
VALUES ('".$stdf_name."','".$stdl_name."','".$email."','".$pass."','".$passcon."',".$numb.",'".$gen.")";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>