<?php
//PHP session used to pass answers
session_start();
?>
<!doctype html>
<html>

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
    //include header code
    include "includes/header.php";
    ?>

    <main>
      <!-- create ordered list to hold the question number -->
      <ol>
        <!-- Quiz questions go here -->
        <form method="post" action="page2.php">
          <!-- Question 1 -->
          <li>
            <div class="question">
              <ol>
                <li>
                  Who wrote “The Martian Chronicles”?
                </li>
                <li>
                  <input required type="text" name="q1" id="q1">
                </li>
              </ol>
            </div>
          </li>

          <!-- Question 2 -->
          <li>
            <div class="question">
              <ol>
                <li>
                  What colour is the great spot on the surface of Jupiter
                </li>
                <li>
                  <input required type="color" name="q2" id="q2">
                </li>
              </ol>
            </div>
          </li>

          <!-- Question 3 -->
          <li>
            <div class="question">
              <ol>
                <li>
                  Venus is most commonly known as the Roman goddess of what?
                </li>
                <li>
                  <!-- Love, Beauty, War -->
                  <div><input required type="radio" name="q3" id="q3a" value="Love">Love</div>
                  <div><input type="radio" name="q3" id="q3b" value="Beauty">Beauty</div>
                  <div><input type="radio" name="q3" id="q3c" value="War">War</div>
                </li>
              </ol>
            </div>
          </li>

          <!-- Question 4 -->
          <li>
            <div class="question">
              <ol>
                <li>
                  Which are the three innermost planets in the solar system?
                </li>
                <li>
                  <!-- Jupiter, Neptune, Earth, Mars, Venus, Mercury -->
                  <div><input type="checkbox" name="q4[]" id="q4a" value="Jupiter">Jupiter</div>
                  <div><input type="checkbox" name="q4[]" id="q4b" value="Neptune">Neptune</div>
                  <div><input type="checkbox" name="q4[]" id="q4c" value="Earth">Earth</div>
                  <div><input type="checkbox" name="q4[]" id="q4d" value="Mars">Mars</div>
                  <div><input type="checkbox" name="q4[]" id="q4e" value="Venus">Venus</div>
                  <div><input type="checkbox" name="q4[]" id="q4f" value="Mercury">Mercury</div>
                </li>
              </ol>
            </div>
          </li>

          <!-- Question 5 -->
          <li>
            <div class="question">
              <ol>
                <li>
                  When was Pluto downgraded from planet status?
                </li>
                <li>
                  <input required type="date" name="q5" id="q5">
                </li>
              </ol>
            </div>
            <div class="submit">
              <input type="submit" name="submit" id="submit" value="Continue" class="submitButton">
            </div>
          </li>



        </form>
      </ol>
    </main>

    <?php
    //include footer code
    include "includes/footer.php";
    ?>


  </div> <!-- closes the "Wrapper" div -->

</body>

</html>