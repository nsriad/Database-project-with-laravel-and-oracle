<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head >

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="userstyle.css" type="text/css">
    <link rel="stylesheet" href="usersettings.css" type="text/css">

    <title>Problem Settings</title>
</head>

<body style="background-color:#bdc7bf ;">
    <form>

    <!--navbar start-->
<div class="sticky">
    <div class="navbar">


        <a href="/homepage_teacher">
          <i class="fa fa-home fa-lg fa-fw"></i>Home
        </a>

        <div class="dropdown">
            <a href=""><i class="fa fa-quora fa-lg fa-fw"></i>Problem Settings</a>
        </div>

        <div class="dropdown">
            <button class="dropbtn" style="min-width:150px ;">
                <i class="fa fa-eye fa-lg fa-fw"></i>View
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="">Teachers Info</a>
                <a href="">Student Info</a>
                <a href="">Contest Info</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn" style="min-width:150px ;"><i class="fa fa-envelope-o fa-lg fa-fw"></i>Inbox</button>
        </div>

        <div style="min-width:180px ;">
            <a href=""><i class="fa fa-phone fa-lg fa-fw"></i>Contact</a>
        </div>

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
                    <input type="radio" id="delete_ques" name="delete_ques" class="button2 button" onClick=""  value="Remove Question" style="width:180PX ;"><br>
                    <input type="radio" id="update_ques" name="update_ques" class="button2 button" onClick=""  value="Update Question" style="width:180PX ;"><br>
                    <input type="radio" id="view_ques" name="view_ques" class="button2 button" onClick=""  value="View" style="width:180PX ;"><br>
               </div>

			       </div>
        </div>
		<div class="content-area1">

		</div>
		<div class="right-sidebar1">
		    <div style="margin-left:10% ; margin-top:0% ;">

                <h2 style="font-family:Georgia;">
                    <p></p>
                </h2>
                <form action="{{url('/probsettings_code')}}" method="post">
                      {{csrf_field()}}
                <span class="sel" style="height:inherit;float:left; top: 0px; bottom: : 5px;">
                    <select ID="userdropdown" name="courseselected" style="Height:30px; Width:252px;" >
                        <option Value="0">-Select Course-</option>
                        <option Value="cse2105">Data Structure</option>
                        <option Value="cse3100">Web Programming</option>
                        <option Value="cse1201">C Programming</option>
                        <option Value="cse3109">Database System</option>
                    </select>
                </span>

                <span class="sel" style="height:inherit;float:left; top: 5px; left: 15px;">
                    <select ID="userdropdown" name="levelselected" style="Height:30px; Width:252px;" >
                        <option Value="0">-Select Level-</option>
                        <option Value="1">1</option>
                        <option Value="2">2</option>
                        <option Value="3">3</option>
                        <option Value="4">4</option>
                        <option Value="5">5</option>
                    </select>
                </span>

                <div class="textbox">
                    <i class="fa fa-quora" aria-hidden="true"></i>
                    <input type="text" id="ques" name="ques" placeholder="Enter Question"><br>
                </div>

                <div class="textbox">
                    <i class="fa fa-circle" aria-hidden="true"></i>
                    <input type="text" id="op1" name="op1" placeholder="Enter option 1"><br>
                </div>

                <div class="textbox">
                    <i class="fa fa-circle" aria-hidden="true"></i>
                    <input type="text" id="op2" name="op2" placeholder="Enter option 2"><br>
                </div>

                <div class="textbox">
                    <i class="fa fa-circle" aria-hidden="true"></i>
                    <input type="text" id="op3" name="op3" placeholder="Enter option 3"><br>
                </div>

                <div class="textbox">
                    <i class="fa fa-circle" aria-hidden="true"></i>
                    <input type="text" id="op4" name="op4" placeholder="Enter option 4"><br>
                </div>

                <div class="textbox">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <input type="text" id="ans" name="ans" placeholder="Enter Answer"><br>
                </d

                <div class="textbox">
                    <i class="fa fa-calculator" aria-hidden="true"></i>
                    <input type="text" id="mark" name="mark" placeholder="Enter Mark"><br>
                </div>
                <input type="submit" id="add_ques" name="add_ques" class="button2 button"  value="Done" style="width:180PX ;"><br>
              </form>
		    </div>
		</div>
    </div>
    <footer style="text-align:center ;"><br />@All rights reserved by-Nazmus Shakib Riad</footer>
    </form>
</body>
</html>
