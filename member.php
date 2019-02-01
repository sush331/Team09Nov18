
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
        	</ul>
      	</div>
	<div class="container">
        <?php
        // check session variable
        if (isset($_SESSION['login_user']))
        {
            //make the database connection
            $conn  = db_connect();
            $user_check = $_SESSION['login_user'];

            //make a query to check if a valid user
            $ses_sql = "select name from user where email='$user_check'";
            $result = $conn -> query($ses_sql);
            if ($result -> num_rows == 1) {
                $name = $_SESSION['username'];
                echo "<p>Welcome <b>$username</b></p>";
                echo "<p><a href=\"logout.php\">Logout</a></p>";
            }
            else {
                echo "<p>Something is wrong.</p>";
                echo "<p><a href=\"login.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">Login</a></p>";
            }
        }
        else
        {
        	echo "<p>Welcome<p>";
            echo "<p>You are  logged in.</p>";
            echo "<p><a href=\"logout.php\" id=\"4\" 
			onClick=\"nav_item_selected(4)\">Logout</a></p>";
        }
        ?>
    </div>
        <div id="footer">
      		Copyright &copy; The Education Bridge 2018
    	</div>
  </div>
</body>
</html>