<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Registration...</title>
    <link rel="stylesheet" href="reg.css" type="text/css">
</head>
<body>

        <div class="login-box">
            <h1>Registration Form</h1>

    <form action="{{url('/registration_code')}}" method="post">
          {{csrf_field()}}

            <div class="custom">
                <span style="width:auto ;float:left ;"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                <span class="sel" style="height:inherit;float:left; top: 0px; left: 15px;">
                  <select ID="userdropdown" name="selectuser" style="Height:30px; Width:400px;" >
                      <option Value="0">-User Type-</option>
                      <option Value="Admin">Admin</option>
                      <option Value="Teacher">Teacher</option>
                      <option Value="Student">Student</option>
                  </select>
                </span>

            </div>


            <div class="textbox">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <input type="text" id="fullnamebox" name="fullname" placeholder="Enter Full Name (Required)"><br>
            </div>

            <div class="textbox">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="text" id="emailbox" name="email" placeholder="Enter Your Email Address (Required)"><br>
            </div>

            <div class="textbox">
                <i class="fa fa-university" aria-hidden="true"></i>
                <input type="text" id="deptbox" name="department" placeholder="Enter Your Department"><br>
            </div>

            <div class="textbox">
                <i class="fa fa-key" aria-hidden="true"></i>
                <input type="password" id="passwordbox" name="password" placeholder="Enter Your Password"><br>
            </div>

            <div class="textbox">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <input type="password" id="repasswordbox" name="repassword" placeholder="Re-enter Your Password"><br>
            </div>

            <input type="submit" name="submit" id="regbutton" class="btn"  style="BorderColor:White ; ForeColor:White ;" value="Register Now">
    </form>
        </div>
        <div class="message-box">
          <p ID="reglabel1" Text="Successfully done! Please wait for the confirmation." style="color:Yellow ; ForeColor:Yellow ;Visible:False ;"></p>
        </div>

</body>
<?php


//require('C:\xampp\htdocs\MyProject\resources\views\connection_setup.blade.php');


	/*$uni=$_REQUEST['University'];
	$ima=$_REQUEST['Image'];
	$Ema=$_REQUEST['Email'];
	$Nam=$_REQUEST['Name'];


	$sql="INSERT INTO university (university_name)
	VALUES('$uni')";
	if ($link->query($sql) === TRUE) {
	  //  echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}
$sql=	"INSERT INTO images (Image)
	VALUES ('$ima')";
	if ($link->query($sql) === TRUE) {
	   // echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $link->error;
	}
$sql=	"INSERT INTO products (user_name,email)
VALUES('$Nam','$Ema')";

if ($link->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
$sql = "SELECT * FROM products ";
$temp=0;
if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
					if ($row['user_name'] == $Nam) {
					$temp=$row['user_id'];
					}
            }
        }
        mysqli_free_result($result);
    }

$sql="INSERT INTO submission VALUES ('$temp',1,1,1),('$temp',2,2,0),('$temp',3,3,0),('$temp',4,4,0),('$temp',5,5,0),('$temp',1,6,1),
('$temp',2,7,0),('$temp',1,8,1)";


if ($link->query($sql) === TRUE) {
		echo"<div class=\"bg-light14\">   New record created successfully</div>";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
	}
 */?>

</html>
