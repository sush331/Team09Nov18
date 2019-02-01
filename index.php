<?php
define("MYSQLUSER","jc505984");
define("MYSQLPASS","Password1");
define("HOSTNAME","localhost");
define("MYSQLDB","_team09nov18");

	mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB) or die("couldn't connect");
	$output='';
	if (isset($_POST['search'])) {
		$search =$_POST['search'];
		$search =preg_replace("#[^0-9a-z]#i","",$search);
		$query = mysqli_query("SELECT * FROM file WHERE subjects LIKE '%$search
			%' OR courses LIKE '%$search%' OR menus LIKE'%$search%'") or die("couldnot search");
		$count=mysqli_num_rows($query);
		if($count == 0){
			$output="no results";
		}else{
			while ($row=mysqli_fetch_array($query)) {
				$sub=$row['subjects'];
				$cour=$row['courses'];
				$m=$row['menus'];

				$output .='<div>'.$sub.''.$cour.''.$m.'</div>';
			}
		}

	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TEB-Home</title>
<link rel="stylesheet" href="style/style.css"/>
</head>

<body>
	<div id="main">
		<div id="header">
			<div id="logo">
				<a href="index.php"><img src="pictures/logo.png" alt="logo" width="140" height="120"></a>
			</div>
			<div id="logo-text">
						<h1><a href="index.php">The Education Bridge</a></h1>
			</div>
			
		</div>
		<div id="navbar">
        	<ul id="nav">
          		<li><a href="index.php">Home</a></li>
				<li><a href="courses.html">Courses</a></li>
				<li>
					<div class="dropdown">
  				<button class="dropbtn"><a href="language.html">Language</a></button>
  					<div class="dropdown-content">
   					 	<a href="ielts.html">IELTS</a>
    					<a href="pte.php">PTE</a>
  					</div>
				</div>
				</li>
				<li>
					<div class="dropdown">
  				<button class="dropbtn"><a href="counseling.html">Counseling</a></button>
  					<div class="dropdown-content1">
   					 	<a href="student.html">Student</a>
    					<a href="migration.html">Migration</a>
  					</div>

				</div>

				</li>
		  		<li><a href="contact.html">Contact</a></li>
		  		<div class="searchindex">
        		<form action="index.php">
        			<input type="text" name="search" placeholder="search your result" style=" background-position: 9px 10px;background-repeat: no-repeat;padding-left: 50px; height: 30px;border-radius: 5px;">
        			<input type="submit" value=">>" style="height: 30px;border-radius: 5px;">
        		</form>
        		<?php print("$output");?>
        	</div>
        	</ul>
        	<div class="register">
				<a href="signin.php">Sign-In</a>
				<a href="signup.php">Sign-Up</a>
			</div>
        	

      	</div>

		<div id="content1">
			<h2>How Can We Be Help To You</h2>
			<p>Find out more about our international student placement services,<br>
				scholarship, visa guidance and education cousnselling services.</p>
			<table align="center" width="75%">
  				<tr>
    				<th><img src="pictures/open-book-icon-16376.png" height=100px width=100px></th>
    				<th><img src="pictures/language.jpg" height=100px width=100px></th> 
    				<th><img src="pictures/counseling.png" height=100px width=100px></th>
  				</tr>
  				<tr>
					<td><h3>Courses</h3></td>
    				<td><h3>Language</h3></td>
    				<td><h3>Counseling</h3></td>
  				</tr>
  				<tr>
    				<td style="text-align: center">Browse top universities, schools and colleges globally. Browse our fields of study to find your perfect course and institution today.</td>
    				<td>Need to practice or want to know you level on english or want to be learn from the best </td>
    				<td>Whether you’re looking to study abroad or planning for a career overseas. See how we can help you study, work and live in leading destinations around the world.</td>
  				</tr>
  				<tr>
    				<td><a href="courses.html"><button type="button">Find Out More</button></a></td>
    				<td><a href="language.html"><button type="button">Find Out More</button></a></td>
    				<td><a href="counseling.html"><button type="button">Find Out More</button></a></td>
  				</tr>
			</table>
		</div>
		<div id="content2">
			<h2>Who We Are</h2>
			<p>TEB is an award winning team of registered migration agents and certified education consultants (PIER) that have helped over 18,000 students successfully study with top universities and education providers across the world. Our multilingual team of consultants speak over 21 languages and have been a trusted representative of over 300 top universities and schools around the world. With our successful student placement record, free education counselling, application submissions as well as visa advice, we have been able to maintain a client satisfaction rate of over 99%.</p>
			<a href="contact.html"><button type="button">Contact Us</button></a>
		</div>
		<br>
		<div id="footer">
      		Copyright &copy; The Education Bridge 2018
    	</div>
	</div>
	
</body>
</html>
