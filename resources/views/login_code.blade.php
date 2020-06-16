<?php

$host="localhost";
$user="root";
$password="";
$db="quiz_contest";
//$conn = mysqli_connect("localhost", "root", "");
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db,);
//echo "isset($_POST['username'])";
//printf("Riad %d", isset($_POST['username']));
if(isset($_POST['username'])){

    $usertype=$_POST['selected'];
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from users where user_name='".$uname."'AND pass='".$password."'AND type='".$usertype."' limit 1";

    $result=mysqli_query($con,$sql);

    //echo "$usertype" ;

    if(mysqli_num_rows($result)==1){
        //header("Location: login");
        //echo " You Have Successfully Logged in";

        if($usertype=="admin")
        {
          echo "<script>
          alert('Welcome');
          window.location.href='/homepage_admin';
          </script>";
          exit();
        }
        else if($usertype=="teacher")
        {
          echo "<script>
          alert('Welcome');
          window.location.href='/homepage_teacher';
          </script>";
          exit();
        }
        else if($usertype=="student")
        {
          echo "<script>
          alert('Welcome');
          window.location.href='/homepage';
          </script>";
          exit();
        }
        else{
            echo "<script>
            alert('Please select valid user!');
            window.location.href='/';
            </script>";
            exit();
        }

    }
    else{
        echo "<script>
        alert('Incorrect username or password');
        window.location.href='/';
        </script>";
        exit();
    }

}
?>
