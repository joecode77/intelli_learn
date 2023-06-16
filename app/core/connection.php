<?php

if(ROOT == "http://localhost/intellilearn"){
    $dsn = "mysql:hostname=localhost";
    $conn = new PDO($dsn, $username="root", $password = "");
}
else{
    $dsn = "mysql:hostname=";
    $conn = new PDO($dsn, $username="root", $password = "");
}
