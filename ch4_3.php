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


<form action="ch4_3out.php" method="post">
<div class="container border text-center"style="width:60%"; >

  
    <div class="row " style="background-color:#28E35A;">
        <div class="col text-center">
        <h3> ABC Mobile Package </h3>
        </div>
    </div>
    <br>
    <div class="row" >
      
        <div class="col-sm-6 text-right  ">
        <label for="PhoneNumber">เบอร์โทรศัพท์:</label>
        </div>

        <div class="col-sm-6 text-left  ">

            <div class="form-group">
             <input type="text" class="form-control" id="PhoneNumber" placeholder="Enter PhoneNumber" name="PhoneNumber" required>
            </div>

        </div>
    </div>

    <div class="row" >
        <div class="col-sm-6 text-right ">
        <label for="promotion">เลือกโปรโมชั่น:</label>
        </div>
        <div class="col-sm-6 text-left  ">
        <div class="form-group">
        <select class="form-control" name="promotion" required>
             <option value="A">โทรคุ้มเลือกได้</option>
             <option value="B">สุดคุ้มเลือกได้</option>
             <option value="C">คุ้มค่าเลือกได้</option>
             <option value="D">คุ้มค่าเหมาเหมา</option>
        </select>
        </div>
        </div>

    </div>

    <div class="row" >
        <div class="col-sm-6 text-right  ">
        <label for="sms">แพ็กเกตเสริม SMS::</label>
        </div>

        <div class="col-sm-6 text-left  ">
        <div class="form-group">
        <input name="sms" type="radio"  value="50sms" required>50 SMS
         <input name="sms" type="radio" value="120sms" required>120 SMS
         <input name="sms" type="radio" value="ไม่เพิ่มSMS" required>ไม่เพิ่ม SMS
        </div>
        </div>
    </div>



    <div class="row" >
        <div class="col-sm-6 text-right " required>
        <label for="sms">จำนวนนาทีที่โทร:</label>
        </div>

        <div class="form-group">
        <div class="col-sm-6 text-left ">
        <input type="Number" class="form-control" name="countcall" required>
        </div>
        </div>

    </div>

    <div class="row" >
        <div class="col-sm-6 text-right ">
        <label for="sms">จำนวนSMS:</label>
        </div>

        <div class="form-group">
        <div class="col-sm-6 text-left  ">
        <input type="Number" class="form-control" name="countsmsfile" required>
        </div>
        </div>
    </div>

    
    <div class="row" style="background-color:#28E35A;" >
        <div class="col text-center  border">
        <button type="submit" class="btn btn-primary">คำนวณ</button>
        </div>

    </div>

<div>
</form>



   



  

</body>
</html>