
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<title>Login...</title>
<link rel="stylesheet" href="login.css" type="text/css">
<style type="text/css">
    #form1 {
        width: 277px;
        height: 35px;
    }
</style>
</head>
<body>

    <div class="login-box">
        <h1>Login here to access</h1>

        <div class="custom">
            <span style="width:auto ;float:left ;"><i class="fa fa-id-card" aria-hidden="true"></i></span>

        <form action="{{url('/login_code')}}" method="post">
              {{csrf_field()}}
            <span class="sel" style="height:inherit;float:left; top: 0px; left: 15px;">
                <select ID="userdropdown" name="selected" style="Height:30px; Width:252px;" >
                    <option Value="0">-User Type-</option>
                    <option Value="admin">Admin</option>
                    <option Value="teacher">Teacher</option>
                    <option Value="student">Student</option>
                </select>
            </span>

        </div>

        <div class="textbox">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <input type="text" id="userbox" name="username" placeholder="Username or Email"><br>
        </div>

        <div class="textbox">
            <i class="fa fa-key" aria-hidden="true"></i>
            <input type="password" name="password" ID="passwordbox" placeholder="Password"><br>
        </div>
        <input type="submit" id="loginbutton" name="submit" class="btn"   value="Login">
      </form>
        <div>
            <input type="checkbox" id="rememberme"> Remember me?<br>
        </div>

        <div>
            <a href="#" style="float:right ;">
                <font size="1"><i>*Forgot password?Click here</i></font>
            </a>
        </div><br />

        <p>
            Not yet registered?Then
            <font><i><b><a href="\registration" ID="HyperLink1" >Sign Up</a></b></i></font>
            here.
        </p>
    </div>
    <div class="message-box">
        <p ID="Label1" Text="Incorrect Username Or Password" style="color:Yellow ; ForeColor:Yellow ;Visible:False ;"></p>
    </div>

</body>
</html>
