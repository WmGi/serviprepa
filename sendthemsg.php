<?php
session_start();
if (isset($_POST['submit'])) {

    $mess = $_POST['message'];
    $id = $_SESSION["id"];
    $lin = $_POST['numid'];



    $cnx = mysqli_connect("localhost", "root", "root", "surviprepa");
    $req = mysqli_query($cnx, "insert into messages  values({$id},{$lin},'{$mess}','')");

    header("location:profile3copy2.php?err=1");
} else {
    echo "ooooo";
}
