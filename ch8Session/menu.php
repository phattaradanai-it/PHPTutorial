<?php
  session_start();
    include "function_login.php";

    if(!(chk_session_login())){       // step4 check session
        echo "กรุณาลงชื่อเข้าใช้ระบบ<br>";
        echo "<a href='login.php'>Login</a>";
    }else{
        echo"Hello2".$_SESSION["username"]."<br>";
        echo"<a href='logout.php'>Logout</a>";
    }

?>