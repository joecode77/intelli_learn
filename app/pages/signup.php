<?php
include("header.php");
?>

<div class="my-5 py-3"></div>

<?php

$errors = [];

// Validate first name
if(!isset($_POST["first_name"])){
    $errors["first_name"] = "Enter your first name";
}
else{
    if(empty($_POST["first_name"])){
        $errors["first_name"] = "Enter your first name";
    }
    else{
        if(!preg_match("/^([a-zA-Z]+)$/", $_POST["first_name"])){
            $errors["first_name"] = "Enter a valid first name. First name can only consist of alphabets";
        }
    }
}

// Validate last name
if(!isset($_POST["last_name"])){
    $errors["last_name"] = "Enter your last name";
}
else{
    if(empty($_POST["last_name"])){
        $errors["last_name"] = "Enter your last name";
    }
    else{
        if(!preg_match("/^([a-zA-Z]+)$/", $_POST["last_name"])){
            $errors["last_name"] = "Enter a valid last name. Last name can only consist of alphabets";
        }
    }
}


// Validate email
if(!isset($_POST["email"])){
    $errors["email"] = "Enter your email";
}
else{
    if(empty($_POST["email"])){
        $errors["email"] = "Enter your email";
    }
    else{
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $errors["email"] = "Enter a valid email address";
        }
    }
}

// Validate Password
if(!isset($_POST["password"])){
    $errors["password"] = "Enter a password";
}
else{
    if(empty($_POST["email"])){
        $errors["password"] = "Enter a password";
    }
    else{
        if(strlen($_POST["password"]) < 8){
            $errors["email"] = "Password must not be less that 8 characters";
        }
        else{
            $query = "SELECT id FROM users WHERE email = :email";
            if(query($query, ["email" => $_POST["email"]]) != false){
                $errors["email"] = "Email in use";
            }

        }
    }
}






function get_error($name){
    global $errors;
    if(!empty($_POST)){
        return $errors[$name] ?? "";
    }
    return ""; 
}

function getValue($name){
    if(isset($_POST[$name])){
        return $_POST[$name];
    }
}

if(empty($errors)){
    $data = [
        "first_name" => $_POST["first_name"],
        "last_name" => $_POST["last_name"],
        "email" => $_POST["email"],
        "password" =>  password_hash($_POST["password"], PASSWORD_DEFAULT)
    ];

    $query = "INSERT INTO users (
        first_name,
        last_name,
        email,
        password) VALUES (
            :first_name,
            :last_name,
            :email,
            :password
        )";

        $re = query($query, $data);
        echo $re;

        header("Location: login");
        die;
}


?>



<!-- <div class="p-5"></div> -->

<div class="container">
    <h1 class="text-muted text-center">Sign up</h1>
    <?php
    if(isset($re)){
        if($re == "ERROR"){
        echo "<div class=\"alert alert-danger\">ERROR: An error occured</div>";
    }
    }

    
    
    
    ?>
   <form method="post">
   <div class="mb-3">
    <label for="exampleFirstName" class="form-label">First name</label>
    <input type="text" class="form-control" id="exampleFirstname" name="first_name" value="<?= getValue("first_name")?>" required>
    <div id="exampleFirstname" class="form-text text-danger"><?= get_error("first_name")?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last name</label>
    <input type="text" class="form-control" id="exampleLastname" name="last_name" value="<?= getValue("last_name")?>" required>
    <div id="exampleLastname" class="form-text text-danger"><?= get_error("last_name")?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= getValue("email")?>" required>
    <div id="emailHelp" class="form-text text-danger"><?= get_error("email")?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?= getValue("password")?>" required>
    <div id="exampleInputPassword1" class="form-text text-danger"><?= get_error("password")?></div>
  </div>
<!-- 
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <p>Already have an account? <a href="login">Log in</a></p>
  <button type="submit" class="btn btn-primary" style="background-color: #4f46e5; color: #fff">Submit</button>
</form> 
</div>


</body>
<html>