<!DOCTYPE html>
<html>
<head>
<title>Love Connection</title>
    <link rel="icon" type="image/png" href="images/icon.png" type="text/css"/>
<link rel="stylesheet" href="cssphp/home-style.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="cssphp/font-awesome.min.css" type="text/css"/>
<body>


<div id="nav">
            <a href="#"><img src="images/logo1.png" id="logo"></img></a>
        
        
<ul class="main-nav">
  <li><a href="home.php">Home</a></li>
  <li><a href="login.php">Profile</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="aboutus.php">About Us</a></li>
  <li style="float:right"><a class="active1" href="login.php">Login</a></li>
  <li style="float:right"><a class="active1" href="signup.php">SignUp</a></li>
</ul>
</div>

<div class="container"> 
  
  <!-- Full-width images with caption text -->
  <div class="image-sliderfade fade"> 
    <img src="images/1.png" style="width:100%"> 
    <div class="text">On Love Connection, you’re more than just a photo. You have stories to tell, and passions to share, and things to talk about that are more interesting than the weather. Get noticed for who you are, not what you look like. Because you deserve what dating deserves: better.</div> 
    <div class="button">
<a href="signup.php">Join Now</a>
</div>   
</div> 
  
  
  <div class="image-sliderfade fade"> 
    <img src="images/2.png" style="width:100%"> 
    <div class="text">On Love Connection, you’re more than just a photo. You have stories to tell, and passions to share, and things to talk about that are more interesting than the weather. Get noticed for who you are, not what you look like. Because you deserve what dating deserves: better.</div> 
    <div class="button">
<a href="signup.php">Join Now</a>
</div>  
</div> 
   
  
  <div class="image-sliderfade fade"> 
    <img src="images/3.png" style="width:100%"> 
    <div class="text">On Love Connection, you’re more than just a photo. You have stories to tell, and passions to share, and things to talk about that are more interesting than the weather. Get noticed for who you are, not what you look like. Because you deserve what dating deserves: better.</div> 
    <div class="button">
<a href="signup.php">Join Now</a>
</div>  
</div> 
   
  <div class="image-sliderfade fade"> 
    <img src="images/4.png" style="width:100%"> 
    <div class="text">On Love Connection, you’re more than just a photo. You have stories to tell, and passions to share, and things to talk about that are more interesting than the weather. Get noticed for who you are, not what you look like. Because you deserve what dating deserves: better.</div> 
    <div class="button">
<a href="signup.php">Join Now</a>
</div>  
</div> 
   
  
</div> 
<br> 
  
<!-- The dots/circles -->
<div style="text-align:center"> 
  <span class="dot"></span>  
  <span class="dot"></span>  
  <span class="dot"></span>
  <span class="dot"></span>  
</div> 

 




<br><br><br><div class="footer1">
<footer class="footer-distributed">

        <div class="footer-left">

            <h3>Love<span>Connection</span></h3>

            <p class="footer-links">
                <a href="home.php" title="Home">Home</a>
                ·
                <a href="login.php" title="profile">Profile</a>
                .
                <a href="aboutus.php" title="About Us">About Us</a>
                ·
                <a href="contact.php" title="Contact">Contact</a>
                .
                            </p>


                            
            <p class="footer-company-name">LOVE CONNECTION &copy; 2019</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>701 Avenue d'Anvers</span> Montreal, Quebec</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+1 514 993 1578</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com" title="Connect with us">support@loveconnection.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span>
                Our site give you to find thr true lover acrros the world.It is very easy way and also reliable to find the true lover at home.

               

            </p>

            <div class="footer-icons">

                <a href="https://www.facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com" title="Linked in"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.gmail.com" title="Gmail"><i class="fa fa-google"></i></a>

            </div>

        </div>
        <div class="main-footer">
            <p>Copyright &copy; 2019 Love Connection</p>
        </div>

    </footer>
    <script>
    var slideIndex = 0; 
showSlides(); // call showslide method 
   
function showSlides() 
{ 
    var i; 
  
    // get the array of divs' with classname image-sliderfade 
    var slides = document.getElementsByClassName("image-sliderfade");  
      
    // get the array of divs' with classname dot 
    var dots = document.getElementsByClassName("dot");  
  
    for (i = 0; i < slides.length; i++) { 
        // initially set the display to  
        // none for every image. 
        slides[i].style.display = "none";  
    } 
   
     // increase by 1, Global variable 
    slideIndex++;  
   
     // check for boundary 
    if (slideIndex > slides.length)  
    { 
        slideIndex = 1; 
    } 
   
    for (i = 0; i < dots.length; i++) { 
        dots[i].className = dots[i].className. 
                            replace(" active", ""); 
    } 
   
    slides[slideIndex - 1].style.display = "block"; 
    dots[slideIndex - 1].className += " active"; 
  
    // Change image every 2 seconds 
    setTimeout(showSlides, 3000);  
} 
</script>

</body>
</html>