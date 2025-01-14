<?php
include("dataconnection.php");
session_start();

//session_unset(); remove the data of all session variables

unset($_SESSION["sess_id"]);//remove this data

session_destroy();

header("location:index.php");
?>