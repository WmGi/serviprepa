<?php
if (isset($_SESSION["users"])) {
    $id = $_SESSION["id"];

    $cnx = mysqli_connect("localhost", "root", "root", "surviprepa");
    $req = mysqli_query($cnx, "select * from messages where tol={$id}");
    $number = 0;
    while (mysqli_fetch_array($req)) {
        $number++;
    }


    echo "<p><a class=\"inbox\" href=\"inbox.php\">INBOX<a><span class=\"badge pull-right\">$number</span>
     <p>";
}
