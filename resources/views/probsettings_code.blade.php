<style>
.datatable {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.datatable td, .datatable th {
  border: 1px solid #ddd;
  padding: 8px;
}

td {
  text-align: center;
}

.datatable tr:nth-child(even){background-color: #f2f2f2;}

.datatable tr:hover {background-color: #ddd;}

.datatable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}

</style>


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
//echo "isset($_POST['username'])";
//printf("Riad %d", isset($_POST['username']));


//add question....

if(isset($_POST['add_ques'])){

    $course=$_POST['courseselected'];
    $level=$_POST['levelselected'];
    $ques=$_POST['ques'];
    $op1=$_POST['op1'];
    $op2=$_POST['op2'];
    $op3=$_POST['op3'];
    $op4=$_POST['op4'];
    $ans=$_POST['ans'];
    $mark=$_POST['mark'];

    $sql = "INSERT INTO question(sub_id,qlevel,ques,op_1,op_2,op_3,op_4,ans,marks) VALUES ('$course',$level,'$ques','$op1','$op2','$op3','$op4','$ans',$mark)";

  if ($link->query($sql) === TRUE) {
      echo "data inserted successfully";
      echo "<br><br>";
  } else {
      echo "Error inserting data into table: " . $link->error;
      echo "<br>";
  }

}

//delete_ques

else if(isset($_POST['delete_ques'])){

    $quesid=$_POST['qid'];

    $sql = "DELETE from question WHERE q_num=$quesid";

  if ($link->query($sql) === TRUE) {
      echo "data deleted successfully";
      echo "<br><br>";
  } else {
      echo "Error deleting data " . $link->error;
      echo "<br>";
  }

}

//update ques....

else if(isset($_POST['update_ques'])){

    $course=$_POST['courseselected'];
    $level=$_POST['levelselected'];
    $quesid=$_POST['qid'];
    $ques=$_POST['ques'];
    $op1=$_POST['op1'];
    $op2=$_POST['op2'];
    $op3=$_POST['op3'];
    $op4=$_POST['op4'];
    $ans=$_POST['ans'];
    $mark=$_POST['mark'];


    $sql = "UPDATE question set ques='$ques',op_1='$op1',op_2='$op2',op_3='$op3',op_4='$op4',ans='$ans',marks=$mark where q_num=$quesid";

  if ($link->query($sql) === TRUE) {
      echo "data updatedted successfully";
      echo "<br><br>";
  } else {
      echo "Error inserting data into table: " . $link->error;
      echo "<br>";
  }

}

else {
  echo "Wrong button pressed...!";
}
?>
@include('problem_settings')
