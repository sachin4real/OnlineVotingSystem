<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/home_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/registration.css">
    <script src="js/register.js"></script>
<!--00-->
</head>
<style>
  .container {
    padding: 16px;
    margin-top: 35px;
    background-color: white;
    background-image: url(../src/images/Background/enroll-now-registration-membership-concept.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 200;
    font-size: medium;
    border-radius: 25px;
    border-color: grey;
  }
  
    body{
    background-image: url(../src/images/Background/pexels-tbee-82256.jpg);
    background-color: rgb(239, 220, 195);
    background-size: cover;
    background-repeat: no-repeat;
    }  
</style>
<body>
    <!-- header section (start)-->
    <div id="header">
        <div class="logo-part">
            <div class="logo-box">
                <div class="logo-img">
                    <img src="images/LOGO.png" alt="LOGO" width="120" height="120">
                </div>
            </div>
        </div>
        <div class="top-banner">
            <div class="top-banner-fream">
                <div class="banner-image">
                </div>
            </div>
        </div>
        <div class="profile-section">
            <div class="profile icon">
                <a href="#"><img src="images/download.png" alt="download" width="50px" height="50px"></a>
            </div>
        </div>
        <div class="log-in--sign-up-btns">
            <div class="log-in-btn-space">
                <div class="log-in-btn">
                    <a href="login.php" class="button">Login</a>
                </div>
            </div>
            <div class="sign-up-btn-space">
                <div class="sign-up-btn">
                    <a href="Registration.php" class="button">SignUp</a>
                </div>
            </div>
        </div>
    </div>

    <!--navigation bar (start)-->
    <div class="topnav">
        <a href="homes.php">Home</a>
        <a href="singingSlider.php">Singing</a>
        <a href="dancingSlider.php">Dancing</a>
        <a href="about_us.php">About Us</a>
        <a href="#Buy Tickets">Buy Tickets</a>
        <a href="#Gallery">Gallery</a>
        <a href="#Help">Help</a>
        <input type="text" placeholder="Search..">
    </div>
    <!--navigation bar (end)-->

    <!--Registration container (start)-->
    <form action="Registrationconfig.php" method="post">
        <div class="container">
            <h1><center>Register</center></h1>
            <p><center>Please fill in this form to create an account.</center></p>
            <hr>
                <label for="user_name"><b>User name</b></label>
                <input type="text-2" placeholder="Enter User name" name="user_name" id="user_name" required>

                <label for="gender"><b>Gender</b></label>
	            <input type="radio" name="gender" value="M" required>Male
	            <input type="radio" name="gender" value="F" required>Female<br/><br/>

                <label for="email"><b>Email</b></label>
                <input type="text-2" placeholder="abc@gmail.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" required>

                <label for="mobile_number"><b>Mobile number</b></label>
                <input type="text-2" placeholder="ex:- 077 123 3456" name="mobile_number" pattern="[0-9]{10}" id="mobile_number" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

                <label for="psw_confirm"><b>Confirm  Password</b></label>
                <input type="password" placeholder="Confirm Password" name="psw_confirm" id="psw_confirm" required>
            <hr>
            <input type="checkbox" name ="chkTerms" onchange='AcceptTerms()'  id ="chkTerms">Accept privacy policy and terms<br><br>

            <center><button type="submit" class="registerbtn">Register</button></center>
            
        </div>
  
        <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
    </form>
    <!--Registration container (end)-->

    <!--footer section (start)-->
    <div id="footer-section">
        <div class="footer-mainfream">
            <div class="sub-containers">
                <div class="sub-container-1">
                    <div class="detail-txt">
                        <span class="text-1">Do You Need Any</span><br>
                        <span class="text-2">SUPPORT</span><br><br>
                        <a href="contact.php" class="button-2">Contact Us</a>
                    </div>
                </div>
                <div class="sub-container-2">
                    <div class="detail-txt-2">
                        <span class="text-1">Connect with Us</span><br>
                    </div>    
                    <div class="social-media-icons">
                        <span class="facebook-icon"><a href="https://www.facebook.com/sliitsgottalent/" class="fa fa-facebook"></a></span>
                        <span class="instergram-icon"><a href="https://www.instagram.com/sliitsgt/?hl=en" class="fa fa-instagram"></a></span>
                        <span class="youtube-icon"><a href="https://www.youtube.com/channel/UCpREiqnNoMLvy1Ifqclb55Q/videos" class="fa fa-youtube"></a></span>
                        <span class="google-plus"><a href="#" class="fa fa-google"></a></span>
                    </div>
                </div>
                <div class="sub-container-3">
                    <div class="detail.txt-3">
                        <span class="text-1">Download SGT App</span><br>
                    </div>
                    <div class="App-Store-icons">
                        <img src="images/playstorenew.png" alt="playstorenew" width="200px" height="150px"><br>
                    </div>
                </div>
            </div>
        </div>
            <div class="copyright">
                <span class="white"><br>
                    <center>Copyright 2022 © SLIIT GOT TALENT. All Rights Reserved.</center>
                </span>
            </div>
    </div>
</body>
</html>