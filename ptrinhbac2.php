<?php

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];

//  in ra phuong trình
echo $a."x² + ".$b."x + ".$c." = 0<p>";

// Gán biến và tính delta
$delta=(pow($b,2))-(4*$a*$c);

// Nếu có giá trị biến bằng null
if (!isset($a) or !isset($b) or !isset($c))
{
	echo "Vui long nhap tất cả các giá trị ";
}

// Nếu a = 0
elseif ($a==0) {
	echo "Phương trình không phải là phương trình bậc 2 ";
}

// If delta<0
elseif ($delta<0) {
	
	$realpart=round((($b*-1)/(2*$a)),3);

	$ipart=round((pow($b,2)-(4*$a*$c)),3);

	echo " Phương trình có nghiệm: x = $realpart ± √$ipart<p>";
	
	echo "Hay x = $realpart + ".round(sqrt($ipart*-1),3)."i hoặc x = $realpart - ".round(sqrt($ipart*-1),3)."i<p>";
}

// If delta>0
elseif ($delta>0) {
	
	$rootplus=round((($b*-1)+sqrt(pow($b,2)-4*$a*$c))/(2*$a),3);
	
	$rootmin=round((($b*-1)-sqrt(pow($b,2)-4*$a*$c))/(2*$a),3);

	echo "Phương trình có 2 nghiệm: x = $rootplus hoặc x = $rootmin.";
}

// If delta==0
elseif ($delta==0) {
	
	$rootrep=round((($b*-1)+sqrt(pow($b,2)-4*$a*$c))/(2*$a),3);
	
	echo "Phương trình có nghiệm kép: x = $rootrep ";
}

?>