/*
	This file makes use of the 'dompdf' PHP library and renders the inputted HTML in PDF.
*/

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

try{
	
	$i=1;
	while($i<5){
		
		$conn=setConn();
		$sql_stmt="SELECT* FROM SCORES;";
		$stmt = $conn->query($sql_stmt);
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$html="";
		
		foreach($results as $row){
			$string="<h5><br>NAME</b>: ".$row['NAME']."</h5><br>";
			$string.="<h5><br>REGISTRATION NUMBER</b>: ".$row['REG_NO']."</h5><br>";
			$string.="<h5><br>DEPARTMENT:</b>: ".$row['DEPT']."</h5><br><br><br>";
			$html.=$string;
		}
		

		$dompdf = new Dompdf();
		$dompdf->loadHtml($html);
		$dompdf->render();
		$dompdf->stream();
		
		$i+=1;
	}
	
} catch (PDOException $e){
	echo $e."<br>";
}
?>
