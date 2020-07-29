<?php
function head(){
    echo"Hello Title";
}

function footer(){
    echo"Contact:Phattaradanai<br>";
    echo"Thai Suranare univercity";
}


function day(){

$day = array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");

$month = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");

echo" วัน ".$day[date('w')];
echo" เดือน ".$month[7];
echo" ปี 2563";
}

function manu(){
    echo"<ul>";
    echo"<li><a href='https://www.google.com/'>google</a></li>";
    echo"<li><a href='https://www.youtube.com/'>youtube</a></li>";
    echo"<li><a href='https://web.facebook.com/'>facebook</a></li>";
    echo"</ul>";
}



function ch_login($u,$p){
    if($u =="" && $p ==""){
        echo"<h3>กรุณาป้อนข้อมูล</h3>";
    }else if($u =="admin" && $p=="123456"){
        echo"<h3>ยินดีต้อนรับ</h3>";
    }else{
        echo"<h3>ข้อมูลไม่ถูกต้อง</h3>";
    }

}


function find_price($code){
    switch($code)
    {
        case'A' : $price = 1000; break;
        case'B' : $price = 500; break;
        case'C' : $price = 300; break;
        case'D' : $price = 100; break;
        default : $price = 0;break;
    }
    return $price;
}


function book_detail($book){
    $books  =array(
        "Book1" => array("Pid" => "t001","Pname" => "VisulProgram","Price" => 250),
        "Book2" => array("Pid" => "t002","Pname" => "webProgram","Price" => 190),
        "Book3" => array("Pid" => "t003","Pname" => "database","Price" => 350),
        "Book4" => array("Pid" => "t004","Pname" => "CProgram","Price" => 180)
    );

    foreach($books as $key => $value){
        if($key == $book){
            return $value;
        }
    }
   
}

?>