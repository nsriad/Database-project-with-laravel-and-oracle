<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Welcome to Admin Panel</title>

</head>
<body>

    <div>
        <img src="cover.png" style="width:100% ;" />
    </div>
    <form id="form2" runat="server">
    <!-- navigation bar-->

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
                <a href="#">Question Bank</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">
                <i class="fa fa-trophy fa-lg fa-fw"></i>Contest
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="/contest_setup">Setup Contest</a>
                <a href="#">View/Modify Contest</a>
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

    <div class="page">
			<div class="left-sidebar">

			</div>
			<div class="content-area">
		       <h1>
                   <marquee behavior="alternate" loop="500" direction="scroll" scrolldelay="1">
                       Welcome <asp:Label ID="welcome" runat="server" Text="User"></asp:Label> !
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
