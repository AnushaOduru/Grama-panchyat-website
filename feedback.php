<?php


// create temp variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "i am in";
}
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
  $firstname =  $_POST['name'];
$email =  $_POST['email'];
$subject =  $_POST['subject'];
$message =  $_POST['message'];

   
    
if (!empty($name)||!empty($email)  || !empty($subject) || !empty($message)){
        //Insert Query of SQL
        //$query = mysql_query("insert into userinfo(First name, Last name, email, username, password) values ('$firstname','$lastname' ,'$email', '$username', '$password')");
        //$sql = "insert into userinfo(First name, Last name, email, username, password) values ('$firstname','$lastname' ,'$email', '$username', '$password')";
        $sql = "INSERT Into `feedback` (`name`, `email`, `subject`, `message`) values('$name','$email','$subject','$message')";
        $result = $conn->query($sql);
        
        if ($result) {
          echo "<br/><br/><span>Data Inserted successfully...!!</span>";
        } else {
            die("insert failed: " . $conn->error);
        }
    }
    else{
        echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
}
// mysql_close($conn); // Closing Connection with Server
$conn->close();



/*if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
      $message = $_POST['message'];
   
    if($name!=''||$email !=''||$subject !='' ||$message !=''){
        //Insert Query of SQL

        $sql = "INSERT INTO `feedback`(`name`, `email`, `subject`,`message`) VALUES ('$name','$email' ,'$subject' ,$message)";
        
      
        $result = $conn->query($sql);
        
        if ($result) {
          echo "<br/><br/><span>Data Inserted successfully...!!</span>";
        } else {
            die("insert failed: " . $conn->error);
        }
    }
    else{
        echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
}
// mysql_close($conn); // Closing Connection with Server
$conn->close();
//header('location:index.html')*/

?>