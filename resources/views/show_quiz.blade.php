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


$sql = "(SELECT course.user_id,course.course_id from course,quiz WHERE course.course_id=quiz.course_id)\n"

    . "UNION\n"

    . "(SELECT quiz.user_id,quiz.course_id FROM course,quiz WHERE course.course_id=quiz.course_id)";
//$sql = "SELECT course.course_id,course.course_name,users.user_name FROM course INNER JOIN users on course.course_id=users.user_id";
//$sql = "SELECT * FROM course order by course_id;";
//$sql1 = SELECT count(*) FROM course WHERE user_id=5

//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All data from Customer Table";
echo "<h1 style='margin-left:40%;'>Registered Table</h1>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table class='datatable'>";
	    echo "<tr>" ;
	    echo "<th>User Id</th>";
	    echo "<th>Course Id</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>";
	        echo "<td>".$row[0]."</td>";
	        echo "<td>".$row[1]."</td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	}
	else {
	    echo "0 results";
	}
}

?>
