<?php

$str1 = "A"; $str1 = "B"; $str1 = "C";
echo"Str: ".$str1;                      /////// string out



echo"<br>";
$array = array("A","B","C");
array_push($array,"D","E");
array_pop($array);
echo"Array1: ";
foreach($array as $key => $value){                    ///////////array1 out
    echo $key." ";
    echo $value." ";
}
echo"<br>";
echo count($array);



echo"<br>";
echo"<br>";
$array2 = array(
   "group1" => array("เรวดี","คุณาวุฒิ","ขวัญชัย"),
   "group2" => array("สมชาย","นิพล","ปัจจัย"),
   "group3" => array("พนารัตน์","วันทนี","วรรณสิริ")
);

echo"Array2: ";
foreach($array2 as $key => $value){          ////////////array2 out
    foreach($value as $key2 => $value2){
        echo $value2." ";
    }
}




echo"<br>";

$array3  =array(
    "Book1" => array("Pid" => "t001","Pname" => "VisulProgram","Price" => 250),
    "Book2" => array("Pid" => "t002","Pname" => "webProgram","Price" => 190),
    "Book3" => array("Pid" => "t003","Pname" => "database","Price" => 350),
    "Book4" => array("Pid" => "t004","Pname" => "CProgram","Price" => 180)
);
echo"<table><tr><th>ProductID</th><th>ProductName</th><th>Price</th></tr>";
foreach($array3 as $key => $value){          //////////////array3 out
    echo"<br>";
    foreach($value as $key2 => $value2){
        echo "<td>".$value2."</td>";
    }
    echo"</tr>";
}
echo"</table>";
print_r($array3);
echo"<br>";
echo"<br>";



$alphbets = range("A","Z");      //////array rage
rsort($alphbets);
foreach($alphbets as $value){
    echo $value;
}

echo"<br>";
echo"<br>";
?>

<form method="post">
    ป้อนชื่อนักศึกษาที่ต้องการค้นหา : <input type="text" name="keyword">
    <input type="submit" value="ค้นหา">
</form>

<?php

$Student = array("s001"=>"วนิตา","s002"=>"สมชาย","s003"=>"พรทิพย์");

$keyword = $_POST["keyword"];                     ///////form serch array

if(in_array($keyword,$Student)){
    echo"พบข้อมูล ".$keyword;
}else{
    echo"ไม่พบข้อมูล";
}





//////////////////////////////////////////////////TEST 

echo"<br>";
echo"<br>";
echo"<h3>test</h3>";
echo"strex = 1/3/2/5";
echo"<br>";


$strex="1/3/2/5"; 
//$arrName=list($num1, $num3, $num2, $num5) = explode("/", $strex);
$arrName = explode("/", $strex);
print_r($arrName);
rsort($arrName);
foreach($arrName as $key => $value){                    
    echo $value." ";
}


echo"<br>";
echo"<br>";
echo"strex2 = A-B-C-Z-D";
echo"<br>";
$strex2="A-B-C-Z-D"; 

$arrlow = list($ch1, $ch2, $ch3, $ch4 , $ch5) = explode("-", $strex2);
$arrup = array();
foreach($arrlow  as $key => $value){                    
   $valueup = strtolower($value);
   array_push($arrup,$valueup);
}
print_r($arrup );
rsort($arrup);
foreach($arrup as $key => $value){
    echo $value;
}


echo"<br>";
echo"<br>";
echo"strex2 = A-B-C-Z-D";
echo"<br>";
$strex3="A-B-C-Z-D"; 
$arrlow2 = list($ch1, $ch2, $ch3, $ch4 , $ch5) = explode("-", $strex2);
$result = array_map('strtolower',$arrlow2);
print_r($result);
rsort($result);
foreach($result as $key =>  $value){
    echo $value;
}



?>