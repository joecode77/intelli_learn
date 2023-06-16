<?php
$wrong_password = false;
if(isset($_POST["email"]) && isset($_POST["password"])){
  if(!empty($_POST["email"]) && !empty($_POST["password"])){

    $query = "SELECT * FROM users WHERE email=:email";
    $data = [
      "email" => $_POST["email"],
    ];
  
    $row = query($query, $data);

    if(is_array($row)){
      if(password_verify($_POST["password"], $row[0]["password"])){
        authenticate_user($row);
        die;
      }
      else{
        $wrong_password = true;
      }
    }
  }
}

?>

<?php
include("header.php");
?>

<div class="p-5"></div>




<div class="container mt-5">
  <h1 class="text-center text-muted">Log in</h1>
  <?php
  if($wrong_password){
    echo "<div class=\"alert alert-danger\">Incorrect Username of password</div>";
  }
  ?>
  
   <form class="mt-5" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <p>Don't have an account? <a href="signup">Sign up</a></p>
  <button type="submit" class="btn btn-primary" style="background-color: #4f46e5; color: #fff">Submit</button>
</form> 
</div>


</body>
<html>