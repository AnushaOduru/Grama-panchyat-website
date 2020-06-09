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
    $serviceno = $_POST['serviceno'];
    $aadhaarno = $_POST['aadhaarno'];
    $address = $_POST['address'];
   
    if($serviceno!=''||$aadhaarno !=''||$address !=''){
        //Insert Query of SQL
        //$query = mysql_query("insert into userinfo(First name, Last name, email, username, password) values ('$firstname','$lastname' ,'$email', '$username', '$password')");
        //$sql = "insert into userinfo(First name, Last name, email, username, password) values ('$firstname','$lastname' ,'$email', '$username', '$password')";
        $sql = "INSERT INTO `cbill`(`serviceno`, `aadhaarno`, `address`) VALUES ('$serviceno','$aadhaarno' ,'$address')";
        
      
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
header('location:money.html')

?>