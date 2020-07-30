<?php
    session_start();
    include "function_login.php";
      
    if(isset($_POST["login"])){  //step 2 check buttonlogin !=null
        chk_login();        //step3 define value put in session and check username
    }else{
        login_form();       //step1 add data
    }



?> 