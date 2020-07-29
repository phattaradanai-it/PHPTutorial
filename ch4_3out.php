<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>


<div class="container-fluid p-3 my-3  text-left">
<h3><p style="color:#d147a3 ">ค่าบริการโทรศัพท์เคลื่อนที่</p></h3>
</div>

<div class="container-fluid text-left">

    <div class="row" >
        <div class="col-sm-3 text-right border">
        <h5>เบอร์โทรศัพท์ :</h5>
        </div>

        <div class="col-sm-9 text-left  border">
            <?php
                echo $_POST["PhoneNumber"];
            ?>
        </div>
    </div>

    <div class="row" >
        <div class="col-sm-3 text-right border">
        <h5>จำนวนนาทีที่โทร:</h5>
        </div>

        <div class="col-sm-9 text-left  border">
            <?php
                echo $_POST["countcall"];
                echo" นาที";
            ?>
        </div>
        
    </div>

    <div class="row" >
        <div class="col-sm-3 text-right border">
        <h5>จำนวน SMS :</h5>
        </div>

        <div class="col-sm-9 text-left border ">
            <?php
                echo $_POST["countsmsfile"];
                echo" ครั้ง";
            ?>
        </div>
        
    </div>



<?php
                         //////////////////infomation promotion and define smsprice

 if($_POST["promotion"] == "A" ){
     $namepromotion = "โทรคุ้มเลือกได้";
     $callmount = 200;
     $callmountpro =200;
     $calllimit= 1.50;
     $smslimit= 1.50;
     $countsmsnull="-";
     if($_POST["sms"]== "50sms"){
         $Sprice = 50;
        $countsms=50;
     }else if ($_POST["sms"]== "120sms"){
        $Sprice = 100;
        $countsms=120;
     }else{
        $Sprice = 0;
        $countsms=0;
     }

 }else if($_POST["promotion"] == "B"){
    $namepromotion = "สุดคุ้มเลือกได้";
    $callmount = 500;
    $callmountpro =600;
    $calllimit= 1.00;
    $smslimit= 1.50;
    //$countsms=10;
    if($_POST["sms"]== "50sms"){
        $Sprice = 50;
        $countsms=60;
    }else if ($_POST["sms"]== "120sms"){
        $countsms=130;
        $Sprice = 100;
     }else{
        $Sprice = 0;
        $countsms=10;
     }

 }else if($_POST["promotion"] == "C"){
    $namepromotion = "คุ้มค่าเลือกได้";
    $callmount = 800;
    $callmountpro =1000;
    $calllimit= 0.75;
    $smslimit= 1.50;
    //$countsms=20;
    if($_POST["sms"]== "50sms"){
        $Sprice = 50;
        $countsms=70;
    }else if ($_POST["sms"]== "120sms"){
        $countsms=140;
        $Sprice = 100;
     }else{
        $Sprice = 0;
        $countsms=20;
     }

 }else if($_POST["promotion"] == "D"){
    $namepromotion = "คุ้มค่าเหมาเหมา";
    $callmount = 1000;
    $callmountpro =2000;
    $calllimit= 0.50;
    $countsmsnull="ไม่จำกัด";
    if($_POST["sms"]== "50sms"){
        $Sprice = 0;
        $countsms=0;
    }else if ($_POST["sms"]== "120sms"){
        $countsms=100;
        $Sprice = 0;
     }else{
        $Sprice = 0;
        $countsms=0;
     }
}


?>


<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
th {
  text-align: left;
}
</style>

<table style="width:100% " >          
  <tr style="background-color:#1aff1a;">
    <th>รหัสโปรโมชั่น</th>
    <th>ชื่อโปรโมชั่น</th> 
    <th>ค่าโทรรายเดือน</th>
    <th>จำนวนที่โทรได้ในโปรโมชั่น</th>
    <th>อัตราค่าโทรเกิน</th> 
    <th>ฟรี SMS</th>
  </tr>

  <tr>
    <td><?php echo $_POST["promotion"];  ?></td>
    <td><?php  echo $namepromotion;      ?></td>
    <td><?php  echo $callmount;           ?></td>
    <td><?php  echo $callmountpro;        ?></td>
    <td><?php  echo $calllimit;           ?></td>
    <td><?php  
                                                    //////////////////////////////////////show infomation promotion
                    if($_POST["promotion"] == "D"  ){
                        echo $countsmsnull;
                    }else if($_POST["promotion"] == "A" && $_POST["sms"]== "ไม่เพิ่มSMS"){
                        echo $countsmsnull;
                    }else{
                        echo  $countsms;
                    }
                  
     ?></td>
  </tr>

</table>

                

    <div class="row" >
        <div class="col-sm-3 text-right border">
        <h5>จำนวนนาทีที่โทรเกิน :</h5>
        </div>

        <div class="col-sm-9 text-left  border">
            <?php
            /////////////////////calculate PricePhone
                $sumcall = $callmountpro - $_POST["countcall"];
               if($sumcall > 0){
                $sumcall=0;
                $pricephonecall=0;
                echo $sumcall;
                echo" นาที";
                echo"(เป็นเงิน".$pricephonecall."บาท)";
               }else{
                echo ABS($sumcall);
                $pricephonecall =ABS($sumcall)*$calllimit;
                echo" นาที";
                echo"(เป็นเงิน".$pricephonecall."บาท)";
               }      
               /////////////////////////////////////////
            ?>
        </div>

    </div>


    <div class="row" >
        <div class="col-sm-3 text-right border">
        <h5>จำนวนSMSที่เกิน :</h5>
        </div>

        <div class="col-sm-9 text-left  border">
            <?php
                  /////////////////////calculate PriceSMS
                    if($_POST["promotion"] == "D"){
                        $sumsms=0;
                        $pricesms =0;
                        echo $sumsms;
                        echo" ครั้ง";
                        echo" (เป็นเงิน".$pricesms;
                        echo "บาท)";
                    }else{
                        $sumsms = $countsms - $_POST["countsmsfile"];
                        if($sumsms >0){
                            $sumsms=0;
                            $pricesms =0;
                            echo $sumsms;
                            echo" ครั้ง";
                            echo" (เป็นเงิน".$pricesms;
                            echo "บาท)";
                        }else{
                         echo ABS($sumsms);
                         echo" ครั้ง";
                         echo" (เป็นเงิน".$pricesms =ABS($sumsms)* $smslimit;
                         echo "บาท)";
                        }        
                    }   
               
            ?>
        </div>
    </div>


    <div class="row" >
        <div class="col-sm-3 text-right border">
        <h5>ค่าโทรรวม :</h5>
        </div>

        <div class="col-sm-9 text-left border ">
            <?php
                $totalPrice = $callmount+$Sprice+$pricephonecall+$pricesms;
                echo $totalPrice;
                echo" บาท";
            ?>
        </div>
        
    </div>


    <div class="row" >
        <div class="col-sm-3 text-right border">
        <h5>ภาษีมูลค่าเพิ่ม 7% :</h5>
        </div>

        <div class="col-sm-9 text-left border ">
            <?php
                $vat = ($totalPrice*7)/100;
                echo $vat;
                echo" บาท";
            ?>
        </div>
        
    </div>


    <div class="row" >
        <div class="col-sm-3 text-right border">
        <h5>ค่าโทรรวมสุทธิ :</h5>
        </div>

        <div class="col-sm-9 text-left border ">
            <?php
                $Summery = $totalPrice +$vat;
                echo $Summery;
                echo" บาท";
            ?>
        </div>
        
    </div>


</div>