<?php
$email = $_GET["email"];
$password = $_GET["password"];
$name = $_GET["name"];
$password1 = $_GET["password1"];
if (strcmp($password, $password1) < 0) {
  echo "mot de";
  header("location:indexs.php?err=3");
} else {
  $cnx = mysqli_connect("localhost", "root", "root", "surviprepa");
  $req = mysqli_query($cnx, "insert into users values('{$email}','{$password}','{$name}')"); //string entre cote 

  header("location:indexs.php?err=4");
}
