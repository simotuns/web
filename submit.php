<?php
$x=$_POST['firstname'];
$y=$_POST['lastname'];
$z=$_POST['comm'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="db2";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
die("Connection failed" . $conn->connect_error);
}

echo "Connected succesfully";
$sql = "INSERT INTO user (fname , lname, comm) VALUES ('$x','$y','$z')";

if ($conn->query($sql) === TRUE) {
echo "New record created succesfully";
} else
{echo "Error". $sql . "<br>". $conn->error;
}

$conn->close();
?>