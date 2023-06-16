<?php
// function update_

function check_authenticated(){
    if(!isset($_SESSION["USER"])){
        header("Location: ". ROOT . "/login");
        die;
    }
    return $_SESSION["USER"];
}

function authenticate_user($user){
    $_SESSION["USER"] = $user[0];
    header("Location: dashboard");
}

function query(string $query, array $data){
    $conn = create_database_connection();
    
    

    try{
        $stmt = $conn -> prepare($query);
        $stmt -> execute($data);
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
        return $e -> getMessage();
        die; 
    }

    if(is_array($result) && !empty($result)){
        return $result;
    }
    return false;
    
}

function create_database_connection(){
    $dsn = "mysql:hostname=".HOSTNAME;
    $conn = new PDO($dsn, $username=DBUSER, $password = DBPASS);

    $query = "USE " . DBNAME;
    $stmt = $conn -> prepare($query);
    $stmt -> execute();

    return $conn;
}




// create_database();
// create_tables();
// create_subject_table("biology");

function create_database(){
    $conn = create_database_connection();

    $query = "CREATE DATABASE IF NOT EXISTS " . DBNAME;
    $stmt = $conn -> prepare($query);
    $stmt -> execute();
}

function create_tables(){
    $conn = create_database_connection();

    

    // Users Table
    $query = "CREATE TABLE IF NOT EXISTS users(
        id int primary key auto_increment,
        first_name varchar(50) not null,
        last_name varchar(50) not null,
        email varchar(50) not null,
        password varchar(1024) not null,
        enrolled_courses text null,
        completed_courses text null,
        role varchar(20) default 'student',
        date_joined datetime default current_timestamp
        )";
    $stmt = $conn -> prepare($query);
    $stmt -> execute();

    // Subject_Overview Table
    $query = "CREATE TABLE IF NOT EXISTS subject_overview(
        id int primary key auto_increment,
        name varchar(200) not null,
        description text not null,
        picture text not null,
        topics text not null,
        category varchar(100) not null,
        table_name varchar(50) null
        )";
    $stmt = $conn -> prepare($query);
    $stmt -> execute();

    $conn = null;
}

function create_subject_table($table_name){
    $conn = create_database_connection();

    $query = "CREATE TABLE IF NOT EXISTS $table_name(
        users int null,
        grade float null    
        )";
    $stmt = $conn -> prepare($query);
    $stmt -> execute();

    $conn = null;
}