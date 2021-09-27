<?php
    $login=false;
    $ShowErr=false;
if ($_SERVER['REQUEST_METHOD']=="POST") {
    include('_dbconnect.php');
    $uname=$_POST["uname"];
    $password=$_POST["password"];
    
    
    $sql="Select * from user where uname='$uname'";
    $result=mysqli_query($conn,$sql);
    // echo var_dump($result);
    $num=mysqli_num_rows($result);
    if ($num==1) {
        while ($row=mysqli_fetch_assoc($result)) {
          if(password_verify($password,$row['password']))
          {
            $login=true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['usrname']=$uname;
            header("location:index.php");
          }
          else{
            $ShowErr="Invalid Credintials.";
          }
          
        }
        
      }
      else {
        $ShowErr="Invalid Credintials.";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Log in Page</title>
</head>

<body>
    <?php include('_nav.php'); ?>
    <?php 
       if ($login) {
           header("location:index.php");
       } 
       if ($ShowErr) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$ShowErr.' Unable to log in.Try again.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
       }   
    ?>



    <div class="container my-4">
        <h1 class="text-center">Log In to our Website.</h1>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">User Name:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="uname">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password:</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>


            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>