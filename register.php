<!DOCTYPE html>
 <link href="css/sb-admin-2.min.css" rel="stylesheet">
<?php
session_start();
 // Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']== true))
{
	header('Location: index.php');
	exit();
}



// Include config file

require_once "connect.php";
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["FirstName"]))){
        $FirstName = "Please enter First Name.";
    } else{
        $FirstName = trim($_POST["FirstName"]);
    }
     // Check if Last Name is empty
    if(empty(trim($_POST["LastName"]))){
        $username_err = "Please enter LastName.";
    } else{
        $LastName = trim($_POST["LastName"]);
    }
     // Check if email is empty
    if(empty(trim($_POST["Email"]))){
        $username_err = "Please enter Email.";
    } else{
        $Email = trim($_POST["Email"]);
    }
    
    
    // Check if password is empty
    if(empty(trim($_POST["Password"]))){
        $password_err = "Please enter your password.";
    } else{
        $Password = trim($_POST["Password"]);
    }
    // Check if CheckPassword is empty
    if(empty(trim($_POST["CheckPassword"])) || (trim($_POST["CheckPassword"]))!=trim($_POST["Password"])){
        $password_err = "Passwords are not the same.";
    } else{
        $CheckPassword = trim($_POST["CheckPassword"]);
    }
    
    // Jeśli nie ma pustych pól to...
    if(empty($username_err) && empty($password_err)){
        echo "ok";
                if ($polaczenie->connect_errno!= 0){
									echo " <style type='text/css'>#form{background-color:red;}</style>Blad polaczenia z baza danych ".$polaczenie->connect_errno." opis ".$polaczenie->connect_error;
								}
						else{
				    if($polaczenie->query("SELECT name FROM `logindata` where name='$FirstName'"))
                    if ($polaczenie->query("INSERT INTO `logindata`( `name`, `password`,`email`) VALUES ('$FirstName','$Password','$Email')"))	
					{	
                     
                       
                        mkdir("UsersFoldres/$FirstName");
                        mkdir("UsersFoldres/$FirstName/Publications");

                        header("Location: login.php");
                        exit();
					}
					else
					{
						echo "osoba juz istnieje ";	
					}
							}	
    }
    
    // Close connection
    mysqli_close($polaczenie);
}    

?>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Chwal się wiedzą!</h1>
              </div>
            <!--registration form    -->
              <form class="user" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="FirstName" name="FirstName" placeholder="First Name">
                      </div>
                      <div class="col-sm-6">
                          <input type="text" class="form-control form-control-user" name="LastName" id="LastName" placeholder="Last Name">
                      </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="Email" name="Email" placeholder="Email Address">
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="password" class="form-control form-control-user" name="Password" id="Password" placeholder="Password">
                      </div>
                      <div class="col-sm-6">
                          <input type="password" class="form-control form-control-user" name="CheckPassword" id="CheckPassword" placeholder="Repeat Password">
                      </div>
                         
                    </div>
                  
                  <div class="form-group row">
                        <input type="text" class="form-control form-control-user" id="college" name="Uczelnia" placeholder="Uczelnia">
                    </div>
                    <hr>
                   <input type="submit" value="Rejestruj konto" class="btn btn-primary btn-user btn-block" />
                    
                   
                  <!--
                    <a href="index.php" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Register with Google
                    </a>
                    <a href="index.php" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                    </a>
              </form> -->
                <!-- END OF registration form    -->
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
