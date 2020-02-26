  <!-- Login.php -->
<?php
session_start();

  if(empty($_POST["name"] || empty($_POST["email"]) || empty($_POST["password"]))){
    echo "Empty";
    header('Location: login.html');
  }
  $name = "/^[a-zA-Z]*$/";
  if(!preg_match($name, $_POST["name"])){
    header('Location: login.html');
    exit;
  }
  $email = ("/([\w\-]+\@[\w\-]+\.[\w\-]+)/");
  if(!preg_match($email, $_POST["email"])){
    header('Location: login.html');
    exit;
  }
  if(strlen($_POST["password"]) < 6){
    header('Location: login.html');
    exit;
    
  }
  $_SESSION["usrname"] = $_POST["name"];
  $_SESSION["mail"] = $_POST["email"];
  $_SESSION["pwd"] = $_POST["password"];
  $_SESSION["count"] = 1;
  header('Location: welcome.php');
  exit;

?>
