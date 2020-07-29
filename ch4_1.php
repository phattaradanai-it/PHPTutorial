<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>


<body>
<h2>Form Score</h2>
<form method="post">
ป้อนคะแนนกลางภาค:<input type="Number" size="30" name="num1"><br><br>
ป้อนคะแนนปลายภาค:<input type="Number" size="30" name="num2"><br><br>

<h3>-------------------------------------------------------------</h3>
<h2>Form Product</h2>
เลือกประเภทสินค้า
<select name="product">
<option value="A">สินค้าA</option>
<option value="B">สินค้าB</option>
<option value="C">สินค้าC</option>
<option value="D">สินค้าD</option>
</select>

เลือกจำนวน<input type="Number" name="qry"> <br>
<input type="submit"> <input type="reset">

</form>

<div class="container border">


<?php

$sc_m = $_POST["num1"];
$sc_f = $_POST["num2"];

$sc_total = $sc_m + $sc_f;

if($sc_total >= 80){
    echo"<b>Form Score</b><br>";
    echo"คะแนนรวม ".$sc_total;
    echo" Gread A<br><br>";
}else if($sc_total >=70 ){
    echo"<b>Form Score</b><br>";
    echo"คะแนนรวม ".$sc_total;
    echo" Gread B<br><br>";
}else if($sc_total >=60){
    echo"<b>Form Score</b><br>";
    echo"คะแนนรวม ".$sc_total;
    echo" Gread C<br><br>";
}else if($sc_total >=50){
    echo"<b>Form Score</b><br>";
    echo"คะแนนรวม ".$sc_total;
    echo" Gread D<br><br>";
}else{
    echo"<b>Form Score</b><br>";
    echo"คะแนนรวม ".$sc_total;
    echo" Gread F<br><br>";
}

?>



<?php
    $product = $_POST["product"];
    $qry = $_POST["qry"];
    $price=0;

    switch($_POST["product"]){
        case "A": $price=1000; break;
        case "B": $price=500; break;
        case "C": $price=200; break;
        case "D": $price=100; break;
        
    }
  
    $sum = $price * $qry;
    echo"<b>Form Product</b><br>";
    echo"ราคารวม = ".$sum;


?>

</div>


</body>
</html>