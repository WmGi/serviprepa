<?php

$radio_value = '1';
if (isset($_POST['submit'])) {
    try {
        @$radio_value = $_POST["groupOfDefaultRadios"];
    } catch (Exception $e) {

        $radio_value = '1';
    }
}

if (isset($_SESSION["users"])) {

    $cnx = mysqli_connect("localhost", "root", "root", "surviprepa");
    $req = mysqli_query($cnx, "select * from serietc where br='{$radio_value}'"); //crud read array $d["id] rows $d[0] object $d->id
    /*while ($don=mysqli_fetch_array($req)) {
                                                                     echo "<p> {$don["id"]} {$don["titre"]} {$don["prix"]} {$don["qte"]}</p>";
                                                                  }*/
    echo " <tr>";


    while ($don = mysqli_fetch_array($req)) {
        echo "<td><i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i></td>";
        echo "<td> {$don["nom"]} </td>";
        echo "<td> {$don["date"]} </td>";
        echo "<td></td>";

        echo "<td>  </td>";
        echo "<td> <a href='{$don["download"]}' download=\"\" ><button class=\"btn  supbtn\">download</button></a></td>";
        echo "</tr>";
    }
} else {
    echo " <tr>
                                                                      <td> <i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i></td>";
    echo "<td>vous devez connecte  </td>";
    echo "</tr>";
}
