<?php 

include("connect.php");

$error = "";

if(isset($_POST['submit']))
{

$first = $_POST['first'];
$last = $_POST['last'];
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$passwordConfirm = $_POST['passwordConfirm'];

if(strlen($first) < 3)
{
$error = "First name is too short";
}
else if(strlen($last) < 3)
{
$error = "Last name is too short";
}
else if(strlen($pwd) < 8)
{
$error = "Password must be greater than 8 characters";
}
else if($pwd !== $passwordConfirm)
{
$error = "Password does not match";
}
else
{
					$insertQuery = "INSERT INTO users(Username, First, Last, Password) VALUES ('$user','$first','$last','$pwd')";
					if(mysqli_query($connection, $insertQuery));
					
	$error = "You are successfully registered";

}
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Register</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="csstemplate.css" />
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
         
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><img src = "ecpi_innsbrook.png" alt = "ECPI Logo"></span></a></h1>
		  
		  <h2></h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="project.php">Current Projects</a></li>
          <li ><a href="about.html">Help/About</a></li>
		
          
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
      
       	
		</ul>
        <h3>Search</h3>

        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="search.png" alt="Search" title="Search" />
          </p>
        </form><br/>
        <div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Register</h1>
		<form method="POST" action="register.php">
<table style="width:100%">					
			<tr>
			<th><b>I am a(n):</b></th>
			<th><select name="position">
				<option value="select">select</option>	
				<option value="instructor">Instructor</option>	
				<option value="student">Student</option>		
				<option value="alumni">Alumni</option>			
				<option value="other">Other</option>		
				</select>
			</th>			
			</tr>
			<tr>
				<th><b>First Name:</b></th>
				<th><input type = "text" name="first" placeholder="FirstName" id = "FirstName"></th>
			</tr>
			<tr>
				<th><b>Last Name:</b></th>
				<th><input type = "text" name="last" placeholder="LastName" id = "LastName"></th>
			</tr>
			<tr>
				<th><b>Username:</b></th>
				<th><input type = "text" name="user" placeholder="Username" id = "Username"></th>
			</tr>			
			<tr>				
				<th><b>Password:</b></th>
				<th><input type = "password" name="pwd" placeholder="Password" id = "password"></th>
			<tr>
				<th><b>Confirm Password:</b></th>	
				<th><input type = "password" name="passwordConfirm" placeholder="Confirm Password" id = "passwordConfirm"></th>		
			</tr>			
			<tr>			
				<th><div class="g-recaptcha" data-sitekey="6Ld-iRkUAAAAAB56mUskbT0uOmav7L1HaY_91oL4"></div></th>	
			</tr>			<tr>
				<th><button type="submit" name="submit">Submit</button></th>
			</tr>			
			</table>
		</form>
    </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p>
      <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
  </div>
</body>
</html>