/* Timer JavaScript */
var timerMinute=24;
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
			alert("Time's up! You will now be directed to the 'Finish' page.");
			window.location.href="../Finish-Page/finish.html";
		}
		if(timerMinute==1){
			document.getElementById("timer").style.color="red";
		}
		timerMinute-=1;
		timerSecond=60;
	}
	
	if(timerMinute<0){
		calcScore();
		window.location.href="../Finish-Page/finish.html";
	}
}

/* JS for all the buttons and everything else */
function finishAndCalc(){
	alert("Time's up! You will now be directed to the 'Finish' page.");
	
	var i=0;
	var count=0;
	while(i<25){
		var correct=correctAns[i];
		var user=userAns[i];
		if(correct==user){
			count+=1;
			alert("count is incremented at "+i);
		}
		i+=1;
	}
	window.location.href="../Finish-page/finish.php?score="+count;
}

/* Arrays for the correct answers and user answers. Their functions too. */

var userAns=new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
var correctAns=new Array(1,3,3,1,3,4,1,1,2,1,1,3,2,2,2,1,4,1,4,1,2,1,4,1,1);

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