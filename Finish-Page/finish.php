<?php
$score=$_REQUEST['score'];
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
			<div id="bar1" class="bars" <?php echo "style='width: 80%'";?> ><p class="graph-percentages">100%</p></div>
			<div id="bar2" class="bars" <?php echo "style='width: 60%'";?> ><p class="graph-percentages">100%</p></div>
			<div id="bar3" class="bars" <?php echo "style='width: 100%'";?> ><p class="graph-percentages">100%</p></div>
			<div id="bar4" class="bars" <?php echo "style='width: 20%'";?> ><p class="graph-percentages">100%</p></div>
			<div id="bar5" class="bars" <?php echo "style='width: 40%'"; ?> ><p class="graph-percentages">100%</p></div>
		</div>
		<div id="graph-desc">
			<p class="graph-desc-paras" id="para1">Quantitative</p>
			<p class="graph-desc-paras">Argument Drills</p>
			<p class="graph-desc-paras">Reading Comprehension</p>
			<p class="graph-desc-paras">Chart Interpretation</p>
			<p class="graph-desc-paras">Text Completion</p>
		</div>
	</div>
	
</body>
</html>