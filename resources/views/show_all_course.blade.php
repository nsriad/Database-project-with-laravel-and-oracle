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


$sql = "SELECT course.course_id,course.course_name,users.user_name FROM course INNER join users on course.user_id=users.user_id";
//$sql = "SELECT course.course_id,course.course_name,users.user_name FROM course INNER JOIN users on course.course_id=users.user_id";
//$sql = "SELECT * FROM course order by course_id;";
//$sql1 = SELECT count(*) FROM course WHERE user_id=5

//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All data from Customer Table";
echo "<h1 style='margin-left:40%;'>Course Table</h1>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table class='datatable'>";
	    echo "<tr>" ;
	    echo "<th>Course Id</th>";
	    echo "<th>Course Name</th>";
      echo "<th>Assigned Teacher</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>";
	        echo "<td>".$row['course_id']."</td>";
	        echo "<td>".$row['course_name']."</td>";
          echo "<td>".$row['user_name']."</td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	}
	else {
	    echo "0 results";
	}
}

?>
