<?php
					// Simple PHP Upload Script:  http://coursesweb.net/php-mysql/

					$uploadpath = 'upload/';      // directory to store the uploaded files
					$max_size = 30000;          // maximum file size, in KiloBytes
					$alwidth = 900;            // maximum allowed width, in pixels
					$alheight = 800;           // maximum allowed height, in pixels
					$allowtype = array('wav', 'mp3');        // allowed extensions

					if(isset($_FILES['fileup']) && strlen($_FILES['fileup']['name']) > 1) {
					  $uploadpath = $uploadpath . basename( $_FILES['fileup']['name']);       // gets the file name
					  $sepext = explode('.', strtolower($_FILES['fileup']['name']));
					  $type = end($sepext);       // gets extension
					  list($width, $height) = getimagesize($_FILES['fileup']['tmp_name']);     // gets image width and height
					  $err = '';         // to store the errors

					  // Checks if the file has allowed type, size, width and height (for images)
					  if(!in_array($type, $allowtype)) $err .= 'The file: <b>'. $_FILES['fileup']['name']. '</b> not has the allowed extension type.';
					  if($_FILES['fileup']['size'] > $max_size*1000) $err .= '<br/>Maximum file size must be: '. $max_size. ' KB.';
					  if(isset($width) && isset($height) && ($width >= $alwidth || $height >= $alheight)) $err .= '<br/>The maximum Width x Height must be: '. $alwidth. ' x '. $alheight;

					  // If no errors, upload the image, else, output the errors
					  if($err == '') {
					    if(move_uploaded_file($_FILES['fileup']['tmp_name'], $uploadpath)) { 
					      echo 'File: <b>'. basename( $_FILES['fileup']['name']). '</b> successfully uploaded:';
					      echo '<br/>File type: <b>'. $_FILES['fileup']['type'] .'</b>';
					      echo '<br />Size: <b>'. number_format($_FILES['fileup']['size']/1024, 3, '.', '') .'</b> KB';
					      if(isset($width) && isset($height)) echo '<br/>Image Width x Height: '. $width. ' x '. $height;
					      echo '<br/><br/>Image address: <b>http://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['REQUEST_URI']), '\\\\/').'/'.$uploadpath.'</b>';
					    }
					    else echo '<b>Unable to upload the file.</b>';
					  }
					  else echo $err;
					}
				?> 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TEB-PTE</title>
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
          		<li><a href="index.html">Home</a></li>
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
		<div id="content4">
			<h2>Speaking</h2>
			<p>Total Duration: 30-35 minutes<br>
<ol>
					<li>Read Aloud</li>
					<p>Look at the text below. In 40 seconds, you must read this text aloud as naturally and clearly as possible. You have 40 seconds to read aloud and upload it on the website<br>
					<h5>Pushpins, also known as thumbtacks for bulletin boards, are very popular in corporate offices. They are used to hang daily office documents. Normally, pushpins have a metal point and a top with a cylindrical shape head whereas bulletin boards are made out of cork. It is a very useful tool for employees and managers as they mainly use it to hang memos, calendars, work manuals, and others.</h5></p>
				
					<div style="margin:1em auto; width:333px; text-align:center;">
					 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> 
					  Upload File: <input type="file" name="fileup" /><br/>
					  <input type="submit" name='submit' value="Upload" /> 
					 </form>
					</div>
				<li>Repeat Sentences</li>
					<p>You will hear a sentence. Please repeat the sentence exactly as you hear it. You will hear the sentence only once.</p>
  <a href="audio/repeat_sentences.mp3">Click here to play</a><br/>
					
					<li>Describe image</li>
					<p>Look at graph below. In 25 seconds, please speak into the microphone and describe in detail what the graph is showing. You will have 40 seconds to give your response.</p>
						<img src="pictures/graph.png" height="400px" width="600px">
				<li>Re-tell lecture</li>
					<p>You will hear a lecture. After listening to the lecture, in 10 seconds, please speak into the microphone and retell what you have just heard from the lecture in your own words. You will have 40 seconds to give your response.</p>
				<a href="">click here to play.</a>
				
