<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="quiz_contest";
// Create connection
//echo "Riad 3456";
$link = new mysqli($servername, $username, "", $dbname);
// Check connection
//echo "Riad";
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
if(isset($_POST['submit'])){

  $quizno=$_POST['quizno'];
  $coursename=$_POST['coursename'];
  $totalques=$_POST['totalques'];
  $duration=$_POST['duration'];

  //echo $courseid;
//  echo $coursenameid;
  //echo $teacherid;
  //$Transaction_type=$_POST['Transaction_type'];
  //$transaction_amount=$_POST['transaction_amount'];
  //$capital = "SELECT ucall('$coursename')" ;
  //$result = mysqli_query($link,$capital) ;
  //$data = mysqli_fetch_array($result) ;
  $userid = "SELECT user_id from users where users.type='Student'" ;
  $result = mysqli_query($link,$userid) ;

  while ($row= mysqli_fetch_array($result)) {

    $sql = "INSERT INTO quiz(quiz_no,user_id,course_id,total_ques,duration) VALUES ($quizno,$row[0],'$coursename',$totalques,$duration)";

    if ($link->query($sql) === TRUE) {
        echo "<script>
    document.getElementById('coursecontent').innerHTML = 'Successfully Done!!';
    </script>";
    } else {
        echo "Error inserting data into table: " . $link->error;
    }
  }



}

else {
  echo "something error happend";
}

?>
@include('contest_setup')
