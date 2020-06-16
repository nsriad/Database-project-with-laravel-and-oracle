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

  $courseid=$_POST['courseid'];
  $coursename=$_POST['coursename'];
  $teacherid=$_POST['teacherid'];

  //echo $courseid;
//  echo $coursenameid;
  //echo $teacherid;
  //$Transaction_type=$_POST['Transaction_type'];
  //$transaction_amount=$_POST['transaction_amount'];
  $capital = "SELECT ucall('$courseid')" ;
  $result = mysqli_query($link,$capital) ;
  $data = mysqli_fetch_array($result) ;
  $sql = "INSERT INTO course(course_id,course_name,user_id) VALUES ('$data[0]','$coursename',$teacherid)";

if ($link->query($sql) === TRUE) {
    echo "<script>
document.getElementById('coursecontent').innerHTML = 'Successfully Done!!';
</script>";
} else {
    echo "Error inserting data into table: " . $link->error;
}
}

else {
  echo "something error happend";
}

?>
@include('coursesettings')
