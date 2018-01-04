<?php
$sec1=$_REQUEST['s1'];
$sec2=$_REQUEST['s2'];
$sec3=$_REQUEST['s3'];
$sec4=$_REQUEST['s4'];
$sec5=$_REQUEST['s5'];

$per1=($sec1/5)*100;
$per2=($sec2/5)*100;
$per3=($sec3/5)*100;
$per4=($sec4/5)*100;
$per5=($sec5/5)*100;
?>
<head>
	<title>Finish</title>
	<link href="finish.css" rel="stylesheet">
	<script src=""></script>
</head>

<body>
	<div id="head">
		<header id="pageHead">Aptitude Test</header>
	</div>
	
	<div id="graph-overview">
		<div id="graph-body">
			<div id="bar1" class="bars" <?php echo "style='width: $per1%'";?> ><p class="graph-percentages"><?php echo $per1;?>%</p></div>
			<div id="bar2" class="bars" <?php echo "style='width: $per2%'";?> ><p class="graph-percentages"><?php echo $per2;?>%</p></div>
			<div id="bar3" class="bars" <?php echo "style='width: $per3%'";?> ><p class="graph-percentages"><?php echo $per3;?>%</p></div>
			<div id="bar4" class="bars" <?php echo "style='width: $per4%'";?> ><p class="graph-percentages"><?php echo $per4;?>%</p></div>
			<div id="bar5" class="bars" <?php echo "style='width: $per5%'";?> ><p class="graph-percentages"><?php echo $per5;?>%</p></div>
		</div>
		<div id="graph-desc">
			<p class="graph-desc-paras" id="para1">Quantitative</p>
			<p class="graph-desc-paras">Argument Drills</p>
			<p class="graph-desc-paras">Reading Comprehension</p>
			<p class="graph-desc-paras">Chart Interpretation</p>
			<p class="graph-desc-paras">Text Completion</p>
		</div>
	</div>
	
	<p id="score">Your score is <b><?php echo ($sec1+$sec2+$sec3+$sec4+$sec5);?></b>.<br> Reports containing your scores and further analysis will be sent to the E-Mail ID that you have provided.</p>
	
</body>
</html>