    <!DOCTYPE html>

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
