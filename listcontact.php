<?php


if (isset($_SESSION["users"])) {


    $cnx = mysqli_connect("localhost", "root", "root", "surviprepa");
    $req = mysqli_query($cnx, "select * from users ");
    echo " <tr>";


    while ($don = mysqli_fetch_array($req)) {
        $id = $don["id"];

        echo "<td> {$don["name"]}   <a class=\"pop1\" id=\"$id\" href=\"sendingmessage.php\"><span class=\"badge1 pull-right\"><button >send</button></span><a>
        </td>";



        echo "</tr>";
    }
} else {
    echo " <tr>";
    echo "<td>vous devez connecte  </td>";
    echo "</tr>";
}
