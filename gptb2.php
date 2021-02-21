<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phương trình bậc 2</title>
</head>
<body>
<h1>Giải phương trình bậc 2</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for="fname">Nhập a: </label>
<input type="text" size = "10" name = "a">
<label for="fname">Nhập b: </label>
<input type="text" name = "b">
<label for="fname">Nhập c: </label>
<input type="text" name = "c">
<input type ="submit" name ="cmdSubmit" value = "Gui thong tin">
</form>

<?php
$a="";
$b="";
$c="";


if(isset($_POST["a"])) {
	$a=$_POST["a"];
}

if(isset($_POST["b"])) {
	$a=$_POST["b"];
}

if(isset($_POST["c"])) {
	$a=$_POST["c"];
}



//  in ra phuong trình
echo  $a."x² + ".$b."x + ".$c." = 0<p>";

// Gán biến và tính delta
$delta=($b*$b)-(4*$a*$c);


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
</body>
</html>