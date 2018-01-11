<?php
	session_start();
	loginRedirect();

	function loginRedirect(){
		if(!array_key_exists('terminalNum',$_SESSION) && empty($_SESSION['terminalNum'])) {
			echo "<script>window.location.href='../Login-Page/loginpage.html';</script>";
		}
	}
?>
<DOCTYPE! html>
<!-- This is just the front-end, i.e, how the page will look. Ajax and PHP will have to be included later. 
	1. NOTES:- 
		a. Change the timer length depending on the requirement.
		b. Change the number of 'IndiQuestion' divs according to the number of overall questions.
		c. Backend needs to be added. Use Ajax and PHP!
		d. Will follow Kaushik's suggestion and keep all the answers here in an array. We shall also store all the answers submitted by the user in an array and then compare both the arrays in the end when they press 'Finish'. (This is better than the original idea where we compare the answer submitted to the correct answer during the submission of every question. Discuss with others.)
-->
<head>
	<title>Question Page</title>
	<link href="question-page.css" rel="stylesheet">
	<script src="question-page.js"></script>
</head>

<body>
	<div id="head">
		<header id="pageHead">Aptitude Test</header>
		<div id="timer">01:05</div>
	</div>
	
	<div id="question-body">
		<div id="current-question">
		</div>
		<div id="overview">
			<div class='questionOverview' id='indiQuestion1' onclick='showInfo(1)'><p class='questionOverviewNum'>1</p></div>
			<div class='questionOverview' id='indiQuestion2' onclick='showInfo(2)'><p class='questionOverviewNum'>2</p></div>
			<div class='questionOverview' id='indiQuestion3' onclick='showInfo(3)'><p class='questionOverviewNum'>3</p></div>
			<div class='questionOverview' id='indiQuestion4' onclick='showInfo(4)'><p class='questionOverviewNum'>4</p></div>
			<div class='questionOverview' id='indiQuestion5' onclick='showInfo(5)'><p class='questionOverviewNum'>5</p></div>
			<div class='questionOverview' id='indiQuestion6' onclick='showInfo(6)'><p class='questionOverviewNum'>6</p></div>
			<div class='questionOverview' id='indiQuestion7' onclick='showInfo(7)'><p class='questionOverviewNum'>7</p></div>
			<div class='questionOverview' id='indiQuestion8' onclick='showInfo(8)'><p class='questionOverviewNum'>8</p></div>
			<div class='questionOverview' id='indiQuestion9' onclick='showInfo(9)'><p class='questionOverviewNum'>9</p></div>
			<div class='questionOverview' id='indiQuestion10' onclick='showInfo(10)'><p class='questionOverviewNum'>10</p></div>
			<div class='questionOverview' id='indiQuestion11' onclick='showInfo(11)'><p class='questionOverviewNum'>11</p></div>
			<div class='questionOverview' id='indiQuestion12' onclick='showInfo(12)'><p class='questionOverviewNum'>12</p></div>
			<div class='questionOverview' id='indiQuestion13' onclick='showInfo(13)'><p class='questionOverviewNum'>13</p></div>
			<div class='questionOverview' id='indiQuestion14' onclick='showInfo(14)'><p class='questionOverviewNum'>14</p></div>
			<div class='questionOverview' id='indiQuestion15' onclick='showInfo(15)'><p class='questionOverviewNum'>15</p></div>
			<div class='questionOverview' id='indiQuestion16' onclick='showInfo(16)'><p class='questionOverviewNum'>16</p></div>
			<div class='questionOverview' id='indiQuestion17' onclick='showInfo(17)'><p class='questionOverviewNum'>17</p></div>
			<div class='questionOverview' id='indiQuestion18' onclick='showInfo(18)'><p class='questionOverviewNum'>18</p></div>
			<div class='questionOverview' id='indiQuestion19' onclick='showInfo(19)'><p class='questionOverviewNum'>19</p></div>
			<div class='questionOverview' id='indiQuestion20' onclick='showInfo(20)'><p class='questionOverviewNum'>20</p></div>
			<div class='questionOverview' id='indiQuestion21' onclick='showInfo(21)'><p class='questionOverviewNum'>21</p></div>
			<div class='questionOverview' id='indiQuestion22' onclick='showInfo(22)'><p class='questionOverviewNum'>22</p></div>
			<div class='questionOverview' id='indiQuestion23' onclick='showInfo(23)'><p class='questionOverviewNum'>23</p></div>
			<div class='questionOverview' id='indiQuestion24' onclick='showInfo(24)'><p class='questionOverviewNum'>24</p></div>
			<div class='questionOverview' id='indiQuestion25' onclick='showInfo(25)'><p class='questionOverviewNum'>25</p></div>
		</div>
	</div>
</body>
<script>
	showInfo(1);
	
	function showInfo(qno){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("current-question").innerHTML = this.responseText;
				colorBox(qno);
            }
        };
        xmlhttp.open("GET", "questionOutput.php?qno="+qno+"&checked="+userAns[qno-1], true);
        xmlhttp.send();
	}
</script>
</html>