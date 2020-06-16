<html>
<link rel="stylesheet" href="table.css" type="text/css">
</html>


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


$sql = "call get_question";
//$sql = "SELECT course.course_id,course.course_name,users.user_name FROM course INNER JOIN users on course.course_id=users.user_id";
//$sql = "SELECT * FROM course order by course_id;";
//$sql1 = SELECT count(*) FROM course WHERE user_id=5

//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All data from Customer Table";
echo "<h1 style='margin-left:40%;'>Question Bank</h1>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table class='datatable'>";
	    echo "<tr>" ;
	    echo "<th>Course Id</th>";
	    echo "<th>Ques. No.</th>";
      echo "<th>Level</th>";
      echo "<th>Question</th>";
      echo "<th>Op1</th>";
      echo "<th>Op2</th>";
      echo "<th>Op3</th>";
      echo "<th>Op4</th>";
      echo "<th>Ans</th>";
      echo "<th>Marks</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>";
	        echo "<td>".$row[0]."</td>";
          echo "<td>".$row[1]."</td>";
          echo "<td>".$row[2]."</td>";
          echo "<td>".$row[3]."</td>";
          echo "<td>".$row[4]."</td>";
          echo "<td>".$row[5]."</td>";
          echo "<td>".$row[6]."</td>";
	        echo "<td>".$row[7]."</td>";
          echo "<td>".$row[8]."</td>";
          echo "<td>".$row[9]."</td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	}
	else {
	    echo "0 results";
	}
}

?>
