<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "portfolio_emails";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno1'];
$message=$_POST['message'];
echo $name;
echo $email;
echo $phno;
echo $message;


$sql="INSERT INTO emails (name, email , phone_number ,message) VALUES ('$name','$email','$phno','$message')";
if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
 } else {
    echo "Error: ";
 }
?>