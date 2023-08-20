<?php
$connection = mysqli_connect('localhost', 'root','','new1');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'new1');

// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$query = "SELECT * FROM fill_in WHERE email = '$email' && password = '$pass' ";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result)>0){

    
    header('location:loginsuccessful.php');
}
else {
    echo "Error password or email";
 
}

mysqli_query ($connection, $query);


?>