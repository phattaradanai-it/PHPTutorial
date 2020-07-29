<?php    
include"ch6function.php";
?>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <title><?php head(); ?> </title>
    </head>

    <body>
        <?php 
            day(); 
            echo"<br>";
            manu();
        ?>

        <form  method="post">
            <div class="container">
                <h2>Admin</h2>
                    <div class="form-group">
                        <label for="email">UserName:</label>
                        <input type="text" class="form-control"  placeholder="Enter UserName" name="email">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control"  placeholder="Enter password" name="pswd">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div><br><br>

            
            <div class="container">
                <h2>Product</h2>
                    <div class="form-group">
                        <label for="product">SelectProduct:</label>
                        <select name="product" class="form-control">
                            <option value="">---เลือกสินค้า---</option>
                            <option value="A">สินค้าA</option>
                            <option value="B">สินค้าB</option>
                            <option value="C">สินค้าC</option>
                            <option value="D">สินค้าD</option>
                        </select>
                        <label for="number">Enter Count</label>
                        <input type="Number" class="form-control"  placeholder="ป้อนจำนวนสินค้า" name="number">
                    </div>
                    <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
            </div><br><br>



            <div class="container">
                <h2>ShowBook</h2>
                    <div class="form-group">
                        <label for="product">SelectBook:</label>
                        <select name="book" class="form-control">
                            <option value="">---เลือกรายการ---</option>
                            <option value="Book1">Book1</option>
                            <option value="Book2">Book2</option>
                            <option value="Book3">Book3</option>
                            <option value="Book4">Book4</option>
                        </select>
                    </div>
                    <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
            </div><br>



        </form>

                


        <div class="container border">
         
            <?php
            echo"<h3>output</h3>";
                if (isset($_POST['submit'])) {
                $u = $_POST["email"];
                $p = $_POST["pswd"];
                ch_login($u,$p);
                }
            ?>


            <?php
                if (isset($_POST['submit1'])) {
                    $product = $_POST['product'];
                    $number = $_POST['number'];
                    $price = find_price($product);

                    if( $_POST['number'] ==""){
                        $sum =  $price * 0;
                    }else{
                        $sum =  $price * $number;
                    }
                    
                    echo"สินค้า".$product."<br>";
                    echo"จำนวน". $number."ชิ้น<br>";
                    echo"ราคาต่อหน่วย".$price."บาท<br>";
                    echo"ราคารวม".$sum."บาท<br>";
                }
            ?>

            <?php
            if (isset($_POST['submit2'])){
                    $book = $_POST['book'];
                    
                    if($book !=""){
                        $detail = book_detail($book);
                        echo"รายละเอียดสินค้า<br>";
                        foreach($detail as $key => $value){
                            echo $key." : ".$value."<br>";
                        }

                    }
                }
            ?>

        </div>
 


    </body>
</html>