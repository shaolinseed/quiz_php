<?php
//PHP session used to pass answers
session_start();
$_SESSION['q11'] = $_POST['q11'];
$_SESSION['q12'] = $_POST['q12'];
$_SESSION['q13'] = $_POST['q13'];
$_SESSION['q14'] = $_POST['q14'];
$_SESSION['q15'] = $_POST['q15'];

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
		include "includes/header.php"
		?>


		<main>
			<!-- create ordered list to hold the question number start at 16 for page 4 -->
			<ol start="16">
				<form method="post" action="answers.php">


					<!--Question 16-->
					<li>
						<div class="question">
							<ol>
								<li>
									What colour is chlorophyll?
								</li>
								<li>
									<input type="color" name="q16" id="q16">
								</li>
							</ol>
						</div>
					</li>


					<!--Question 17-->
					<li>
						<div class="question">
							<ol>
								<li>
									What gas do plants produce in sunlight?
								</li>
								<li>
									<!--Oxygen, Carbon Dioxide, Helium, Nitrogen, Petroleum-->
									<div><input required type="radio" name="q17" id="q17" value="Oxygen">Oxygen</div>
									<div><input type="radio" name="q17" id="q17" value="Carbon Dioxide">Carbon Dioxide</div>
									<div><input type="radio" name="q17" id="q17" value="Helium">Helium</div>
									<div><input type="radio" name="q17" id="q17" value="Nitrogen">Nitrogen</div>
									<div><input type="radio" name="q17" id="q17" value="Petroleum">Petroleum</div>

								</li>
							</ol>
						</div>
					</li>


					<!--Question 18-->
					<li>
						<div class="question">
							<ol>
								<li>
									When was the first Chelsea Flower Show?
								</li>
								<li>

									<input required type="date" name="q18" id="q18">

								</li>
							</ol>
						</div>
					</li>

					<!--Question 19-->
					<li>
						<div class="question">
							<ol>
								<li>
									Which of the following are trees?
								</li>
								<li>
									<!--Oak, Rose, Hydrangea, Willow, Plane, Buddleia-->
									<div><input type="checkbox" name="q19[]" id="q19a" value="Oak">Oak</div>
									<div><input type="checkbox" name="q19[]" id="q19b" value="Rose">Rose</div>
									<div><input type="checkbox" name="q19[]" id="q19c" value="Hydrangea">Hydrangea</div>
									<div><input type="checkbox" name="q19[]" id="q19d" value="Willow">Willow</div>
									<div><input type="checkbox" name="q19[]" id="q19e" value="Plane">Plane</div>
									<div><input type="checkbox" name="q19[]" id="q19f" value="Buddleia">Buddleia</div>
								</li>
							</ol>
						</div>
					</li>

					<!--Question 20-->
					<li>
						<div class="question">
							<ol>
								<li>
									What is the common name of a Quercus?
								</li>
								<li>
									<input required type="text" name="q20" id="q20">
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