</ol>
			</p>
			<div id="content3">
			<h2>Writing</h2>
				<p>Total Duration: 40-60 minutes</p>
					<h4>1. Summarize wirtten text</h4>
					<p>Read the passage below and summarize it using one sentence. Type your response in the box at the bottom of the screen. You have 10 minutes to finish this task. Your response will be judged on the quality of your writing and on how well your response presents the key points in the passage.<br>
				<h5>Currently, it appears quite possible that the two most dreaded diseases - cardiovascular disease and cancer - can be treated or prevented with the use of catechins, a group of polyphenol compounds found in tea leaves. This protective agent is found in the Australian gardens that grow tea. Some of the varieties of tea that contain catechins are White Tea, Green Tea, Oolong Tea (semi-fermented), and Black Tea (completely fermented). Black Tea and Oolong Tea are considered to be less effective for treatment because of their degrees of oxidation. <br>

				Amongst other things, tea polyphenols help prevent deposits that narrow the arteries. Prostate cancer in men can be slowed down with a daily dose of Green Tea. Acute hepatic failure, caused by inflammation or oxidative stress, can also be healed with Green Tea.</h5></p>
					<div style="margin:1em auto; width:333px; text-align:center;">
					 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> 
					  Upload File: <input type="file" name="fileup" /><br/>
					  <input type="submit" name='submit' value="Upload" /> 
					 </form>
					</div>
					<h4>2. Write Essay</h4>
					<p>You will have 20 minutes to plan, write and revise an essay about the topic below. Your response will be judged on how well you develop a position, organize your ideas, present supporting details, and control the elements of standard written English. You should write 200-300 words.<br>
				<h5>The claim that animals have rights has been subjected as a matter of debate since the 1970’s. Are zoos helping or hurting our animals? Should zoos be banned?</h5></p>
					<div style="margin:1em auto; width:333px; text-align:center;">
					 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> 
					  Upload File: <input type="file" name="fileup" /><br/>
					  <input type="submit" name='submit' value="Upload" /> 
					 </form>
					</div>
			</div>

			<br>
			<div id="content4">
			<h2>Reading</h2>
			<p>Total Duration: 32-41 minutes<br>
			  <ol>
					<li>Multiple-choice,choose single answer</li>
					<p>Read the text and answer the multiple-choice question by selecting the correct response. Only one response is correct.<br>
					<h5>The original idea for The Statue of Liberty was proposed by Edouard de Laboulaye, President of the French Anti-Slavery Society. A staunch political thinker and an abolitionist, Edouard Laboulaye, who supported the Union in the American Civil War, supposedly suggested the idea to the famous sculptor Frederic Bartholdi. He is supposed to have said that a memorial must be created as a toast to American independence and it must be built up with a common effort from both the countries. Another report suggests that Laboulaye believed that if this gift to the United States were built up on behalf of France, the French would feel encouraged to get over monarchy and call for democracy. In 1870, Bartholdi created the first model and then, even after returning to France, continued to improvise on the design.</h5></p>
				<h5>Which of the following most accurately summarizes the opinion of the author in the text?</h5>
					<form>
				<input type="radio" name="answer" value="0">A. Unlike proposed earlier, The Statue of Liberty wasn't erected by the joint effort of both the countries, rather it was a French gift to the Americans.<br>
				<input type="radio" name="answer" value="1">B. Laboulaye was never of the opinion that the memorial should be erected by utilizing the resources of France only.<br>
				<input type="radio" name="answer" value="2">C. The Statue of Liberty was fully built in the year 1870 by Bartholdi<br>
				<input type="radio" name="answer" value="4">D. The idea to build The Statue of Liberty was originated in America.<br>
					</form>
				<br>
					<li>Multiple-Choice, Choose Multiple Answer</li>
						<p>Read the text and answer the question by selecting all the correct responses. More than one response is correct.<br>
				<h5>Kleptomania is a behavioural and to some extent mental disorder in which the person has an excessive desire to steal something even if the thing is not at all needed by him/her. It doesn’t end here, rather while doing it the person feels relieved and stress-free but later feels a strong sense of fear of getting caught and remorse to have performed the action. Such is the vicious cycle of this socially embarrassing disorder. Episodes of kleptomania happen without any planning and there is no personal gain involved. The articles stolen may later be placed back, or given to someone else. So, it’s not out of need or greed that a person performs kleptomania. It’s a disorder that needs proper medical attention. If someone is facing this compulsive stealing disorder then rather than hiding it and living in the fear of getting caught, it’s better to discuss it with family and seek a solution without being defensive.</h5></p>
				<h5>Which of the following are true statements about kleptomaniacs?</h5>
						<p>
						<input type="checkbox">(A) Kleptomaniacs are victims of a habit that overrules their control over their minds.<br>
						<input type="checkbox">(B) Kleptomaniacs often take up this habit to fulfil the vacuum in their past lives.<br>
  						<input type="checkbox">(C) Kleptomaniacs need medical attention and help at regular intervals or they can relapse.<br>
  						<input type="checkbox">(D) Timely help and counselling may save the person.<br>
  						<input type="checkbox">(E) Kleptomaniacs should be treated in a hush affair or children may get motivated to take up kleptomania.</p>
					<li>Re-Order Paragraphs</li>
						<p>The text boxes in the left panel have been placed in random order. Restore the original order by dragging the text boxes from the left panel to the right panel.<br>
				<h5>
								<table width="75%" align="center">
								<tr>
									<th>SOURCE</th>
									<th>TARGET</th>
								</tr>
								<tr>
									<th>1. As per the record in the Stratford parish Register, the exact words used for the burial are "Will Shakspeare gent".</th>
								</tr>
								<tr>
									<th>2. His wife, Anne Hathaway Shakespeare was buried next to William in 1623.</th>
									<th>Needs these paragraph from left to be in this side in boxes and by the user</th>
								</tr>
								<tr>
									<th>3.The famous writer William Shakespeare is said to have been buried on 25th April, 1616 in Holy Trinity Church, Stratford upon Avon.</th>
								</tr>
								<tr>
									<th>4.The words inscribed in the tombstone were believed to be Shakespeare's only.</th>
								</tr>
								<tr>
									<th>5. The tomb is placed beneath the chancel, which is the space for the clergy of the church.</th>
								</tr>
								</table>
				</h5></p>
					<li>Fill in the Blanks</li>
						<p>In the text below some words are missing. Drag words from the box below to the appropriate place in the text. To undo an answer choice, drag the word back to the box below the text.<br>
				<h5>Long overgrown nails have been _________ of beauty for women for ages. Ladies who had nicely kept, properly filed and shaped nails were __________ in Egypt. Women used to ________ their fingers with artificial nails made up of bones, gold and ivory. With time there have been many affordable and ________ artificial nails up for __________. The United States of America is the biggest market of artificial nails, adhesives and polymers.</h5></p>
							<h5 align="center">lionised, adorn, propensity, grabs, inadvertent, imperishable, symbol, vitriolic</h5>
					<li>Multiple Fill In The Blanks</li>
						<p>Below is a text with blanks. Click on each blank, a list of choice will appear. Select the appropriate answer choice for each blank.<br>
				<h5>The health benefits of the Cinchona tree bark were first <select><option value=""></option><option value="discerned">discerned</option><option value="dignified">dignified</option><option value="desperate">desperate</option><option value="desparage">desparage</option><option value="diphthong">diphthong</option></select> by South American indians who used it to cure the <select><option value=""></option><option value="capricious">capricious</option><option value="poisonous">poisonous</option><option value="pernicious">pernicious</option><option value="felicitous">felicitous</option><option value="ominous">ominous</option></select> disease malaria. When the low temperature in the body caused shivers, the drug was used to cure those shivers by relaxing the muscles. The taste is highly on the bitter side; hence, it is used to make medicine by <select><option value=""></option><option value="summating">summating</option><option value="consummating">consummating</option><option value="deleting">deleting</option><option value="upgrading">upgrading</option><option value="downloading">downloading</option></select> a sweet liquid. This miracle drug made it in the news after the Spaniards went to Peru and then used it in Rome to cure the malaria pandemic in the year 1631. The priests became the prime importers and exporters of this magic potion. In the 17th century, King Charles was <select><option value=""></option><option value="dialted">dialted</option><option value="permeated">permeated</option><option value="circulated">circulated</option><option value="motivated">motivated</option><option value="cured">cured</option></select> by quinine and then this drug became famous in Britain as well.</h5></p>
			  </ol>
