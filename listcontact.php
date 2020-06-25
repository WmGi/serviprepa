<?php


if (isset($_SESSION["users"])) {


    $cnx = mysqli_connect("localhost", "root", "root", "surviprepa");
    $req = mysqli_query($cnx, "select * from users ");
    echo " <tr>";


    while ($don = mysqli_fetch_array($req)) {
        $id = $don["id"];

        echo "<td> {$don["name"]}   <span class=\"badge1 pull-right\"><button class=\"pop1\" id=\"$id\" >send</button></span>
        </td>";



        echo "</tr>";
    }
} else {
    echo " <tr>";
    echo "<td>vous devez connecte  </td>";
    echo "</tr>";
}
