<?php
    setcookie("login",1,time()-3600);
    header("location:login.php");
?>