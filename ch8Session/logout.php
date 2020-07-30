<?php
    session_start();    // step4 logout
    session_destroy();
    echo"คุณได้ลงชื่ออกจากระบบเรียบร้อยแล้ว<br>";
    echo"<a href=login.php>ลงชื่อเข้าระบบใหม่</a>อีกครั้ง";


?>