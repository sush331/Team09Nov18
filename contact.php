<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TEB-Contact</title>
<link rel="stylesheet" href="style/style.css"/>
<script type="text/javascript" src="script/form.js"></script>
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
		  		<li><a href="contact.php">Contact</a></li>
        	</ul>
      	</div>
		<div id="content3">
			<h1 align="center">We’d love to help you fulfil<br>
								your education and migration goals</h1>
<p>If you have any questions, feedback or to organise your free consultation,
simply fill in the form below and one of our friendly team will respond to your
enquiry as soon as possible.</p>
		    <form>

	          <div class="form-group">
	          	<form action="get_response.php" method="POST" id="contact-form" onsubmit="return validateForm()>
	            <label for="contact-name" style="display: block;padding: 5px;">Name</label>
	            <input type="text" class="form-control" id="contact-name" name="name"       placeholder="Enter your name.." onkeyup='validateName()' style="border-radius: 5px;padding: 12px 12px;width: 300px;">
	            <span class='error-message' id='name-error'></span>
	          </div>

	          <div class="form-group">
	            <label for="contact-phone"style="display: block;padding: 5px;">Phone Number</label>
	            <input type="tel" class="form-control" id="contact-phone" name="phone" placeholder="Ex: 1231231234" onkeyup='validatePhone()'style="border-radius: 5px;padding: 12px 12px;width: 300px;">
	            <span class='error-message' id='phone-error'></span>
	          </div>

	          <div class="form-group">
	            <label for="contact-email" style="display: block;padding: 5px;">Email address</label>
	            <input type="email" class="form-control" id="contact-email" name="email" placeholder="Enter Email" onkeyup='validateEmail()' style="border-radius: 5px;padding: 12px 12px;width: 300px;">
	            <span class='error-message' id='email-error' ></span>
	          </div>   

	          <div class="form-group">
	            <label for='contactMessage' style="display: block;padding: 5px;">Your Message</label>
	            <textarea class="form-control" rows="5" id='contact-message'  name='message'  placeholder="Enter a brief message" onkeyup='validateMessage()'onclick="return submitForm()"> style="border-radius: 5px;padding: 12px 12px;height: 100px;width: 300px;"></textarea>
	            <span class='error-message' id='message-error'></span>
	            </form>
	          </div>

	        <button onclick='return validateForm()' class="btn btn-default" style="background-color: green;border-radius:6px;color: white;padding: 16px 20px;text-decoration: none;margin: 4px 4px;cursor: pointer; ">Submit</button>
	        <span class='error-message' id='submit-error'></span>
	      </form>
	     </div>
		<div id="footer">
      		Copyright &copy; The Education Bridge 2018
    	</div>
	</div>
	
</body>
</html>
