<?php
include("config.php");
session_start();
$error="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']); 
  
    $sql = "SELECT * FROM register WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // $q = " select * from signin  where name = '$name' && password = '$password' ";

// $result = mysqli_query($con, $q);

// $num = mysqli_num_rows($result);
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      echo $count;
      
    if($count == 1) {
       $_SESSION['login_user'] = $username;
       
       header("location:index.html#card");
    }else {
     
      $error = "Your Login Name or Password is invalid";
      echo "$error";
    }

 }

// $con = mysqli_connect('localhost','root');
// if($con){
// 	echo" connection successful";
// }else{
// 	echo " no connection"; 
// }

// mysqli_select_db($con, 'mysql');
// if($_SERVER["REQUEST_METHOD"] == "POST") {
//     // username and password sent from form 
//     $name = $_POST['name'];
// $password = $_POST['password'];

// echo $name;
// echo $password;


// $q = " select * from signin  where name = '$name' && password = '$password' ";

// $result = mysqli_query($con, $q);

// $num = mysqli_num_rows($result);

// if($num == 1){
	
// 	$_SESSION['name'] = $name;
// 	header('location:home.php');


// }else{

// 	header('location:home.php');
// }

//  }


?>