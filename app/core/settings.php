<?php
define("DEBUG", true);
// define("DEBUG", false);
define("TEMPLATES", "./app/pages/");  

if(DEBUG){
    define("ROOT", "http://localhost/intellilearn");
    define("HOSTNAME", "localhost");
    define("DBNAME", "intellilearn_db");
    define("DBUSER", "root");
    define("DBPASS", "");
}



