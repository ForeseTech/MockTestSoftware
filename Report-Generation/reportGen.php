<?php
require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

use Dompdf\Dompdf;

function setConn(){
	$servername="localhost";
	$user="root";
	$pass="";
	$dbname="MOCKS";

    $CONN=new PDO("mysql:host=$servername;dbname=$dbname",$user,$pass);
    $CONN->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	return $CONN;
}

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$htmlStart="<!DOCTYPE html>
	<head>
		<title>Report Generation</title>
		<style>
			h1, h2{
				text-align: center;
			}
			ul{
				width: 80%;
				margin: 2% auto;
			}
			p{
				width: 80%;
				margin: 2% auto;
				text-align: center;
				font-size: 125%;
				display: block;
			}
			
			.info-titles{
				width: 70%;
				margin: 2% auto;
			}
			.marks{
				padding-top: 2%;
				padding-bottom: 2%;
				width: 70%;
				margin: 0% auto;
				display: block;
				text-align: center;
				border-top: 1px solid black;
				border-left: 1px solid black;
				border-right: 1px solid black;
			}
			
			.total{
				width: 80%;
				font-size: 115%;
				margin: 2% auto 5.5% auto;
			}
		</style>
	</head>
	
	<body>";
	
$content="";
$dept="IT";


try{
    $conn=setConn();

	$sql_stmt="SELECT* FROM SCORES WHERE DEPT='$dept' ORDER BY REG_NO ASC;";

  	$stmt = $conn->query($sql_stmt);
 	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$name="";
	$reg="";
	$dept="";
	$sec1="";
	$sec2="";
	$sec3="";
	$sec4="";
	$sec5="";
	$total="";
	
	foreach($results as $row){
		$name=$row['NAME'];
		$reg=$row['REG_NO'];
		$dept=$row['DEPT'];
		$sec1=$row['SEC1'];
		$sec2=$row['SEC2'];
		$sec3=$row['SEC3'];
		$sec4=$row['SEC4'];
		$sec5=$row['SEC5'];
		$total=$row['TOTAL'];
		
		$content.="
				<h1>Mock Placements 2018</h1>
				<h2>Aptitude Test Report Card</h2>
				<br>
				<ul>
					<li>Scores of the candidate are shown per section. Each section is marked out of 5. The total score is out of 50.</li>
					<li>Candidates must reproduce this report card on the day of the mock placements.</li>
					<li>Candidates who fail to do so will not be permitted to attend the interviews.</li>
				</ul>
				<br>
				<p class='info-titles'><b>$name</b></p>
				<p class='info-titles'><b>$reg</b></p>
				<p class='info-titles'><b>$dept</b></p>
				<br>
				<p class='marks'>
					<b>Text Completion - I&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$sec1/5</b>
				</p>
				<p class='marks'>
					<b>Text Completion - II&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$sec2/5</b>
				</p>
				<p class='marks'>
					<b>Chart Interpretation - I&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$sec3/5</b>
				</p>
				<p class='marks'>
					<b>Chart Interpretation - II&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$sec4/5</b>
				</p>
				<p class='marks' style='border-bottom: 1px solid black;'>
					<b>Quantity Compare&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$sec5/5</b>
				</p>
				<br>
				<p class='total'><b>Your total score is $total out of 25.</b></p>";	
		
	}
	
} catch (PDOEXception $e){
	echo $e."<br>";
}
		
$htmlEnd="</body></html>";

$html=$htmlStart.$content.$htmlEnd;

$dompdf->loadHtml($html);
$dompdf->render();
$dompdf->stream();
?>