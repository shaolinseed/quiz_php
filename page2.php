<?php
//PHP session used to pass answers
session_start();
$_SESSION['q1'] = $_POST['q1'];
$_SESSION['q2'] = $_POST['q2'];
$_SESSION['q3'] = $_POST['q3'];
$_SESSION['q4'] = $_POST['q4'];
$_SESSION['q5'] = $_POST['q5'];

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
			<!--//create ordered list to hold the question number start at 6 for page 2-->
			<ol start="6">
				<form method="post" action="page3.php">

					<!--Question 6-->
					<li>
						<div class="question">
							<ol>
								<li>
									When was the original Lego Mindstorms set released?
								</li>
								<li>
									<input required type="date" name="q6" id="q6">
								</li>

							</ol>

						</div>
					</li>
					<!--Question 7-->
					<li>
						<div class="question">
							<ol>
								<li>
									What is the set number EV3?
								</li>
								<li>
									<!-- 11311, 21212, 13131, 31313, 41414 -->
									<div><input required type="radio" name="q7" id="q7" value="11311">11311</div>
									<div><input type="radio" name="q7" id="q7" value="21212">21212</div>
									<div><input type="radio" name="q7" id="q7" value="13131">13131</div>
									<div><input type="radio" name="q7" id="q7" value="31313">31313</div>
									<div><input type="radio" name="q7" id="q7" value="41414">41414</div>

								</li>
							</ol>
						</div>
					</li>
					<!--Question 8-->
					<li>
						<div class="question">
							<ol>
								<li>
									What colour is the top of the RCX programmable brick?
								</li>
								<li>
									<!-- colour input -->
									<input type="color" name="q8" id="q8">

								</li>
							</ol>
						</div>
					</li>
					<!--Question 9-->
					<li>
						<div class="question">
							<ol>
								<li>
									Which programming languages can be used on the RCX programmable brick?
								</li>
								<li>
									<!-- C, Basic, Python, LISP, Forth, Java, Scratch -->
									<div><input type="checkbox" name="q9[]" id="q9a" value="C">C</div>
									<div><input type="checkbox" name="q9[]" id="q9b" value="Basic">Basic</div>
									<div><input type="checkbox" name="q9[]" id="q9c" value="Python">Python</div>
									<div><input type="checkbox" name="q9[]" id="q9d" value="LISP">LISP</div>
									<div><input type="checkbox" name="q9[]" id="q9e" value="Forth">Forth</div>
									<div><input type="checkbox" name="q9[]" id="q9f" value="Java">Java</div>
									<div><input type="checkbox" name="q9[]" id="q9g" value="Scratch">Scratch</div>

								</li>
							</ol>
						</div>
					</li>
					<!--Question 10-->
					<li>
						<div class="question">
							<ol>
								<li>
									Who was responsible for developing the prototype programmable Lego brick at MIT?
								</li>
								<li>
									<!-- text input field -->
									<input required type="text" name="q10" id="q10">
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