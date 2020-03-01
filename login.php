<!DOCTYPE html>
<html lang="pl">
     <link href="css/sb-admin-2.min.css" rel="stylesheet">
<?php
   
session_start();
if(isset($_SESSION['blad']))
echo $_SESSION['blad'];
 if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']== true))
{
	header('Location: index.php');
	exit();
}   

 
// Check if the user is already logged in, if yes then redirect him to welcome page

 
// Include config file
require_once "connect.php";
//require_once "navibar.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Jeśli nie ma pustych pól to...
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT idOfUser, name, password FROM logindata WHERE name = ?";
        
        if($stmt = mysqli_prepare($polaczenie, $sql)or die(mysqli_error($polaczenie))){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    echo $id;
                    if(mysqli_stmt_fetch($stmt)){
                        if($password==$hashed_password){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                           // echo $password,"->",$hashed_password;
                            //if($password==$hashed_password){echo "<br>takie same";}
                            //else{echo "<br>różne";}
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            
        }
        
        // Close statement
         mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($polaczenie);
}    
    
    
    
    
    ?>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Witaj ponownie!</h1>
                  </div>
                    
                    
                    
                    
                  <form class="user" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                     
                    
                    <div class="form-group">
                      <input type="username" class="form-control form-control-user"  placeholder="Nazwa użytkownika" name="username">
                    </div>
                     
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user"  placeholder="Hasło" name="password">
                    </div>
                       
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                      
                    <input type=submit href="index.php" class="btn btn-primary btn-user btn-block" value="Login">
                    
                    <hr>
                    <a href="login.php" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="login.php" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                    
                    
                    
                    
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendors/jquery/jquery.min.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendors/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
