<?php
//file to store the functions used to process the various question field types

// Set the global variables so the different functions can access them
//score initialized to 0
$GLOBALS['score'] = 0;
//default response for correct answers
$GLOBALS['c'] = "That is correct! ";
//default response for incorrect answers
$GLOBALS['ic'] = "That is incorrect! ";
//default response for almost answers
$GLOBALS['nc'] = "That is nearly correct! ";

/**
 * text_field
 * function to process text field questions - uses 2 parameters
 *
 * @param string   $userAnswer - the user's given answer to check
 * @param array   $answerdetails - array of relevant details for each question containing:
 *                  correct answers and the relevant score and response for each answer
 * 
 * outputs the relevant response to user and increments their score accordingly
 */ 

function text_field($userAnswer, $answerDetails){
    //converT user answer to lower case as correct answers not case sensitive
    $userAnswer = strtolower($userAnswer);

    //initiate $found variable to boolean of false
    //used to track whether the user's answer is correct / was found in the answerDetails array
    $found = False;

    //use for loop to iterate through the answers in the answerDetails array
    //foreach could not be used as need to specify the individual value with respect to the count i
    for ($i = 0; $i < count($answerDetails); $i++){
        //if correct / almost correct answer was found
        if ($answerDetails[$i][0] == $userAnswer){
            //if user answer is correct (score of 5 found at array location) output correct response
            if ($answerDetails[$i][1] == 5){
                //display correct answer response
                echo $GLOBALS['c'] . $answerDetails[$i][2] . "You score 5 points";
            } //if user answer is nearly correct (score of 2 found at array location)
            else if ($answerDetails[$i][1] == 2){
                //display nearly correct answer response
                echo $GLOBALS['nc'] . $answerDetails[$i][2] . "You score 2 points";
            }
            //increment the GLOBALS['score'] with the correct score to the corresponding answer given
            $GLOBALS['score'] += $answerDetails[$i][1];
            //set found to true if an answer was found in the array
            $found = True;
            break;
            
        } 
    }
    //if nothing was found - wrong answer
    if (!$found){
        //echo default response message for incorrect answer
        //appended with final element in the array which is the response given for wrong answers
        echo $GLOBALS['ic'] . end($answerDetails)[0] . "You score 0 points";

    }

}

/**
 * radio_field
 * function to process the radio field questions
 *
 * @param string   $userAnswer - the user's given answer to check 
 * @param array   $answers - array of relevant details for each question containing:
 *                  correct answers and the relevant score and response for each answer
 * 
 * outputs the relevant response to user and increments their score accordingly
 */ 

function radio_field($userAnswer, $answers){
    //loop through the answer array
    for ($i = 0; $i < count($answers); $i++){
        //if correct answer
        //if user answer = the correct answer (first answer in array)
        if ($userAnswer == $answers[0][0]){
                //display response message with correct default message followed by the relevant response
                echo $GLOBALS['c'] . $answers[0][2] . "You score 4 points";
                //update the global variable score with the relevant score (4)
                $GLOBALS['score'] += $answers[0][1];
                //exit the loop
                break;		
        }
        //if nearly correct answer
        else if ($userAnswer == $answers[1][0]){
                //display response message with nearly correct default message followed by the relevant response
                echo $GLOBALS['nc'] . $answers[1][2] . " You score 1 point";
                //update the global variable score with the relevant score (1)
                $GLOBALS['score'] += $answers[1][1];
                //exit the loop
                break;
            }
        
        //if wrong answer
        else {
            //echo the final element in the array which is the response message for wrong answers
            echo $GLOBALS['ic'] . end($answers)[0]  . $userAnswer . ". You score 0 points";
            //exit the loop
            break;
        }     
    }
        
    }


/**
 * checkbox_field
 * function to process checkbox field questions
 *
 * @param array   $userAnswers - array of the user's given answers to check
 * @param array   $correctAnswers - array of the correct answers for the relevant question 
 *  
 * outputs the relevant response to user and increments their score accordingly
 */ 

function checkbox_field($userAnswers, $correctAnswers){
    
    //initiate qScore to 0 to keep track of the score for the current question
    //this is needed for checkbox field to display the score for the current question
    $qScore = 0;

    //combine correct answers into a string to be displayed to user
    $correctAnswersString = implode($correctAnswers, ", ");

    //to avoid possible error - check if answer was supplied by the user 
    if ($userAnswers != NULL){
    //for each of the users answers (loop through the given answers)
    foreach ($userAnswers as $value){
        //if the users answer is in the correct answers array
        if (in_array($value, $correctAnswers)){
            //increment the question score by 2
            $qScore += 2;	
            //display correct answer response
            echo $value . " was correct! ";	
                
        } else {
            //update the question score by -2
            $qScore -= 2;
            //display incorrect answer response
            echo $value . " was not correct... ";
        } 
        
    }
    //display response based on user answers notifying them with the correct answers and their score
    echo $correctAnswersString . " were the correct answers." . " You score " . $qScore . " points.";
   
    //update the total quiz score by adding on the question score
    $GLOBALS['score'] += $qScore;
} 
//if no answers were checked 
else {
    //notify the user and give them the correct answer - 0 points
    echo "No answer was given... The correct answer was: " . $correctAnswersString . ". You score 0 points.";			
}
} 


