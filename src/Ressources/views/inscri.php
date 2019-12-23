
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../../../web/inscri/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../../../web/login/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../../../web/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="../../../web/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../../web/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../web/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../web/login/vendor/select2/select2.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="../../../web/inscri/css/style.css">


   
</head>

<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->


            <div class="container">
                <div class="signup-content"  style="background-image: url('../../../web/login/images/img9.jpg')">
                    <form method="POST" id="signup-form" class="signup-form  validate-form" action="../control/inscriCtr.php?action=add">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group validate-input" data-validate = "Enter First Name">
                            <input type="text" class="form-input " name="First_name" id="name" placeholder="Your First Name"/>
                        </div>
                        <div class="form-group validate-input" data-validate = "Enter Last Name">
                            <input type="text" class="form-input" name="Last_name" id="name" placeholder="Your Last Name"/>
                        </div>
                        <div class="form-group validate-input" data-validate = "Enter Your Email">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group validate-input" data-validate = "Enter password">
                            <input type="text" class="form-input"  name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group validate-input" data-validate = "Enter re-password">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group validate-input">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
	<script src="../../../web/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../web/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../web/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../../../web/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../web/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../web/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../../../web/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../../../web/login/vendor/countdowntime/countdowntime.js"></script>



    <script src="../../../web/inscri/vendor/jquery/jquery.min.js"></script>
    <script src="../../../web/login/js/mainRegister.js"></script>
    <script src="../../../web/inscri/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>