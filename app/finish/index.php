<?php
	/**********************/
	/* INDEX.PHP (FINISH) */
	/**********************/

	/* We start the session and include the neccssary libraries. */
	session_start();
	require("../../src/utilities.php");
	require("../../src/sql-connections.php");

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
	
	$total=($sec1+$sec2+$sec3+$sec4+$sec5);

	try{
	    	$conn=getConnection();
		$sql_stmt="UPDATE LOGIN SET SEC_1=?, SEC_2=?, SEC_3=?, SEC_4=?, SEC_5=?, TOTAL_SCORE=? WHERE TERMINAL_NO=?";
	
		$sql=$conn->prepare($sql_stmt);
		$sql->bindParam(1, $sec1);
		$sql->bindParam(2, $sec2);
		$sql->bindParam(3, $sec3);
		$sql->bindParam(4, $sec4);
		$sql->bindParam(5, $sec5);
		$sql->bindParam(6, $total);
		$sql->bindParam(7, $_SESSION['terminalNum']);
		$sql->execute();

	} catch (PDOExcpetion $e){
		echo $e."<br>";
	}
?>
<head>
	<title>Mock Test | Finish Page</title>
	<link href="finish.css" rel="stylesheet">
	<script src="finish.js"></script>
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
			<p class="graph-desc-paras" id="para1">Text Completion - I</p>
			<p class="graph-desc-paras">Text Completion - II</p>
			<p class="graph-desc-paras">Chart Interpretation - I</p>
			<p class="graph-desc-paras">Chart Interpretation - II</p>
			<p class="graph-desc-paras">Quantity Comparison</p>
		</div>
	</div>
	
	<p id="score"><?php echo $_SESSION['username']; ?>, your score is <b><?php echo $total;?></b>.<br> Reports containing your scores and further analysis will be sent to '<?php echo $_SESSION['email']; ?>'.<br>This page will be redirected in 15 seconds.</p>
</body>
</html>
