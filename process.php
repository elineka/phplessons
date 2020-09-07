<?php

//connect to the server and select database
$server = "localhost"; 
$user = "root"; 
$password = ""; 
$database ="login";
$DBCon = mysqli_connect($server,$user,$password, $database);


//get login value from index.php
$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent sql injection & validation
$username = stripslashes($username);
$password = stripslashes($password);
//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);


//test connection
if(!$DBCon) {
echo"not connected";
}else {
$query ="SELECT * FROM `users` where name ='$username' and password= '$password'";
//query the database for user
$result = mysqli_query( $DBCon, $query);  
if(!$result) {
echo"Failed to query database";
} else{
$row = mysqli_fetch_array($result);
if ($row['name'] == $username && $row['password'] == $password) {
    echo "Login successful  Welcome " .$row['name'];
} else {
 echo "Not registered";
}
}
}
?>