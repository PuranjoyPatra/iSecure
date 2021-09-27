<?php
    $ShowAlert=false;
    $ShowErr=false;
if ($_SERVER['REQUEST_METHOD']=="POST") {
    include "_dbconnect.php";
    $uname=$_POST["uname"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    // $exist=false;
    $existsql="Select * from user WHERE uname='$uname'";
    $result=mysqli_query($conn,$existsql);
    $numexistrow=mysqli_num_rows($result);

    if($numexistrow>0)
    {
      $ShowErr="Username is alrady exist";
      
    }
    else {
      if ($password==$cpassword) {
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO `user` (`uname`, `password`, `dt`) VALUES ('$uname', '$hash', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if ($result) {
            $ShowAlert=true;
        }
      }
      else {
        $ShowErr="Password do not Match.";
      }
   }
        

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Sign Up Page</title>
  </head>
  <body>
      <?php include "_nav.php"; ?>

      <?php
      if ($ShowAlert) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your account is created and now log in to continue..!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
          
    }
    if($ShowErr){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$ShowErr.' 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
          
    }
    ?>
    <div class="container mt-3">
        <h1 class="text-center" >Please Sign Up to our Website.</h1>
    <form action="signup.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name:</label>
    <input maxlength="11" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
    <input maxlength="22" type="password" class="form-control" id="exampleInputPassword1" name="password">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Confirm Password:</label>
    <input maxlength="22" type="password" class="form-control" id="exampleInputPassword1" name="cpassword">
    <small id="emailHelp" class="form-text text-muted">Password and confirm password should be matched.</small>
</div>

  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>