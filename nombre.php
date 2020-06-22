<?php

$lin = $_POST['var_value'];
$cnx = mysqli_connect("localhost", "root", "root", "surviprepa");
$req = mysqli_query($cnx, "select * from serietc where download='{$lin}'");
$don = mysqli_fetch_array($req);
$m = $don["nb"] + 1;
$req = mysqli_query($cnx, "update serietc set nb = '{$m}' where download='{$lin}'");
