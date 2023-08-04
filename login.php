



<!-- Mirrored from www.instaca.in/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Feb 2021 08:39:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui" />

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="images/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="images/favicon-128.png" sizes="128x128" />

<meta name="application-name" content="&nbsp;" />
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="images/mstile-144x144.html" />
<meta name="msapplication-square70x70logo" content="images/mstile-70x70.html" />
<meta name="msapplication-square150x150logo" content="images/mstile-150x150.html" />
<meta name="msapplication-wide310x150logo" content="images/mstile-310x150.html" />
<meta name="msapplication-square310x310logo" content="images/mstile-310x310.html" />

<link href=cssmin/style.min3860.css?v=1 rel="stylesheet" type="text/css" />
<script src="scriptsmin/scripts.min.js"></script>
<style>
 #sEmailaddress_SU::-webkit-input-placeholder{color:#999!important;font-style:italic!important;font-size:13px;}
 #sPhoneNumber_SU::-webkit-input-placeholder{color:#999!important;font-style:italic!important;font-size:13px;}
</style>
<!-- PAGE CONTENT -->
<div id="pageloader" style="display:none">
    <img src="images/loader.gif" class="img-responsive" alt="loader" height="128" width="128">
</div>
<div class="login-content">
    <!-- CONTAINER -->
    <div class="login-content-middle-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ls-form-block">
                        <div class="ls-form-logo-block">
                            <a href="index.php"><img src="images/login-logo.png" alt="" /></a>
                        </div>
                        <div class="ls-form-content">
                            <a class="hiddenanchor" id="tosignup"></a>
                            <a class="hiddenanchor" id="tologin"></a>
                            <a class="hiddenanchor" id="tofrg"></a>
                            <a class="hiddenanchor" id="tofrgpassword"></a>
                            <div id="tologinsignup">

                                <div id="login" class="animate ls-form">
                                    <div action="login_action.php" autocomplete="">
                                        <h2>Log In <a href="index.php" class="login-back-to-home"><i class="ion-chevron-left"></i> Home Page</a></h2>


                                        <div class="ls-option" style="display:none;">
                                            <p>or</p>
                                        </div>

                                        <?php if(isset($_SESSION['successreg'])) { ?>
                                            <?php echo "Thank You For Sign UP"; ?>
                                        <?php } ?>


                                        <?php if(isset($_SESSION['err'])) { ?>
                                            <?php echo $_SESSION['err']; ?>
                                        <?php } ?>

                                        

                                        <div class="insta-input-form-block">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                     <form action="login_action.php" method="post">
                                                    <div class="input-box sEmailaddress_SIdiv">
                                                        <label class="formLabel" for="">Email</label>
                                                        <input type="text" class="formInput" name="email" id="sEmailaddress_SI" autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="input-box sPassword_SIdiv">
                                                        <label class="formLabel" for="">Password</label>
                                                        <input type="password" class="formInput" name="password" id="sPassword_SI" autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="input-box last-input">
                                                        <a href="#tofrgpassword" class="ls-forgot-link">Forgot Password?</a>
                                                        <button type="submit" name="login" class="input-btn inst-btn-primary signinclick">Login</button>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>

                                        <p class="change_link">
                                            New to Insta C.A.?
                                            <a href="#tosignup" class="to_register">Sign Up</a>
                                        </p>
                                    </div>
                                </div>



                                <div id="frgtpassword" class="animate ls-form">
                                    <div action="login_action.php" autocomplete="">
                                        <h2>Forgot Password <a href="" class="login-back-to-home"><i class="ion-chevron-left"></i> Home Page</a></h2>
                                        <div class="insta-input-form-block">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="input-box sEmailaddress_FPdiv">
                                                        <label class="formLabel" for="">Email Address</label>
                                                        <input type="text" class="formInput" id="sEmailaddress_FP" name="" autocomplete="off" />
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="input-box last-input">
                                                        <button type="submit" class="input-btn inst-btn-primary Forgotpasswordclick">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="change_link">
                                            <a href="#tofrg" class="to_register"> Cancel </a>
                                        </p>
                                    </div>
                                </div>



                                <div id="register" class="animate ls-form">
                                    <div action="#" autocomplete="">
                                        <h2>Sign up <a href="index.php" class="login-back-to-home"><i class="ion-chevron-left"></i> Home Page</a></h2>
                                        <div class="insta-input-form-block">
                                            <div class="row">
                                            <form action="signup_action.php" method="post">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="input-box sFirstname_SUdiv">
                                                        <label class="formLabel" for="">First Name</label>
                                                        <input type="text" class="formInput" id="sFirstname_SU" name="fname"  autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="input-box sLastname_SUdiv">
                                                        <label class="formLabel" for="">Last Name</label>
                                                        <input type="text" class="formInput"  id="sLastname_SU" name="lname" autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="input-box sEmailaddress_SUdiv">
                                                        <label class="formLabel" for="">Email</label>
                                                        <input type="text" class="formInput" name="email" id="sEmailaddress_SU" placeholder="We promise not to spam your mailbox!"  autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="input-box txtpassword_SUdiv">
                                                        <label class="formLabel" for="">Password</label>
                                                        <input type="password" class="formInput displaypassword" id="txtpassword_SU" name="txtpassword" autocomplete="off" />
                                                        <a href="javascript:;" class="hide-password">Show</a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="input-box sPhoneNumber_SUdiv">
                                                        <label class="formLabel" for="">Phone Number</label>
                                                        <input type="text" class="formInput" name="phonenumber" id="sPhoneNumber_SU" placeholder="We promise we won't disturb you!" autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 passwordenterytext" style="display:none;">
                                                    <p style="margin:0; color:#ea2e2b; font-size:13px;margin-top:-12px;line-height:normal;">Your password must have a minimum length of 7 characters with both numeric and alphabetic characters</p>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="input-box last-input">
                                                        
                                                        <button type="submit" name="insert" class="input-btn inst-btn-primary signupclick">Sign Up</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <p class="change_link">
                                            Already have an account?
                                            <a href="#tologin" class="to_register"> Log in </a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.CONTAINER -->
</div>
<!-- /. PAGE CONTENT -->



