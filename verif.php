<?php
require_once('settings.php');
require_once('google-login-api.php');
session_start();



if ((!empty($_GET["email"])) && (!empty($_GET["password"]))) {
    $email = $_GET["email"];
    $password = $_GET["password"];
    $cnx = mysqli_connect("localhost", "root", "root", "surviprepa");
    $req = mysqli_query($cnx, "select * from users where email='{$email}' and password='{$password}'");
    $nb = mysqli_num_rows($req);
    if ($nb == 0) {

        header("location:indexs.php?err=2");
    } else {
        $d = mysqli_fetch_array($req);
        $_SESSION["users"] = $d["name"];
        header("location:profile.php");
    }
} else {

    if (isset($_GET['code'])) {
        try {
            $gapi = new GoogleLoginApi();

            // Get the access token 
            $data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);

            // Get user information
            $user_info = $gapi->GetUserProfileInfo($data['access_token']);
            $email = $user_info["email"];
            $password = $user_info["id"];
            $name = $user_info["name"];
            $image = $user_info["picture"];
            // $image = base64_encode(file_get_contents($image));

            $cnx = mysqli_connect("localhost", "root", "root", "surviprepa");
            $req = mysqli_query($cnx, "select * from users where email='{$email}' and password='{$password}'");
            $nb = mysqli_num_rows($req);
            if ($nb == 0) {
                $req = mysqli_query($cnx, "insert into users values('{$email}','{$password}','{$name}','{$image}','')");
                $req = mysqli_query($cnx, "select * from users where email='{$email}' and password='{$password}'");
                $d = mysqli_fetch_array($req);
                $_SESSION["users"] = $d["name"];
                $_SESSION["pic"] = $d["img"];

                header("location:profile.php");
            } else {
                $req = mysqli_query($cnx, "select * from users where email='{$email}' and password='{$password}'");
                $d = mysqli_fetch_array($req);
                $_SESSION["users"] = $d["name"];
                $_SESSION["pic"] = $d["img"];
                header("location:profile.php");
            }
        } catch (Exception $e) {


            header("location:indexs.php");
        }
    }
}
