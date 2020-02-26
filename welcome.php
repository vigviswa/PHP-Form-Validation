<?php
session_start();
echo "<div style: style='text-align: center;border: 10px solid black;'>";
echo "<h1>Hello Welcome To Website</h1> <br>";

if(isset($_SESSION["usrname"]) && isset($_SESSION["pwd"]) && isset($_SESSION["mail"])){
  echo "<h3> Welcome: <br>\n </h3>" . $_SESSION["usrname"];
  echo "<br>Page Visits Today: " . $_SESSION["count"];
  $_SESSION["count"]++;
}
else{
  header('Location: login.html');
  exit;
}
echo "<br> ";
echo "<a href='logout.php'> Sign Out </a>"


?>
