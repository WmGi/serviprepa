<?php
session_start();
unset($_SESSION["users"]);
header("location:indexs.php?err=1");