</div>
	
			<div id="content3">
				<h2>Listening</h2>
						<p>Total Duration: 45-57 minutes<br>
				<ol>
					<li>Summarize spoken text</li>
<p>You will hear a short lecture. Write a summary for a fellow student who was not present at the lecture. You should write 50-70 words. You have 10 minutes to finish this task. Your response will be judged on the Quality of Your writing and on how well your response presents the key points presented in the lecture.<br>
					</p>
<a href="audio/summarisespokentext.mp3">click here to play.</a>
<div style="margin:1em auto; width:333px; text-align:center;">
					 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> 
					  Upload File: <input type="file" name="fileup" /><br/>
					  <input type="submit" name='submit' value="Upload" /> 
					 </form>
					</div>
					<li>Multiple Choice, Choose Multiple Answers</li>
						<p>Listen to the recording and answer the question by selecting all the correct responses. You will need to select more than one response.<br>
					</p>
<a href="audio/multiplechoicechoosemultipleanswer.mp3">Click here to play</a>
					<p>The purpose of this talk is to ______</p>
						<p><input type="checkbox">Suggest ways to make indoor lighting more economical<br>
						<input type="checkbox">illustrate how an everyday object could inspire new technology<br>
  						<input type="checkbox">persuade listeners to participate in a scientific study<br>
  						<input type="checkbox">describe an artisitc exhibition using familier items<br>
  						<input type="checkbox">encourage listerners to think creatively about mundane items</p>
					<li>Fill in the blanks</li>
					<p>You will hear a recording. Type the missing words in each blank.<br>
					</p>
