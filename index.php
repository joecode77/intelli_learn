<?php
session_start();


$url = $_GET['url'] ?? "home";
$url = rtrim($url, "/");
// $url = explode("/", $url);


include("./app/core/settings.php");
include("./app/core/functions.php");
include("./app/core/urls.php");


if(isset(URL[$url])){
    include_once(URL[$url]);
}
else{
    include_once("./app/pages/404.php");
}

