<!DOCTYPE html>

<?php

//if(isset($_POST['username'])){
  //  $uname=$_POST['username'];

 ?>

<html>
<head id="Head3">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Welcome to Teacher Panel</title>

</head>
<body>
    <div>
        <img src="cover.png" style="width:100% ;" />
    </div>

    <form id="form3">
    <!-- navigation bar-->

    <div class="navbar">


        <a href="/homepage_teacher">
          <i class="fa fa-home fa-lg fa-fw"></i>Home
        </a>

        <div class="dropdown">
            <a href="/problem_settings"><i class="fa fa-quora fa-lg fa-fw"></i>Problem Settings</a>
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

    <div class="page">
			<div class="left-sidebar">

			</div>
			<div class="content-area">
		       <h1>
                   <marquee behavior="alternate" loop="500" direction="scroll" scrolldelay="1">
                       Welcome !
                   </marquee>
		       </h1>
			</div>
			<div class="right-sidebar">

			</div>
			<div class="footer">

			</div>
    </div>

    <footer style="text-align:center ;" ><br />@All rights reserved by-Nazmus Shakib Riad</footer>
    </form>

</body>
</html>
