<?php
session_start();
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="css/login_style.css">


</head>

<body>
<form id="loginform" method="POST" action="js/index.js" enctype="application/x-www-form-urlencoded">
    <div class="form" >

        <ul class="tab-group">
            <li class="tab active"><a href="#signup">Sign Up</a></li>
            <li class="tab"><a href="#login">Log In</a></li>
        </ul>

        <div class="tab-content">
            <div id="signup">
                <h1>Sign Up for Free</h1>

                <form action="/" method="post">

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                First Name<span class="req">*</span>
                            </label>
                            <input type="text" name="txtfirstname" id="txtfirstname" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Last Name<span class="req">*</span>
                            </label>
                            <input type="text" name="txtLastname" id="txtLastname" required autocomplete="off"/>
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" name="txtemail"  id="txtemail" required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Set A Password<span class="req">*</span>
                        </label>
                        <input type="password" id="txtpassword" name="txtpassword" required autocomplete="off"/>
                    </div>

                    <button type="submit" id="savelogindetails" class="button button-block"/>Get Started</button>

                </form>

            </div>

            <div id="login">
                <h1>Welcome Back!</h1>

                <form id="login" method="POST" action="login.php" enctype="application/x-www-form-urlencoded">

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" name="txtlogemial" id="txtlogemial" required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" name="txtlogpassword" id="txtlogpassword" required autocomplete="off"/>
                    </div>

                    <p class="forgot"><a href="#">Forgot Password?</a></p>

                    <button id="log" type="submit" name="submit" class="button button-block"/>Log In</button>

                </form>

                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src="js/jquery-3.2.1.min.js"></script>
                <script  src="js/index.js"></script>

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->
</form>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script  src="js/index.js"></script>

</body>
</html>
