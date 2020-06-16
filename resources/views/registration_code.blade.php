<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="quiz_contest";
// Create connection
$link = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
if(isset($_POST['selectuser'])){

  $selectuser=$_POST['selectuser'];
  $fullname=$_POST['fullname'];
  $email=$_POST['email'];
  $department=$_POST['department'];
  $password=$_POST['password'];

  //$Transaction_type=$_POST['Transaction_type'];
  //$transaction_amount=$_POST['transaction_amount'];

  $capital = "SELECT ucall('$department')" ;
  $result = mysqli_query($link,$capital) ;
  $data = mysqli_fetch_array($result) ;
  $sql = "INSERT INTO users(user_name,email,dept,pass,type) VALUES ('$fullname','$email','$data[0]','$password','$selectuser')";

if ($link->query($sql) === TRUE) {
    echo "data inserted successfully";
    echo "<br><br>";
} else {
    echo "Error inserting data into table: " . $link->error;
    echo "<br>";
}
}

?>

@include('login')
