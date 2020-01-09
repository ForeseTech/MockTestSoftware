/**********************/
/* QUESTION-OUTPUT.JS */
/**********************/

/*=======*/
/* TIMER */
/*=======*/

var timerMinute=49;
var timerSecond=60;

window.setInterval(changeTimer, 1000);

function changeTimer(){
	timerSecond-=1;
	
	if(timerSecond>=10){
		if(timerMinute>=10){
			document.getElementById("timer").innerHTML=timerMinute+":"+timerSecond;
		}
		else{
			document.getElementById("timer").innerHTML="0"+timerMinute+":"+timerSecond;
		}
	}
	else if(timerSecond<10){
		if(timerMinute>=10){
			document.getElementById("timer").innerHTML=timerMinute+":0"+timerSecond;
		}
		else{
			document.getElementById("timer").innerHTML="0"+timerMinute+":0"+timerSecond;
		}
	}
	
	if(timerSecond==0){
		if(timerMinute==0 && timerSecond==0){
			finishAndCalc();
		}
		if(timerMinute==1){
			document.getElementById("timer").style.color="red";
		}
		timerMinute-=1;
		timerSecond=60;
	}
	
	if(timerMinute<0){
		finishAndCalc();
	}
}


/*====================*/
/* ANSWER SUBMISSIONS */
/*====================*/

function finishAndCalc(){
	var i=0;
	
	var sec1=0;
	var sec2=0;
	var sec3=0;
	var sec4=0;
	var sec5=0;
	
	while(i<50){	
		var correct=correctAns1[i];
		var user=userAns[i];
	
		if(i<10 && user==correct){
			sec1+=1;
		}
		else if(i<20 && user==correct){
			sec2+=1;
		}
		else if(i<30 && user==correct){
			sec3+=1;
		}
		else if(i<40 && user==correct){
			sec4+=1;
		}
		else if(i<50 && user==correct){
			sec5+=1;
		}
		
		i+=1;
	}
	window.location.href="../finish/index.php?s1="+sec1+"&s2="+sec2+"&s3="+sec3+"&s4="+sec4+"&s5="+sec5;
}

/* Arrays for the correct answers and user answers. Their functions too. */
var userAns=new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
var correctAns1=new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

function getAnswersArray(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var answersString = this.responseText;

	    // We shall now parse the string into an array.
	    var arrayIter=0;
	    for(var iter=0; iter<50; iter+=1) {
	    	if(answersString[iter] == ' ');
		else if(answersString[iter] == "1") correctAns1[arrayIter]=1;
		else if(answersString[iter] == "2") correctAns1[arrayIter]=2;
		else if(answersString[iter] == "3") correctAns1[arrayIter]=3;
		else if(answersString[iter] == "4") correctAns1[arrayIter]=4;
	    	arrayIter += 1;
	    }
        }
    };
    xmlhttp.open("GET", "getAnswers.php", true);
    xmlhttp.send();
}

getAnswersArray();

function check(qno){
	if(document.getElementById("ans_one").checked==true){
		userAns[qno-1]=1;
	}
	else if(document.getElementById("ans_two").checked==true){
		userAns[qno-1]=2;
	}
	else if(document.getElementById("ans_three").checked==true){
		userAns[qno-1]=3;
	}
	else if(document.getElementById("ans_four").checked==true){
		userAns[qno-1]=4;
	}
	
	if(userAns[qno-1]>0){
		document.getElementById("indiQuestion"+qno).style.backgroundColor="yellow";
	}
}
