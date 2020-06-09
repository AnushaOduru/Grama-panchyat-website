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


if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
  $firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname'];
$email =  $_POST['email'];
$password =  $_POST['password'];
$address =  $_POST['address'];
$aadhaarno =  $_POST['aadhaarno'];
$bankaccountno =  $_POST['bankaccountno'];
$area =  $_POST['area'];
$wardno =  $_POST['wardno'];
$doorno =  $_POST['doorno'];
   
    
if (!empty($firstname)||!empty($lastname)  || !empty($email) || !empty($password) || !empty($address) || !empty($adhaarno) || !empty($bankaccountno)|| !empty($area) || !empty($wardno)|| !empty($doorno)){
        //Insert Query of SQL
        //$query = mysql_query("insert into userinfo(First name, Last name, email, username, password) values ('$firstname','$lastname' ,'$email', '$username', '$password')");
        //$sql = "insert into userinfo(First name, Last name, email, username, password) values ('$firstname','$lastname' ,'$email', '$username', '$password')";
        $sql = "INSERT Into `payment` (`firstname`, `lastname`, `email`, `password`, `address`, `aadhaarno`, `bankaccountno`, `area`, `wardno`, `doorno`) values('$firstname','$lastname','$email','$password','$address','$aadhaarno','$bankaccountno','$area','$wardno','$doorno')";
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
header('location:cview.html')


?>