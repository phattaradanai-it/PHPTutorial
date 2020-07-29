<?php
  echo"วันที่ซื้อ: "; 
  echo $_POST["date"];
  echo"<br>"; 

  echo"เวลาที่ซื้อ: "; 
  echo $_POST["time"];
  echo"<br>"; 

 $day = date('l', strtotime($_POST["date"]));

 //////////////////////////////////

if( $day =="Saturday" || $day =="Sunday"){

    if($_POST["time"] > 10.00 &&  $_POST["time"] < 15.00){
        $PriceAdult = 300;
        $PriceChild = 170;
    }else if($_POST["time"] > 10.00 &&  $_POST["time"] < 18.00){
        $PriceAdult = 350;
        $PriceChild = 200;
    }else if($_POST["time"] > 10.00 &&  $_POST["time"] < 22.00){
        $PriceAdult = 450;
        $PriceChild = 250;
    }

}else{
    $PriceAdult = 250;
    $PriceChild = 150;
}

/////////////////////////////////



  echo"บัตรผู้ใหญ่: "; 
  echo $PriceAdult; echo" บาท";
  echo"(จำนวน"; echo $_POST["Number1"]; echo"ใบ)";
  $totalAdult = $_POST["Number1"];
  echo"<br>"; 

  echo"บัตรเด็ก: "; 
  echo $PriceChild; echo" บาท";
  echo"(จำนวน"; echo $_POST["Number2"]; echo"ใบ)";
  $totalChild = $_POST["Number2"];
  echo"<br>"; 
  
  
  $SumAdult = $PriceAdult*$totalAdult;
  $SumChild = $PriceChild*$totalChild;
   $SumAll = $SumAdult  +   $SumChild;

  echo"รวมเงิน: "; 
  echo $SumAll; echo" บาท";



?>