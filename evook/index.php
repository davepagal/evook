<!DOCTYPE html>
<title>Login</title>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">

</head>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<!--login func-->
<?php
  require "db/config.php";
  session_start();

  //initiate vars
  $user = '';
  $pass = '';
  $id = '';

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    //get user and pass
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE username='".$user."'";
    $result = $conn->query($sql);
    $info = $result->fetch_assoc();

    //check if exist
    if($result->num_rows > 0){

      //pass check
      if($info['password'] == $pass){
        //logged in
        $_SESSION['name'] = $info['name'];
        echo "<script>
            alert('Login Success!');
            window.location.href = 'home.php';
        </script>";
      }
      else{
        echo "<script>alert('Username/Password is incorrect!')</script>";
      }

    }
    else{
      echo "<script>alert('Username/Password is incorrect!')</script>";
    }

  }
?>

<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>

              <form action="index.php" method="post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="user" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
  
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                  <label class="form-check-label" for="rememberPasswordCheck">
                    Remember password
                  </label>
                </div>
                <div class="d-grid">
                    <input type="submit" value="Sign In" class="btn btn-primary btn-login text-uppercase fw-bold">
                </div>
                <hr class="my-4">
                <a href="#">Forgot password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  
</html>