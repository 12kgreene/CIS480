<?php 
use src\foundationphp\UploadFile
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Justin Colley</title>
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
			  
		  <h2></h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li ><a href="indexInstructor.php">Home</a></li>
          <li class="selected"><a href="projectInstructor.html">Current Projects</a></li>
          <li ><a href="aboutInstructor.html">Help/About</a></li>
		  <li class="selected><a href="fileUploadFormInstructor.php">Upload Files</a></li>
          
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
        <h1>Upload Files</h1>
		
		<?php 

		$max = 50 * 1024;//maximum allowed size, change to whatever you want in bytes, currently (50KB)
$message = '';
if (isset($_POST['upload'])) {
	$destination =   __DIR__ . '/uploaded/'; //_DIR_ means the directory of the currently running script, replace /uploaded/ with whatever folder you want files to uploaded to
	if ($_FILES['filename']['error']==0){
		 $result = move_uploaded_file($_FILES['filename']['tmp_name'], $destination . $_FILES['filename']['name']);	//move file to the folder specified above
		 if ($result) {
			 $message = $_FILES['filename']['name'] . ' was uploaded successfully.';
		 } else{
			 $message = 'Sorry, there was a problem uploading ' .$_FILES['filename']['name'];
		 }
	}else{
		switch ($_FILES['filename']['error']) {
	
		case 2:
			$message = $_FILES['filename']['name'] . ' is too big to upload.';	//inform user of errors
			break;
		case 4:
			$message = 'No file selected.';
			break;
		default:
			$message = 'Sorry, there was a problem uploading ' .$_FILES['filename']['name'];

			break;
	}
	
	}
}
?>
<!doctype html>
<html lang="en"> <!-- basic form to upload -->
<head>
    <meta charset="UTF-8">
    <title>File Uploads</title>
    <link href="styles/form.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php 
if ($message) {
    echo "<p>$message</p>";
}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<p>
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max;?>">
<label for="filename">Select File:</label>
<input type="file" name="filename" id="filename">
</p>
<p>
<input type="submit" name="upload" value="Upload File">
</p>
</form>
</body>
</html>
    </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
  </div>
</body>
</html>
