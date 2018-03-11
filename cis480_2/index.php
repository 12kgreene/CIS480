<?php 

include("connect.php");
include("functions.php");

$error = "";

if(isset($_POST['submit']))
{

$user = $_POST['user'];
$pwd = $_POST['pwd'];

if(user_exists($user,$connection))
{
$result = mysqli_query($connection, "SELECT Password FROM users WHERE Username='$user'");
$retrievepassword = mysqli_fetch_assoc($result);

if($pwd !== $retrievepassword['pwd'])
{
$error = "Password is incorrect";
}
else
{
$_SESSION['user'] = $user;
header("location: loggedin.php");
}
}
else
{
$error = "You are successfully signed in";
}
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>CIS 480</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="csstemplate.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><img src = "ecpi_innsbrook.png" alt = "ECPI Logo"></span></a></h1>
		</div>
	</div>
		        		  		  		  <h2></h2>              
<div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
    
		  <h2></h2>
        </div>
      </div>
      <div id="menubar">
        <form method="post" action="#" id="login_form">						<input type = "text" name="username" placeholder="Username" id = "username"><br>						<input type = "password" name="password" placeholder="Password" id = "password"><br>			<br><button type="button">Log in! </button>			<a href="register.php" >Register</a>		</form> 
		<ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="project.html">Current Projects</a></li>
          <li ><a href="about.html">Help/About</a></li>
          
        
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
      
        <h3>Resources</h3>
        <ul>
          <li><a href="https://inns.ecpi.net/" target="blank">Innsbrook ECPI</a></li>
          <li><a href="https://discover.ecpi.edu/tech/programs_electronicsengineering.php"target="blank">ECPI EET</a></li>
          <li><a href="https://3dprint.com" target="blank">3dprint.com</a></li>
          <li><a href="http://www.livescience.com/topics/3d-printing" target="blank">Live Science</a></li>
		  <li><a href="http://www.3ders.org/" target="blank" >3ders.org</a></li>
		  
		
		
		
		</ul>
        <h3>Search</h3>

        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="search.png" alt="Search" title="Search" />
          </p>
        </form>
    </div>
      <div id="content">
        <!-- insert the page content here -->
<h1>Our Lab</h1>

		<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="lab1.JPG" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="lab2.JPG" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="lab3.JPG" style="width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 8</div>
  <img src="lab4.JPG" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 8</div>
  <img src="lab5.JPG" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 8</div>
  <img src="lab6.JPG" style="width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 8</div>
  <img src="lab7.JPG" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 8</div>
  <img src="lab8.JPG" style="width:100%">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
</div>
</div>
		<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
}
		</script>
		
		
		<h1>New In 3D Prinitng</h1>
		
		<p>Researchers from the Lawrence Livermore National Laboratory (LLNL) have successfully 3D printed aerospace-grade carbon fiber composites, becoming the first research lab to do so. Described as the �ultimate material,� carbon fiber composites open up possibilities for the creation of lightweight, stronger-than-steel parts...</p>
		<p> View the rest of the artcle <a href="http://www.3ders.org/articles/20170301-llnl-researchers-3d-print-high-performance-carbon-fiber-parts-using-computational-models.html" target="blank">here.</a>
      </p>
	  
	  <p>Art just made a giant leap into the final frontier.
		
		On Friday (Feb. 10), a 3D printer aboard the International Space Station (ISS) created a sculpture that represents human laughter, as part of a project called #Laugh...</p>
		<p> View the rest of the artcle <a href="http://www.3ders.org/articles/20170301-llnl-researchers-3d-print-high-performance-carbon-fiber-parts-using-computational-models.html" target="blank">here.</a>
      </p>
	  
	  <p>From above, the newest house in the Russian town of Stupino resembles the symbol often used on weather maps to denote the presence of a hurricane. It�s a fitting shape, as the house was constructed at hurricane speed. The product of a collaboration between Apis Cor and property development company PIK, the 38-square-meter 3D printed house took 24 hours to construct onsite using Apis Cor�s giant mobile 3D printer.</p>
	  <p> View the rest of the artcle <a href="https://3dprint.com/166389/apis-cor-3d-printed-house-russia/" target="blank">here.</a>

    </div>
    </div>
  </div>
</body>
</html>
