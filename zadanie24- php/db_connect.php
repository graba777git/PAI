<?php
$conn = mysql_connect("localhost", "root", "");
if (!$conn){
    die("blad polonczenia");
}

$db_ok = mysql_select_db($conn, "gry_db");
?>