<?php
function do_login($nama , $pass){
  if($nama != "amy" ||  $pass != "2701"){
    header("location:login1.php?error=wrong");
  }
  if($nama == "amy" &&  $_POST["pass"] == "2701"){
    $_SESSION["user"] = $nama;
    $_SESSION["pass"] = $pass;
    header("location:login2.php");
  }
}
function check_login(){
  if(!isset($_SESSION["user"])){
    header("location:login1.php");
  }
}

 ?>