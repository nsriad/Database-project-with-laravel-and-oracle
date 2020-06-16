
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="userstyle.css" type="text/css">
    <link rel="stylesheet" href="usersettings.css" type="text/css">

    <title>Contest Setup</title>
</head>

<body style="background-color:#bdc7bf ;">

    <!--navbar start-->
    <div class="sticky">
        <div class="navbar">

            <a ID="home" href="/homepage_admin">
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
                  <a href="">Question Bank</a>
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

        <!-- navigation bar finish -->

    <div class="page">
        <div class="left-sidebaruser1">
            <div class="left-sidebar1">
              <form action="{{url('/contest_code')}}" method="post">
                    {{csrf_field()}}
      		        <div style="margin-left:20% ; margin-top:30% ;">
                      <!-- 4 button was here-->

                  </div>
			       </div>
        </div>
		<div id="coursecontent" class="content-area1">

@include('show_quiz')

		</div>
		<div class="right-sidebar1">
		    <div style="margin-left:10% ; margin-top:30% ;">

                <h2 style="font-family:Georgia;">

                </h2>


                <div class="textbox">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <input type="number" name="quizno" placeholder="Enter Quiz No" Visible="true"></input>
                </div>

                <div class="textbox">
                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                    <input type="text" ID="coursenamebox" name="coursename" placeholder="Enter Course Id" Visible="true"></input>
                </div>

                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="number"  name="totalques" placeholder="Enter Total Question number" Visible="true"></input>
                </div>

                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="number" name="duration" placeholder="Enter Duration" Visible="true"></input>
                </div>

                <div style="margin-left:15% ;">
                  <input type="submit" name="submit" class="button2 button"  value="Add Now" style="width:180PX ;"><br>
                </div>
              </form>
		    </div>
		</div>
    </div>
    </form>
</body>

<?php

/*if(isset($_REQUEST['viewconfirm']))
{
  echo "<h1 style='margin-top:50%;margin-left:30% ;'>I am  pressed</h1>";
}*/

?>

<footer style="text-align:center ;"><br />@All rights reserved by-Nazmus Shakib Riad</footer>
</html>
