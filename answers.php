<?php
//PHP session used to pass answers
session_start();
$_SESSION['q16'] = $_POST['q16'];
$_SESSION['q17'] = $_POST['q17'];
$_SESSION['q18'] = $_POST['q18'];
$_SESSION['q19'] = $_POST['q19'];
$_SESSION['q20'] = $_POST['q20'];

//include the functions.php file which processes the various question fields
include "functions.php"
?>

<!doctype html>
<html>

<head>
	<!-- link the css stylesheet-->
	<link rel="stylesheet" href="styles/main.css">
</head>

<body>

	<div id="wrapper">

		<?php
		//include the header code
		include "includes/header.php";
		?>

		<main>

			<!-- ordered list for each question-->
			<ol class="numbersOl">

				<li class="numbersLi">
					<!-- Question 1 -->
					<div class="question">
						<?php
						
						//store necessary information such as correct answer strings, scores and responses in the $answers array
						$answers = array (
							array("ray bradbury", 5, "You said the author of \"The Martian Chronicals\" is {$_SESSION['q1']}. "),
							array("ron bradbury", 2, "You said the author of \"The Martian Chronicals\" is {$_SESSION['q1']}. The correct answer is Ray Bradbury. "),
							array("bradbury", 2, "You said the author of \"The Martian Chronicals\" is {$_SESSION['q1']}. The correct answer is Ray Bradbury. "),
							array("You said the author of \"The Martian Chronicals\" is {$_SESSION['q1']}. The correct answer is Ray Bradbury. ")
						);
						//call the text_field function passing the user answer the $answers information array
						text_field($_SESSION['q1'], $answers);
						?>
					</div>


				<li>
					<!-- Question 2 -->
					<div class="question">
						<?php
						$responses = array (
							//store the  relevant answer responses in $responses array
							"The spot on the surface of Jupiter is <span style=\"color:#ff0000;\">{$_SESSION['q2']}</span>. ",
							"The spot on the surface of Jupiter is <span style=\"color:#ff0000;\">#ff0000</span>
							and you said <span style=\"color:{$_SESSION['q2']};\">{$_SESSION['q2']}</span> which is within 10% accuracy. ",
							"The spot on the surface of Jupiter is <span style=\"color:#ff0000;\">#ff0000</span>
							and you said <span style=\"color:{$_SESSION['q2']};\">{$_SESSION['q2']}</span> which is more than 10% out. "
						);
						//call the colour_field function passing the user answer, correct hex code answer, defined responses array and the %error 
						colour_field($_SESSION['q2'], "ff0000", $responses, 0.1);

				?>
					</div>
				</li>

				<li>
					<!-- Question 3 -->
					<div class="question">
						<?php
						//store the relevant information (answers, score and response) for the question in the $answers array
						$answers = array (
							array("Love", 4, "Venus was the Roman goddess of Love. "),
							array("Beauty", 1, "Venus was the Roman goddess of Love but you chose Beauty. "),
							array("Venus was the Roman goddess of Love but you chose ")
						);
						//call the radio_field function passing the users answer and the $answers information array
						radio_field($_SESSION['q3'], $answers);

				?>
					</div>
				</li>
				<li>
					<!-- Question 4 -->
					<div class="question">
						<?php
						//store the correct answers in $correctAnswers array 
						$correctAnswers = array("Mercury", "Venus", "Earth");
						//call the checkbox_field function passing the user answer and the correct answers array
						checkbox_field($_SESSION["q4"], $correctAnswers)
				?>
					</div>
				</li>
				<li>
					<!-- Question 5 -->
					<div class="question">
						<?php	
						//store the various user responses in $responses array 
						$responses = array("Pluto was downgraded from planet status in August 2006.",
										"Pluto was downgraded from planet status in August 2006. You said ",
										"Pluto was downgraded from planet status in August 2006. You said "	
				);
				//call the date_field function passing the user answer, year, month and the responses array
				date_field($_SESSION['q5'], "2006", "08", $responses);

				?>
					</div>
				</li>

				<li>
					<!-- Question 6 -->
					<div class="question">
						<?php
						//store the various user responses in $responses array 
						$responses = array(
							"Lego Mindstorms was released in January 1998. You score 5 points",
							"Lego Mindstorms was released in January 1998. You said ",
							"Lego Mindstorms set was released in 1998. You said "	
						);
						//call the date_field function passing the user answer, year, month and the responses array
						date_field($_SESSION['q6'], "1998", "01", $responses);

				?>
					</div>
				</li>


				<li>
					<!-- Question 7 -->
					<div class="question">
						<?php
						//call the radio_field function with the user answer and $answers information array
						$answers = array (
							array("31313", 4, "The set number of the EV3 was 31313."),
							array("13131", 1, "The set number of the EV3 was 31313, you chose 13131."),
							array("The set number of the EV3 was 31313 but you chose ")
						);
						//call the radio field function with the user answer and the $answers array
						radio_field($_SESSION['q7'], $answers);
			


				?>
					</div>
				</li>
				<li>
					<!-- Question 8 -->
					<div class="question">

						<?php
						//store the relevant answer responses in the responses array
						$responses = array (
							" The colour of the RCX programmable brick is <span style=\"color:{$_SESSION['q8']};\">{$_SESSION['q8']}</span>. ",
							"That is nearly correct. You said the colour of the RCX programmable brick was 
							<span style=\"color:{$_SESSION['q8']};\">{$_SESSION['q8']}</span>, this is within 5% accuracy! The correct answer was 
							<span style=\"color:#ffff00;\">#ffff00</span> ",
							"That is not correct. You said the colour of the RCX programmable brick was \n 
							<span style=\"color:{$_SESSION['q8']};\">{$_SESSION['q8']}</span>. The correct answer was 
							<span style=\"color:#ffff00;\">#ffff00</span> "
							
						);
						//call the colour_field function passing the user answer, correct hex code answer, defined responses array and the %error 
						colour_field($_SESSION['q8'], "ffff00", $responses, 0.05);
				?>
					</div>

				</li>

				<li>
					<!-- Question 9 -->
					<div class="question">
						<?php
						//store the correct answers in $correctAnswers array
						$correctAnswers = array("C", "Forth", "Java");
						//call the checkbox_field function passing the user answer and the correct answers array
						checkbox_field($_SESSION["q9"], $correctAnswers)

						?>
					</div>
				</li>
				<li>

					<!-- Question 10 -->
					<div class="question">
						<?php
						//store necessary information such as correct answer strings, scores and responses in the $answers array
						$answers = array (
							array("fred martin", 5, "{$_SESSION['q10']} was responsible for developing the prototype programmable Lego brick at MIT. "),
							array("fred marlin", 2, "You said {$_SESSION['q10']} was responsible for developing the prototype programmable Lego brick at MIT. The correct
							answer was Fred Martin. "),
							array("You said {$_SESSION['q10']} was responsible for developing the prototype programmable Lego brick at MIT. The correct
							answer was Fred Martin. ")
						);
						//call text_field function passing user answer and answers array
						text_field($_SESSION['q10'], $answers);
				?>
					</div>
				</li>

				<!-- Question 11 -->
				<li>
					<div class="question">
						<?php
						//store necessary information such as correct answer strings, scores and responses in the $answers array
						$answers = array (
							array("zaphod beeblebrox", 5, " {$_SESSION['q11']} stole the \"Heart of Gold\". "),
							array("zaphod", 2, " You said {$_SESSION['q11']} stole the \"Heart of Gold\". The correct
							answer was Zaphod Beeblebrox. "),
							array("president beeblebrox", 2, "You said {$_SESSION['q11']} stole the \"Heart of Gold\". The correct
							answer was Zaphod Beeblebrox. "),
							array("You said {$_SESSION['q11']} stole the \"Heart of Gold\". The correct
							answer was Zaphod Beeblebrox. ")
						);
						//call text_field function passing user answer and answers array
						text_field($_SESSION['q11'], $answers);	

				?>
					</div>
				</li>

				<!-- Question 12 -->
				<li>
					<div class="question">
						<?php

						//store necessary information for question in $responses array
						$responses = array (

							"The colour of a Hoolavaloo is <span style=\"color:#0000ff;\">{$_SESSION['q12']}</span>. ",
							"The colour of a Hoolavaloo is <span style=\"color:#0000ff;\">#0000ff</span>
							and you said <span style=\"color:{$_SESSION['q12']};\">{$_SESSION['q12']}</span> which is within 20% accuracy. ",
							"The colour of a Hoolavaloo is <span style=\"color:#0000ff;\">#0000ff</span>
							and you said <span style=\"color:{$_SESSION['q12']};\">{$_SESSION['q12']}</span> which is more than 20% out. "
				
						);
						//call the colour_field function inputting the userAnswer, correct answer, $responses array and % error room
						colour_field($_SESSION['q12'], "0000ff", $responses, 0.2);

					?>
					</div>

				</li>

				<!-- Question 13 -->
				<li>
					<div class="question">
						<?php
						//store the necesarry information for question in $answers array
						$answers = array (
							array("slartibartfast", 4, "Slartibartfast designed the coastline of Norway."),
							array("benjy mouse", 1, "Slartibartfast designed the coastline of Norway. You chose Benjy Mouse"),
							array("Slartibartfast designed the coastline of Norway but you chose ")
						);
						//call the radio_field function with the user answer and $answers information array
						radio_field($_SESSION['q13'], $answers);
						
			
				?>
					</div>
				</li>
				<!-- Question 14 -->
				<li>
					<div class="question">
						<?php
						//store necessary information - the responses in the $respones array
						$responses = array(
							"The original radio series of HHG2TG was broadcasted in March 1978.",
							"The original radio series of HHG2TG was broadcasted in March 1978. You said ",
							"The original radio series of HHG2TG was broadcasted in March 1978. You said "	
						);
						//call the date_field function inputting the users answer, correct year, correct month, and the responses array
						date_field($_SESSION['q14'], "1978", "03", $responses);
		
				?>
					</div>
				</li>
				<!-- Question 15 -->
				<li>
					<div class="question">
						<?php
						//store the correct answers in the $correctAnswers array
						$correctAnswers = array("Arthur", "Ford", "Trillian");
						//call the checkbox_field function passing the user answer and the correct answers array
						checkbox_field($_SESSION["q15"], $correctAnswers)						
	
				?>
					</div>
				</li>

				<!-- Question 16 -->
				<li>
					<div class="question">
						<?php
						//store necessary information for question in $responses array
						$responses = array (

							"The colour of cholorphyll is <span style=\"color:#00ff00;\">{$_SESSION['q16']}</span>. ",
							"The colour of cholorphyll is <span style=\"color:#00ff00;\">#00ff00</span>
							and you said <span style=\"color:{$_SESSION['q16']};\">{$_SESSION['q16']}</span> which is within 15% accuracy. ",
							"The colour of cholorphyll is <span style=\"color:#00ff00;\">#00ff00</span>
							and you said <span style=\"color:{$_SESSION['q16']};\">{$_SESSION['q16']}</span> which is more than 15% out. "
						);
						//call the colour_field function inputting the userAnswer, correct answer, $responses array and % error room
						colour_field($_SESSION['q16'], "00ff00", $responses, 0.15);


				?>
					</div>

				</li>

				<!-- Question 17 -->
				<li>
					<div class="question">
						<?php
						//store the relevant information (answers, score and response) for the question in the $answers array
						$answers = array (
							array("oxygen", 4, "Plants produce the gas Oxygen in sunlight "),
							array("carbon dioxide", 1, "Plants produce the gas Oxygen in sunlight but you chose Carbon Dioxide. "),
							array("Plants produce the gas Oxygen in sunlight but you chose ")
						);
						//call the radio_field function passing the users answer and the $answers information array
						radio_field($_SESSION['q17'], $answers);
						
			
				?>
					</div>
				</li>

				<!-- Question 18 -->
				<li>
					<div class="question">
						<?php
						//store necessary information - the responses in the $respones array
						$responses = array(
							"The first Chelsea Flower show was in May 1862.",
							"The first Chelsea Flower show was in May 1862. You said ",
							"The first Chelsea Flower show was in May 1862. You said "	
						);
						//call the date_field function inputting the users answer, correct year, correct month, and the responses array
						date_field($_SESSION['q18'], "1862", "05", $responses);
		
				?>
					</div>
				</li>

				<!-- Question 19 -->
				<li>
					<div class="question">
						<?php
						//store the correct answers in the $correctAnswers array
						$correctAnswers = array("Oak", "Willow", "Plane");
						//call the checkbox_field function passing the user answer and the correct answers array
						checkbox_field($_SESSION["q19"], $correctAnswers);

						
		
				?>
					</div>
				</li>

				<!-- Question 20 -->
				<li>
					<div class="question">
						<?php
						//store necessary information such as correct answer strings, scores and responses in the $answers array
						$answers = array (
							array("oak", 5, " {$_SESSION['q20']} is the common name of a \"Quercus\"."),
							array("oak tree", 5, "That is correct! {$_SESSION['q20']} is the common name of a \"Quercus\". "),
							array("acorn", 2, "That is almost correct. You said {$_SESSION['q20']} is the common name of a \"Quercus\". The correct
							answer was Oak. "),
							array("acorn tree", 2, "You said {$_SESSION['q20']} is the common name of a \"Quercus\". The correct
							answer was Oak. "),
							array("You said {$_SESSION['q20']} is the common name of a \"Quercus\". The correct
							answer was Oak. ")
						);
						
						//text_field fucntion called with user answer and answers array for current question
						text_field($_SESSION['q20'], $answers);

						

				?>
					</div>
				</li>







				<div class="score">
					<?php
				//display the total score to user from the global variable
				echo "You scored a total of {$GLOBALS['score']}/75 points!";
			?>
				</div>


	</div>

	</ol> <!-- end the ordered list -->

	</main> <!-- end the main tag -->

	<?php
	//include the footer code
	include "includes/footer.php";
	?>



	</div> <!-- closes the "Wrapper" div -->

</body><!-- closes the body -->