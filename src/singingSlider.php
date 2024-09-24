<!DOCTYPE html>
<html>
<head>
  <title>Singing Catogory</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/vote.css">
<link rel="stylesheet" href="css/home_styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <a class="active" href="singingSlider.php">Singing</a>
    <a href="dancingSlider.php">Dancing</a>
    <a href="about_us.php">About Us</a>
    <a href="#Buy Tickets">Buy Tickets</a>
    <a href="#Gallery">Gallery</a>
    <a href="#Help">Help</a>
    <input type="text" placeholder="Search..">
</div>
<!--navigation bar (end)-->
   
   

  <form action='dbop.php' method="post">

    <div class="slideshow-container">
      

      <div class="mySlides fade">
        <div class="numbertext">1 / 5</div>
        <img src="images/a.jpg" style="width:100%">
        <div class="text">No 01
          
        </div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <img src="images/b.jpg" style="width:100%">
        <div class="text">No 02
        
        </div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="images/c.jpg" style="width:100%">
        <div class="text">No 03
        
        </div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <img src="images/d.jpg" style="width:100%">
        <div class="text">No 04
        
        </div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="images/e.jpg" style="width:100%">
        <div class="text">No 05
       
        </div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
      <span class="dot" onclick="currentSlide(5)"></span> 
    </div>

    <div>
    <center><input type="submit" value="VOTE" class="button"></center>
        
      </div>

  <input type='hidden' name='vote' id='ap'>



  </form>

  <script>
  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";

    document.getElementById('ap').value=slideIndex;
  }

  </script>
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


