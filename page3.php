<?php
//PHP session used to pass answers
session_start();
$_SESSION['q6'] = $_POST['q6'];
$_SESSION['q7'] = $_POST['q7'];
$_SESSION['q8'] = $_POST['q8'];
$_SESSION['q9'] = $_POST['q9'];
$_SESSION['q10'] = $_POST['q10'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- link the css stylesheet-->
	<link rel="stylesheet" href="styles/main.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quiz</title>
</head>

<body>

	<div id="wrapper">
		<?php
		//include the header code
		include "includes/header.php"
		?>


		<main>
			<!-- create ordered list to hold the question number start at 11 for page 3 -->
			<ol start="11">
				<form method="post" action="page4.php">
					<!--Question 11-->
					<li>
						<div class="question">
							<ol>
								<li>
									Who stole the “Heart of Gold” when he should have been launching it?
								</li>
								<li>
									<input required type="text" name="q11" id="q11">
								</li>

							</ol>
						</div>
					</li>
					<!--Question 12-->
					<li>
						<div class="question">
							<ol>
								<li>
									What colour is a Hoolavaloo?
								</li>
								<li>
									<input type="color" name="q12" id="q12">
								</li>
							</ol>
						</div>
					</li>

					<!--Question 13-->
					<li>
						<div class="question">
							<ol>
								<li>
									Who designed the coastline of Norway
								</li>
								<li>
									<!-- Benjy Mouse, Ford Prefect,Slartibartfast, Prax, Vroomfondel -->
									<div><input required type="radio" name="q13" id="q13" value="Benjy Mouse">Benjy Mouse</div>
									<div><input type="radio" name="q13" id="q13" value="Ford Prefect">Ford Prefect</div>
									<div><input type="radio" name="q13" id="q13" value="Slartibartfast">Slartibartfast</div>
									<div><input type="radio" name="q13" id="q13" value="Prax">Prax</div>
									<div><input type="radio" name="q13" id="q13" value="Vroomfondel">Vroomfondel</div>

								</li>
							</ol>
						</div>
					</li>
					<!--Question 14-->
					<li>
						<div class="question">
							<ol>
								<li>
									When was the original radio series of HHG2TG broadcast?
								</li>
								<li>

									<input required type="date" name="q14" id="q14">

								</li>
							</ol>
						</div>
					</li>
					<!--Question 15-->
					<li>
						<div class="question">
							<ol>
								<li>
									Who travelled on the “Heart of Gold”?
								</li>
								<li>
									<!-- Slartibartfast, Trillian, Prax, Arthur, Ford, Majikthise -->
									<div><input type="checkbox" name="q15[]" id="q15a"
											value="Slartibartfast">Slartibartfast</div>
									<div><input type="checkbox" name="q15[]" id="q15b" value="Trillian">Trillian</div>
									<div><input type="checkbox" name="q15[]" id="q15c" value="Prax">Prax</div>
									<div><input type="checkbox" name="q15[]" id="q15d" value="Arthur">Arthur</div>
									<div><input type="checkbox" name="q15[]" id="q15e" value="Ford">Ford</div>
									<div><input type="checkbox" name="q15[]" id="q15f" value="Majikthise">Majikthise</div>
								</li>
							</ol>
						</div>
					</li>




					<!-- submit outer div box -->
					<div class="submit">
						<!-- submit button -->
						<input type="submit" name="submit" id="submit" value="Continue" class="submitButton">
					</div>


				</form>

			</ol>

		</main>

		<?php
		//include the footer code
    	include "includes/footer.php";
    	?>



	</div>
</body>



</html>