/**
 * date_field
 * function to process the date field questions
 *
 * @param string   $userAnswer - the user's given answer (date string)
 * @param string   $year - year of the correct answer in format "2021" (string)
 * @param string   $month - month of the correct answer in format "01" --> January (string)
 * @param array   $responses - array storing the relevant responses for the current question 
 *  
 * outputs the relevant response to user and increments their score accordingly
 */ 

function date_field($userAnswer, $year, $month, $responses){
    //if both year and month are correct give 5 points (check the trimmed string)
    if (substr($userAnswer, 0, -3) == $year . "-" . $month){
        //display correct answer message 
        echo $GLOBALS["c"] . $responses[0] . " You score 5 points";
        //increment score by 5
        $GLOBALS["score"] += 5;
    } 
    //if year is correct but not month -- nearly correct
    //just check the year part of the string
    else if (substr($userAnswer, 0, 4) == $year){
        //display nearly correct response notifying user of their choice vs the correct answer
        echo $GLOBALS["nc"] . $responses[1] . date("F Y", strtotime($userAnswer)) . ". You score 2 points";
        //increment score by 2 for nearly correct
        $GLOBALS["score"] += 2;
    }
    //wrong answer no points 
    else {
        //display incorrect answer response
        echo $GLOBALS["ic"] . $responses[2] . date("F Y", strtotime($userAnswer)) . ". You score 0 points";
    }


}


/**
 * colour_field
 * function to process the color field questions
 *
 * @param string   $userAnswer - the users given answer in hex colour format
 * @param string   $correctAnswer - the correct colour code as hex colour code string (missing the #)
 * @param array   $responses - array of the relevant responses for the current question
 * @param float   $error - chosen % error for question, e.g 0.2 = 20% error leniancy 
 *  
 * outputs the relevant response to user and increments their score accordingly
 */ 

function colour_field($userAnswer, $correctAnswer, $responses, $error){

    //remove the # from the colour code and store in variable "colour"
    //this is to make it easier to find "nearly" correct answers
    $colour = str_replace("#", "", $userAnswer);


    //split the colour code into 3 components red, green and blue - we can use this to find 5% error
    $userRgb = str_split($colour, 2);
    //- split the correct answer hex colour code in red, green and blue components. Store in variable errorRgbs
    $errorRgb = str_split($correctAnswer, 2);
    //assign array item (each colour) "red, "green" and "blue" to a variable to store each component in a variable
    $userRed = hexdec($userRgb[0]);
    $userGreen = hexdec($userRgb[1]);
    $userBlue = hexdec($userRgb[2]);

    //assign each array item (each colour) to a variable that will be used to calculate the error later
    $errorRed = hexdec($errorRgb[0]);
    $errorGreen = hexdec($errorRgb[1]);
    $errorBlue = hexdec($errorRgb[2]);

    

    //calculate upper bounds
    //important to check if an rgb error value is 0 otherwise will cause issues
    //if one is equal to 0 find the upper bound using the error*255 rather than error*0
    //if not 0 calculate upper error by adding the colour error with calculated error leniancy
    if ($errorRed == 0){
        $errorRedUpper = $error*255;
    } else {
        $errorRedUpper = $errorRed + $errorRed*$error;
    }
    if ($errorGreen == 0){
        $errorGreenUpper = $error*255;
    } else {
        $errorGreenUpper = $errorGreen + $errorGreen*$error;
    }
    if ($errorBlue == 0){ 
        $errorBlueUpper = $error*255;
    } else {
        $errorBlueUpper = $errorBlue + $errorBlue*$error;
    
    }	
        
    //calculate lower bounds
    //does not need to checked for 0 as rgb colour value must be >= 0
    //lowerbound = correctAnswer - error leniency (correctAnswer*error)
    $errorRedLower = $errorRed - $errorRed*$error;
    $errorGreenLower = $errorGreen - $errorGreen*$error;
    $errorBlueLower = $errorBlue - $errorBlue*$error;

    //if user is exactly correct
    if ($colour == $correctAnswer){
        //display correct answer response
        echo $GLOBALS["c"] . $responses[0] . "You score 5 points";
        $GLOBALS['score'] += 5;
    }
    
    //compare user given rgb values with correct / error accounted rgb values that have been calulcated
    //if the user answer falls with the error % specified - user is nearly correct
    else if (($userRed >= $errorRedLower and $userRed <= $errorRedUpper) and 
    ($userGreen >= $errorGreenLower and $userGreen <= $errorGreenUpper) and
    ($userBlue >= $errorBlueLower and $userBlue <= $errorBlueUpper)
    ) {
        //display the nearly correct response message
        echo $GLOBALS["nc"] . $responses[1] . "You score 2 points";
        //increment score by 2 for nearly correct colour answers
        $GLOBALS['score'] += 2;

    } 
    else {
        //display the incorrect response message
         echo $GLOBALS["ic"] . $responses[2] . "You score 0 points";
         //do not update score

     }
}

?>