<a href="audio/fillintheblanks.mp3">click here to play.</a>
<p>One seminal difference in policy remains; the ______ has not matche what is Labor's most imprtant innovation promise. That is to bring together responsibilites for innovation, industry, science and research under on esingle federal minister. Innovation responsibilities ______ lie within the powerful Department of Education and Science, and while there is a ______ industry department, it has littleinfluence within Cabinet. This has  ______ policy development and given Australia's innovation policies a distinctly science and research ______. It is the scientists ratehr than the enginers who call the tune in innovation policy in Canberra, so it's no surprise our policies are all about ______ government funded research and later ______ their results.</p>
					<li>Select Correct Summary</li>
<p>You will hear an audio. Click on the paragraph that best relates to the recoding.</p>
					<a href="">click here to play</a>
					<p><form>
				<input type="radio" name="answer" value="0">Unless major oil consumers invest in exploration now (which would be the first time major funds have been invested since 1964) global oil production will level out and be unable to meet increased demands from India and China <br>
				<input type="radio" name="answer" value="1">With the continuatino of improvements in technology, geology and with government support, there is little doubt that futher major reserves of oil will be found in the near future. This should result in sustainable oil supplies for a furthur 150 years<br>
				<input type="radio" name="answer" value="2">While we are not about to run out of oil, we are certainly past the peak of oil production, which occurred about 40 years ago. This is despite improvements in technology, geology and with tax-subsidized investment in exploration<br>
				<input type="radio" name="answer" value="4">Oil consupmtion reached its first peak in 1964. Since that time the world has become increasingly dependent on oil. it is unlikely that there will be any new major oil discoveries in the immediate future or at any subsequent time<br>
					</form></p>
					</p>
					<li>Multiple-Choice, Choose Single Answer</li>
					<p>Listen to the recording and answer the multiple-choice question by selecting the correct response. Only one response is correct.<br></p>
					<a href="audio/multiplechicechoosesingleanswer.mp3">click here to play.</a>
<p>What is the main idea that the speaker is trying to convery in her comments?</p>
					<form>
				<input type="radio" name="answer" value="0">The dose of opiates needed to treat chronic pain is usually 80 milligrams.<br>
				<input type="radio" name="answer" value="1">The rate of morphine addiction has not increased over the past 18 years.<br>
				<input type="radio" name="answer" value="2">Governments can play a key role in chronic pain management<br>
				<input type="radio" name="answer" value="4">Authorization for the prescription of opiates is required every thirty days.<br>
					</form>
				<br>
				<li>Select Missing Word </li>
					<p>You will hear a recording about an analysis of medical research findings. At the end of the recording the last word or group of words has been replaced by a beep. Select the correct option to complete the recording.<br></p>
					<a href="audio/selectmissingword.mp3">click here to play.</a>
					<p><form>
				<input type="radio" name="answer" value="0">before you understood<br>
				<input type="radio" name="answer" value="1">after diagnosis<br>
				<input type="radio" name="answer" value="2">from anti-oxidants<br>
				<input type="radio" name="answer" value="4">in the first place<br>
					</form></p>
				<li>Write From Dictation</li>
					<p>You will hear a sentence. Type the sentence in the box below exactly as you hear it. Write as much of the sentence as you can. You will hear the sentence only once.<br></p>
					<a href="audio/writefromdictation.mp3">click here to play.</a>
					<div style="margin:1em auto; width:333px; text-align:center;">
					 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> 
					  Upload File: <input type="file" name="fileup" /><br/>
					  <input type="submit" name='submit' value="Upload" /> 
					 </form>
					</div>
					
		</div>
		<div id="footer">
      		Copyright &copy; The Education Bridge 2018
    	</div>
	</div>
	</div>
</body>
</html>
