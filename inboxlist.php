<?php



if (isset($_SESSION["users"])) {
    $id = $_SESSION["id"];
    $cnx = mysqli_connect("localhost", "root", "root", "surviprepa");
    $req = mysqli_query($cnx, "select * from messages where tol={$id}"); //crud read array $d["id] rows $d[0] object $d->id
    /*while ($don=mysqli_fetch_array($req)) {
                                                                     echo "<p> {$don["id"]} {$don["titre"]} {$don["prix"]} {$don["qte"]}</p>";
                                                                  }*/
    echo " <tr>";


    while ($don = mysqli_fetch_array($req)) {
        $c = $don['from'];
        $req2 = mysqli_query($cnx, "select * from users where id={$c}"); //crud read array $d["id] rows $d[0] object $d->id
        $don2 = mysqli_fetch_array($req2);
        echo "<td> {$don2["name"]} </td>";
        echo "<td></td>";
        echo "<td> {$don["msg"]} </td>";
        echo "</tr>";
    }
}
