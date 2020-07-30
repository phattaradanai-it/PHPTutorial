<?php
 
  function login_form(){
           $str_form =<<<HTMLBLOCK
           <form method ="post">
           Username: <input type="text" name="username"><br>
           Password: <input type="password" name="pwd"><br>
           <input name="login" type="submit" value="Login">
           </form>
           HTMLBLOCK; 
           echo $str_form;       //step1 add data
    }




    function chk_login(){
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        if($username=="admin" && $pwd=="12345"){         //step3 define value put in session and check username
        
            $_SESSION["username"] = $username;
            header("Location:menu.php");

        }else{
            echo"Username หรือ Password ไม่ถูกต้อง <br>";
            echo"<a href=login.php>ลงชื่อเข้าใช้ระบบ</a>";
        }
    }


    function chk_session_login(){                     
        if(isset($_SESSION["username"])) return true;     // step4 check session
        else return false;
    }



 

?>