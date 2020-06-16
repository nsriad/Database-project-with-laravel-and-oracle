<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="userstyle.css" type="text/css">
    <link rel="stylesheet" href="usersettings.css" type="text/css">
    <link rel="stylesheet" href="table.css" type="text/css">

    <title>All Users Settings</title>
</head>

<body style="background-color:#bdc7bf ;">
    <!--navbar start-->
    <div class="sticky">
        <div class="navbar">

            <a href="/homepage_admin">
                <i class="fa fa-home fa-lg fa-fw"></i>Home
            </a>

            <div class="dropdown">
                <button class="dropbtn">
                    <i class="fa fa-spin fa-cog fa-lg fa-fw"></i>View/Modify
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="/all_user_settings">All Users</a>
                    <a href="/coursesettings">Courses</a>
                    <a href="/problem_settings">Question Bank</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">
                    <i class="fa fa-trophy fa-lg fa-fw"></i>Contest
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="">Setup Contest</a>
                    <a href="">View/Modify Contest</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">
                    <i class="fa fa-envelope-o fa-lg fa-fw"></i>Inbox
                </button>
            </div>

            <a href="#"><i class="fa fa-bell fa-lg fa-fw"></i>Notification</a>

            <div class="dropdown" style="float:right ;min-width:180px ;">
                <button class="dropbtn" style="min-width:180px ;">
                    <i class="fa fa-user fa-lg fa-fw"></i>Profile
                </button>
                <div class="dropdown-content">
                    <a href="#">View</a>
                    <a href="#">Settings</a>
                    <a href="/">Logout</a>
                </div>
            </div>

        </div>
    </div>


    <div class="page">
        <div class="left-sidebaruser1">
            <div class="left-sidebar1">
           <div style="margin-left:20% ; margin-top:30% ;">

              <a href="/registration">
                 <Button Class="button2 button" style="Width:180px ;">
                      Add User
                 </Button>
              </a>
                <div class="dropdown1">

                  <form action="{{url('/show_all_user')}}" method="post">
                        {{csrf_field()}}

                    <input type="submit" name="viewall" Class="button2 button" value="View" style="Width:180px ;">
                        <span><i class="fa fa-caret-right fa-lg fa-fw"></i></span>
                    </input>


                    <div class="dropdown1-content">
                      <input type="submit" name="adminsonly" class="button2 button"  value="Admins Only" style="width:180PX ;"><br>
                      <input type="submit" name="teachersonly" class="button2 button" value="Teachers Only" style="width:180PX ;"><br>
                      <input type="submit" name="studentsonly" class="button2 button"  value="Students Only" style="width:180PX ;"><br>
                    </div>
                </div>
                   <br />
               </div>
      </div>
        </div>
    <div class="content-area1">

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

      $sql = "SELECT * FROM users order by type;";
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

    </div>
    <div class="right-sidebar1">
        <div style="margin-left:10% ; margin-top:5% ;">

                <h2 style="font-family:Georgia;">
                    <p></p>
                </h2>



                <div class="textbox">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <input type="number" id="userid" name="userid" placeholder="Enter User Id"><br>
                </div>

                <div class="textbox">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <input type="text" id="fullnamebox" name="fullname" placeholder="Enter New Name"><br>
                </div>

                <div class="textbox">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="text" id="emailbox" name="email" placeholder="Enter New Email"><br>
                </div>

                <div class="textbox">
                    <i class="fa fa-university" aria-hidden="true"></i>
                    <input type="text" id="deptbox" name="department" placeholder="Enter New Department"><br>
                </div>

                <div style="margin-left:15% ;">
                    <input type="submit" name="updateconfirm" class="button2 button" value="Update Now" style="width:180PX ;"><br>
                    <input type="submit" name="removeconfirm" class="button2 button" value="Remove Now" style="width:180PX ;"><br>
                </div>
              </form>

        </div>
    </div>
    </div>
    <footer style="text-align:center ;"><br />@All rights reserved by-Nazmus Shakib Riad</footer>
</body>
</html>
