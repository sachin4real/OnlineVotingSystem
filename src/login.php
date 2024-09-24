<!DOCKTYPE html>
<html lang = "en" dir = "ltr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="stylesheet" href="css/home_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <title> Login Form</title>
    
  </head>
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
   
    <div class = "bg -img">
      <div class = "content">
	      <header>Login Form</header>
	      <form action = "validation.php" method="post">
	        <div class = "field">
	          <span class = "fa fa-user"></span>
	          <input type = "text" name = "user_name" required placeholder = "Enter username">
	        </div>
	        <div class = "field space">
	          <span class = "fa fa-lock"></span>
	          <input type= "password"  class = "password" name="psw" required placeholder = "Enter password">
	        </div>
	        <div class = "pass">
	          <a href = "#">Forgot password</a>
	        </div>
	        <div class = "field">
	          <input type = "submit" value= "Login">
	        </div>
          <div class = "login">or login with</div>
          <div class = "link">
	          <div class = "facebook">
	            <i class = "fab fa-facebook-f"><span>Facebook</span></i>
	          </div>
            <div class = "instagram">
	            <i class = "fab fa-instagram-f"><span>instagram</span></i>
	          </div>
          </div>
	        <div class ="signup">Don't have account?
	          <a  href = "Registration.php">Signup Now</a>
	        </div>
	      </form>
      </div> 
	  </div>
    
  </body>
  <footer>
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
  </footer>
</html>


 