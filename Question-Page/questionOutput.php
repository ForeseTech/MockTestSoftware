<?php
	session_start();

	if(!array_key_exists('terminalNum',$_SESSION) && empty($_SESSION['terminalNum'])) {
		echo "<script>window.location.href='../Login-Signup/loginpage.html';</script>";
	}
	
	function setConn(){
		$servername="localhost";
		$user="root";
		$pass="";
		$dbname="MOCKS";
	
	    $CONN=new PDO("mysql:host=$servername;dbname=$dbname",$user,$pass);
	    $CONN->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $CONN;
	}
	
	$q=$_REQUEST['qno'];
	$checkedNum=$_REQUEST['checked'];
	$prevNum=0;
	$nextNum=0;
	
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
		    $conn=setConn();
	
			$sql_stmt="SELECT* FROM QUESTIONS WHERE QUESTION_NO=$q";
	
		  	$stmt = $conn->query($sql_stmt);
		 	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
			$question="";
			$OPTA="";
			$OPTB="";
			$OPTC="";
			$OPTD="";
			
			foreach($results as $row){
				$question=$row['QUESTION_TEXT'];
				$OPTA=$row['OPTA'];
				$OPTB=$row['OPTB'];
				$OPTC=$row['OPTC'];
				$OPTD=$row['OPTD'];
			}
			
			echo "<header id='question'>$q. $question</header>
				<div id='answers'>";
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
					
			echo"</div>
				<button type='button' class='form-buttons' id='prevButton' onclick='showInfo($prevNum);'>Previous</button>
				<button type='button' class='form-buttons' id='nextButton' onclick='showInfo($nextNum);'>Next</button>";
		}
		else{
			echo "<p id='finish-para'>You have reached the final question. Your time limit is not over yet. You could review your answers <b>or</b> submit your answers and finish the test.</p>
				<button type='button' id='endSubmitButton' onclick='finishAndCalc();' class='form-Buttons'>Submit Answers!</button>";
		}
	} catch(PDOException $e){
		$e."<br>";
	}
?>