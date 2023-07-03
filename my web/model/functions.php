<?php
function koneksi(){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "web_lanjut_c1_20090101003_adhlin"
    return mysqli_connect($server, $username, $password, $database)
}





?>