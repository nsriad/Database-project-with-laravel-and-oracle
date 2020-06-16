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


//this portion for update user bind_textdomain_codeset

$triggersql = "CREATE TRIGGER NameCheck BEFORE UPDATE ON users FOR EACH ROW SET NEW.user_name=UPPER(NEW.user_name);";
$execute = mysqli_query($link,$triggersql) ;

if(isset($_POST['updateconfirm'])){

  $userid=$_POST['userid'];
  $fullname=$_POST['fullname'];
  $email=$_POST['email'];
  $department=$_POST['department'];

  //$Transaction_type=$_POST['Transaction_type'];
  //$transaction_amount=$_POST['transaction_amount'];
  $sql = "UPDATE users SET user_name='$fullname',dept='$department',email='$email' where users.user_id=$userid";
if ($link->query($sql) === TRUE) {
  echo '<script language="javascript">';
  echo 'alert("Updated successfully!")';
  echo '</script>';
} else {
  echo '<script language="javascript">';
  echo 'alert("Something went wrong!")';
  echo '</script>';
}
}

else if(isset($_POST['removeconfirm'])){

  $userid=$_POST['userid'];
  $fullname=$_POST['fullname'];
  $email=$_POST['email'];
  $department=$_POST['department'];

  //$Transaction_type=$_POST['Transaction_type'];
  //$transaction_amount=$_POST['transaction_amount'];
  $sql = "DELETE from users where users.user_id=$userid";
if ($link->query($sql) === TRUE) {
  echo '<script language="javascript">';
  echo 'alert("Deleted successfully!")';
  echo '</script>';
} else {
  echo '<script language="javascript">';
  echo 'alert("Something went wrong!")';
  echo '</script>';
}
}



//This portion for show all user
else if(isset($_POST['viewall'])){

$sql = "SELECT * FROM users order by user_id;";
$admincount = "SELECT count(*) from users where type='Admin'" ;
$teachercount = "SELECT count(*) from users where type='Teacher'" ;
$studentcount = "SELECT count(*) from users where type='Student'" ;
$latestuser = "SELECT user_name,type from users where user_id=( SELECT MAX(user_id) from users)" ;

//echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All data from Customer Table";
echo "<h1 style='margin-left:40%;'>Users Table</h1>";
if($result = mysqli_query($link,$sql)){
	if (mysqli_num_rows($result) > 0) {
	    echo "<table class='datatable'>";
	    echo "<tr>" ;
	    echo "<th>User Id</th>";
	    echo "<th>Name</th>";
      echo "<th>Type</th>";
      echo "<th>Department</th>";
      echo "<th>Password</th>";
      echo "<th>Email</th>";
	    //echo "<th>customer_add</th>";
	    //echo "<th>phone_no</th>";
	    echo "</tr>";
	    while($row = mysqli_fetch_array($result)) {
	    	echo "<tr>";
	        echo "<td>".$row['user_id']."</td>";
	        echo "<td>".$row['user_name']."</td>";
          echo "<td>".$row['type']."</td>";
          echo "<td>".$row['dept']."</td>";
          echo "<td>".$row['pass']."</td>";
          echo "<td>".$row['email']."</td>";
	        //echo "<td>".$row['customer_add']."</td>";
	        //echo "<td>".$row['phone_no']."</td>";
	        echo "</tr>";
	    }
	    echo "</table>";
	}
	else {
	    echo "0 results";
	}
}

echo "<h1 style='margin-left:25%;'>Users Counter Table</h1>";
$result1 = mysqli_query($link,$admincount) ;
$result2 = mysqli_query($link,$teachercount) ;
if($latest = mysqli_query($link,$latestuser)){
    $row3= mysqli_fetch_array($latest);
}
else {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}

if($result = mysqli_query($link,$studentcount)){
	if (mysqli_num_rows($result) > 0) {

    echo "<table class='datatable'>";
    echo "<tr>" ;
      echo "<th>Admin</th>";
      echo "<th>Teacher</th>";
      echo "<th>Student</th>";
      echo "<th>Recent User</th>";
      echo "<th>Type</th>";
    echo "</tr>" ;

    $row= mysqli_fetch_array($result);
    $row1= mysqli_fetch_array($result1);
    $row2= mysqli_fetch_array($result2);
    //$row3= mysqli_fetch_array($latest);
      echo "<tr>";
        echo "<td>".$row1[0]."</td>";
        echo "<td>".$row2[0]."</td>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row3[0]."</td>";
        echo "<td>".$row3[1]."</td>";
      echo "</tr>";
      echo "</table>";

    }
  }
}

