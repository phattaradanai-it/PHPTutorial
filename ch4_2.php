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

  <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
  <style>
		body {
		  font-family: 'Kanit', sans-serif;
		}
		h5 {
		  font-family: 'Kanit', sans-serif;
		}
</style>

</head>
<body>

<form action="ch4_2out.php" method="post">
<div class="container border text-center"style="width:40%"; >

    <div class="row " style="background-color:#1aff1a;">
        <div class="col text-center">
        <h3> Funny Park Ticket Online </h3>
        </div>
    </div>

    <div class="row" >
        <div class="col-sm-6 text-right  border">
        <h5>เลือกวันที่จะซื้อ: 
        </div>

        <div class="col-sm-6 text-left  border">
        <input type="date" name="date" required></h5>
        </div>
    </div>


    <div class="row" >
        <div class="col text-right  border">
        <h5>เลือกเวลาที่จะซื้อ:</h5>
        </div>

        <div class="col text-left  border">
       <input type="time" name="time" required>
        </div>
    </div>

    <div class="row" >
        <div class="col text-right  border">
        <h5>จำนวนผู้ใหญ่:</h5>
        </div>

        <div class="col text-left  border">
       <input type="Number" name="Number1" required>
        </div>
    </div>

    <div class="row" >
        <div class="col text-right  border">
        <h5>จำนวนเด็ก:</h5>
        </div>

        <div class="col text-left  border">
        <input type="Number" name="Number2"  required >
        </div>
    </div>

    <div class="row" >
        <div class="col text-center  border">
        <input type="submit" value="คำนวณ">
        </div>

    </div>

<div>

</form>


<br>





</body>
</html>