<?php 
    echo"<h3>ex1 <br></h3>";
    $num1 =60; $num2 =7;
    echo "1.".$num1."%".$num2."=".$num1%$num2."<br>";

    $num2 =2; $num5 =5; $num3 =3; $num7 =7; $num4 =4;
    echo"2. $num2 + $num5 * $num3 - $num7 % $num4 / $num2 =".($num2 + $num5 * $num3 - $num7 % $num4 / $num2)."<br>";
   
    $num9 =9; $num2 =2; $num4 =4; $num5 =5; $num3 =3; 
    echo "3. $num9 * $num2 + $num4 % $num2 + $num5 - $num3 * $num5 / $num2 =" .( $num9 * $num2 + $num4 % $num2 + $num5 - $num3 * $num5 / $num2)."<br>";
    
    $num7=7; $num3=3; $num2=2; $num5=5; $num4=4;
    echo"4. $num7 - $num3 + $num2 * $num3 * $num5 / $num3 - $num4 =".( $num7 - $num3 + $num2 * $num3 * $num5 / $num3 - $num4)."<br>";

    $num20=20; $num2=2; $num5=5; $num3=3; $num7=7;
    echo"5. $num20 + $num2 * $num2 - $num5 % $num3 / $num2 +  $num7 =" .($num20 + $num2 * $num2 - $num5 % $num3 / $num2 +  $num7)."<br>";

    echo"<br><br>";
////////////////////////////////////////////////////////////////

    echo"<h3>ex2 </h3>";
    $x=20; $y=30.0; $z=30; $t=true; $f=false; 

    $result1 = ($x <= $y) && ($z !== $y) || $f;  //t
    var_dump($result1);
    //echo"1)".$result1;
    echo"<br>";

    $result2 = (!($t && $f) == ($t || ($y == $z))); //t
    var_dump($result2);
    //echo"2)".$result2;
    echo"<br>";

    $result3 = !($x <= $y) && $tว;   //f
    var_dump($result3);
    //echo"3)".$result3;
    echo"<br>";

    $result4 =  $f xor $t && ($y == $z) ?"TURE":"FALSE";
    var_dump($result4);
    //echo"4)".$result4;
    echo"<br>";
    

    $result5 = !(($y === $z) xor $f ) xor $t ?"TURE":"FALSE";
    var_dump($result5);
    //echo"5)". $result5;
    echo"<br><br>";


/////////////////////////////////////////////////////////////////////
    echo"<h3>ex3<br></h3>";
    $x = 10; $y = 10.0; $z = 20; 

    $value1 = (($y == $x)xor $t)?"Hello..":"Hi..";
    $value2 = (!(($z > $x) && ($x >= $y)) xor $f)?"Somebody": "Everybody";
    $value3 = (!(!($t || $f) && $t) xor ($x === $y)!= $f)?"Nice to meet you":"Bye bye";
    
    $value = $value1 . $value2;
    $value .= "<br/>";
    $value .= $value3;
    echo $value;
?>