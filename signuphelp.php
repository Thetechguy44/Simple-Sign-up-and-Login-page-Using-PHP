<?php
$connection = mysqli_connect('localhost','root','','new1');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'new1');

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$data = "INSERT INTO fill_in (Fname, Lname, email, password) VALUES ('$firstname', '$lastname', '$email', '$pass')";

mysqli_query ($connection, $data);
header('location:signupsuccessful.php');

?>