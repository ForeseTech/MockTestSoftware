<?php

	/**********************/
	/* QUESTIONOUTPUT.PHP */
	/**********************/

	/* This file outputs the HTML code for the question required along with the HTML for the options (radio buttons). */
	/* Is used for an AJAX function. */

	/* We start the session and include the necessary libraries. */
	session_start();
	require("../../src/sql-connections.php");
	require("../../src/sql-functions.php");
	require("../../src/utilities.php");

	/* We check if the user is logged in. */
	if(isNotLoggedIn()) {
		redirectToLogin();
	}

	/* We check to see which questions is required and if it has been answered already. */
	$q=$_REQUEST['qno'];
	$checkedNum=$_REQUEST['checked'];
	$prevNum=0;
	$nextNum=0;

	/* We also initialise the next and prev buttons on the question page. */
	if($q==1){
		$prevNum=1;
		$nextNum=2;
	}
	else{
		$prevNum=$q-1;
		$nextNum=$q+1;
	}
	
	try{
	    
		if($q!=26){
			$conn = getConnection();	
			$sql_stmt = "SELECT* FROM SET".$_SESSION['setNum']." WHERE QUESTION_NO=$q";
	
			$results = executeQuery($conn, $sql_stmt);

			$question="";
			$OPTA="";
			$OPTB="";
			$OPTC="";
			$OPTD="";
			$PICTURE="";
			
			foreach($results as $row){
				$question=$row['QUESTION_TEXT'];
				$OPTA=$row['OPTA'];
				$OPTB=$row['OPTB'];
				$OPTC=$row['OPTC'];
				$OPTD=$row['OPTD'];
				$PICTURE=$row['PICTURE'];
			}
			
			echo "<header id='question'>$q. $question</header>";
			
			if($PICTURE!="NONE"){
				echo "<img src='SET".$_SESSION['setNum']."/$PICTURE' id='questionPic'>";
			}
			
			echo "<div id='answers'>";
			
			if($checkedNum==1){
				echo "<input type='radio' name='gender' value='1' id='ans_one' onclick='check($q)' class='radio_ans' checked>$OPTA<br>
					<input type='radio' name='gender' value='2' id='ans_two' onclick='check($q)' class='radio_ans'>$OPTB<br>
					<input type='radio' name='gender' value='3' id='ans_three' onclick='check($q)' class='radio_ans'>$OPTC<br>
					<input type='radio' name='gender' value='4' id='ans_four' onclick='check($q)' class='radio_ans'>$OPTD<br>";
			}
			else if($checkedNum==2){
				echo "<input type='radio' name='gender' value='1' id='ans_one' onclick='check($q)' class='radio_ans'>$OPTA<br>
					<input type='radio' name='gender' value='2' id='ans_two' onclick='check($q)' class='radio_ans' checked>$OPTB<br>
					<input type='radio' name='gender' value='3' id='ans_three' onclick='check($q)' class='radio_ans'>$OPTC<br>
					<input type='radio' name='gender' value='4' id='ans_four' onclick='check($q)' class='radio_ans'>$OPTD<br>";
			}
			else if($checkedNum==3){
				echo "<input type='radio' name='gender' value='1' id='ans_one' onclick='check($q)' class='radio_ans'>$OPTA<br>
					<input type='radio' name='gender' value='2' id='ans_two' onclick='check($q)' class='radio_ans'>$OPTB<br>
					<input type='radio' name='gender' value='3' id='ans_three' onclick='check($q)' class='radio_ans' checked>$OPTC<br>
					<input type='radio' name='gender' value='4' id='ans_four' onclick='check($q)' class='radio_ans'>$OPTD<br>";
			}
			else if($checkedNum==4){
				echo "<input type='radio' name='gender' value='1' id='ans_one' onclick='check($q)' class='radio_ans'>$OPTA<br>
					<input type='radio' name='gender' value='2' id='ans_two' onclick='check($q)' class='radio_ans'>$OPTB<br>
					<input type='radio' name='gender' value='3' id='ans_three' onclick='check($q)' class='radio_ans'>$OPTC<br>
					<input type='radio' name='gender' value='4' id='ans_four' onclick='check($q)' class='radio_ans' checked>$OPTD<br>";
			}
			else if($checkedNum==0){
				echo "<input type='radio' name='gender' value='1' id='ans_one' onclick='check($q)' class='radio_ans'>$OPTA<br>
					<input type='radio' name='gender' value='2' id='ans_two' onclick='check($q)' class='radio_ans'>$OPTB<br>
					<input type='radio' name='gender' value='3' id='ans_three' onclick='check($q)' class='radio_ans'>$OPTC<br>
					<input type='radio' name='gender' value='4' id='ans_four' onclick='check($q)' class='radio_ans'>$OPTD<br>";
			}
					
			echo "</div>
				<button type='button' class='form-buttons' id='prevButton' onclick='showInfo($prevNum);'>Previous</button>
				<button type='button' class='form-buttons' id='nextButton' onclick='showInfo($nextNum);'>Next</button>";
		}
		else{
			echo "<p id='finish-para'>You have reached the final question. Your time limit is not over yet. You could review your answers <b>or</b> submit your answers and finish the test.</p>
				<button type='button' id='endSubmitButton' onclick='finishAndCalc(".$_SESSION['setNum'].");' class='form-Buttons'>Submit Answers!</button>";
		}
	} catch(PDOException $e){
		$e."<br>";
	}
?>
