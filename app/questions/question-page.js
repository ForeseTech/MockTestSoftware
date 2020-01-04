/**********************/
/* QUESTION-OUTPUT.JS */
/**********************/

/*=======*/
/* TIMER */
/*=======*/

var timerMinute=31;
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
			echoSetNum();
			alert("Thanks for taking the test! Click 'OK' to see your scores!");
			finishAndCalc(setNum);
		}
		if(timerMinute==1){
			document.getElementById("timer").style.color="red";
		}
		timerMinute-=1;
		timerSecond=60;
	}
	
	if(timerMinute<0){
		echoSetNum();
		finishAndCalc(setNum);
	}
}


/*====================*/
/* ANSWER SUBMISSIONS */
/*====================*/

function finishAndCalc(num){
	var i=0;
	
	var sec1=0;
	var sec2=0;
	var sec3=0;
	var sec4=0;
	var sec5=0;
	
	while(i<25){
		
		if(num==1){
			var correct=correctAns1[i];
			var user=userAns[i];
		
			if(i<5 && user==correct){
				sec1+=1;
			}
			else if(i<10 && user==correct){
				sec2+=1;
			}
			else if(i<15 && user==correct){
				sec3+=1;
			}
			else if(i<20 && user==correct){
				sec4+=1;
			}
			else if(i<25 && user==correct){
				sec5+=1;
			}
		}
		else if(num==2){
			var correct=correctAns2[i];
			var user=userAns[i];
		
			if(i<5 && user==correct){
				sec1+=1;
			}
			else if(i<10 && user==correct){
				sec2+=1;
			}
			else if(i<15 && user==correct){
				sec3+=1;
			}
			else if(i<20 && user==correct){
				sec4+=1;
			}
			else if(i<25 && user==correct){
				sec5+=1;
			}
		}
		else if(num==3){
			var correct=correctAns3[i];
			var user=userAns[i];
		
			if(i<5 && user==correct){
				sec1+=1;
			}
			else if(i<10 && user==correct){
				sec2+=1;
			}
			else if(i<15 && user==correct){
				sec3+=1;
			}
			else if(i<20 && user==correct){
				sec4+=1;
			}
			else if(i<25 && user==correct){
				sec5+=1;
			}
		}
		i+=1;
	}
	window.location.href="../finish/index.php?s1="+sec1+"&s2="+sec2+"&s3="+sec3+"&s4="+sec4+"&s5="+sec5;
}

function echoSetNum(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            setNum = this.responseText;
        }
    };
    xmlhttp.open("GET", "echoSetNum.php", true);
    xmlhttp.send();
}

/* Arrays for the correct answers and user answers. Their functions too. */
var setNum=0;
var userAns=new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

var correctAns1=new Array(4,1,1,2,2,3,1,3,3,1,4,2,1,1,1,1,4,3,2,4,4,2,2,1,2);
var correctAns2=new Array(4,1,1,2,3,3,1,2,1,2,4,2,1,1,1,2,2,1,3,1,4,2,2,1,2);
var correctAns3=new Array(1,2,1,1,2,3,1,3,3,1,2,4,2,3,2,1,4,3,2,4,1,4,2,3,4);

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