//admins Only

else if(isset($_POST['adminsonly'])){

$sql = "SELECT * FROM users where type='Admin'";
echo "<h1 style='margin-left:40%;'>Users Table</h1>";
if($result = mysqli_query($link,$sql)){
  if (mysqli_num_rows($result) > 0) {
      echo "<table class='datatable'>";
      echo "<tr>" ;
      echo "<th>User Id</th>";
      echo "<th>Name</th>";
      echo "<th>Type</th>";
      echo "<th>Department</th>";
      echo "<th>Password</th>";
      echo "<th>Email</th>";
      //echo "<th>customer_add</th>";
      //echo "<th>phone_no</th>";
      echo "</tr>";
      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
          echo "<td>".$row['user_id']."</td>";
          echo "<td>".$row['user_name']."</td>";
          echo "<td>".$row['type']."</td>";
          echo "<td>".$row['dept']."</td>";
          echo "<td>".$row['pass']."</td>";
          echo "<td>".$row['email']."</td>";
          //echo "<td>".$row['customer_add']."</td>";
          //echo "<td>".$row['phone_no']."</td>";
          echo "</tr>";
      }
      echo "</table>";
  }
  else {
      echo "0 results";
  }
}
}

//tecahers only....

else if(isset($_POST['teachersonly'])){

$sql = "SELECT * FROM users where type='Teacher'";
echo "<h1 style='margin-left:40%;'>Users Table</h1>";
if($result = mysqli_query($link,$sql)){
  if (mysqli_num_rows($result) > 0) {
      echo "<table class='datatable'>";
      echo "<tr>" ;
      echo "<th>User Id</th>";
      echo "<th>Name</th>";
      echo "<th>Type</th>";
      echo "<th>Department</th>";
      echo "<th>Password</th>";
      echo "<th>Email</th>";
      //echo "<th>customer_add</th>";
      //echo "<th>phone_no</th>";
      echo "</tr>";
      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
          echo "<td>".$row['user_id']."</td>";
          echo "<td>".$row['user_name']."</td>";
          echo "<td>".$row['type']."</td>";
          echo "<td>".$row['dept']."</td>";
          echo "<td>".$row['pass']."</td>";
          echo "<td>".$row['email']."</td>";
          //echo "<td>".$row['customer_add']."</td>";
          //echo "<td>".$row['phone_no']."</td>";
          echo "</tr>";
      }
      echo "</table>";
  }
  else {
      echo "0 results";
  }
}
}

//students only...

else if(isset($_POST['studentsonly'])){

$sql = "SELECT * FROM users where type='Student'";
echo "<h1 style='margin-left:40%;'>Users Table</h1>";
if($result = mysqli_query($link,$sql)){
  if (mysqli_num_rows($result) > 0) {
      echo "<table class='datatable'>";
      echo "<tr>" ;
      echo "<th>User Id</th>";
      echo "<th>Name</th>";
      echo "<th>Type</th>";
      echo "<th>Department</th>";
      echo "<th>Password</th>";
      echo "<th>Email</th>";
      //echo "<th>customer_add</th>";
      //echo "<th>phone_no</th>";
      echo "</tr>";
      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
          echo "<td>".$row['user_id']."</td>";
          echo "<td>".$row['user_name']."</td>";
          echo "<td>".$row['type']."</td>";
          echo "<td>".$row['dept']."</td>";
          echo "<td>".$row['pass']."</td>";
          echo "<td>".$row['email']."</td>";
          //echo "<td>".$row['customer_add']."</td>";
          //echo "<td>".$row['phone_no']."</td>";
          echo "</tr>";
      }
      echo "</table>";
  }
  else {
      echo "0 results";
  }
}
}

?>
