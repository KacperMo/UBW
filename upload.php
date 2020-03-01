<?php
//if($_SERVER["REQUEST_METHOD"] == "POST"){
//$target_dir = "UsersFoldres/annonymus/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

@session_start();
  // Ttakeing user date ------------------------------------------------
    if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']== true))
    {
        $username=$_SESSION["username"];
        exit();
    }else{
         $randomNumber = rand(); 
         $username="AnonymusPublication".$randomNumber;
     }  
    
    
// End of takeing user date ------------------------------------------------

//sednFileToServer("uploadJPG",$username);
//sednFileToServer("uploadPDF",$username);
insertArticleData($username);

function sednFileToServer($fileType,$username){
    
   
    
    if (!file_exists("UsersFoldres/".$username."/"))
    {
    mkdir("UsersFoldres/".$username."/");
    }
    $target_dir = "UsersFoldres/".$username."/";
    $target_file = $target_dir . basename($_FILES[$fileType]["name"]);
    $uploadOk = 0;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    echo $_FILES[$fileType]["name"]."<br>";
    echo $_FILES[$fileType]["tmp_name"]."<br>";
    echo $_FILES[$fileType]["size"]."<br>";
    

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES[$fileType]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 0;
        } else {
            echo "File is not an image.";
            $uploadOk = 1;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Przepraszam, plik o tej nazwie już ustnieje.";
        $uploadOk = 1;
    }
    // Check file size
    if ($_FILES[$fileType]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 1;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "pdf") {
        echo "Sorry, only JPG, JPEG, PDF files are allowed.";
        $uploadOk = 1;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 1) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$fileType]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES[$fileType]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    //insertArticleData($username);
} 

function insertArticleData($src){
    require_once "connect.php";
    
// Define variables and initialize with empty values
    echo $_POST["Title"];
$Title=$_POST["Title"];
$Tags=$_POST["Tags"];
$Category=$_POST["Category"];
$TextArea=$_POST["TextArea"];


 // Checking area is anything empty------------------------------------------------
    //zastąpić funkcją i pentlą sooooonnnn--------------------------!!!!!!!!!
                        // Check if username is empty
                      //  if(empty(trim($_POST["Tite"]))){
                      //     $username_err = "Please enter Tite.";
                    //    } else{
                     //       $FirstName = trim($_POST["Tite"]);
                     //   }
                         // Check if Tags
                     //   if(empty(trim($_POST["Tags"]))){
                     //       $Tags_err = "Please enter Tags.";
                     //   } else{
                     //       Tags = trim($_POST["Tags"]);
                    //    }
    
                         // Check if Category is empty
                   //     if(empty(trim($_POST["Category"]))){
                  //          $Category_err = "Please enter Category.";
                  //      } else{
                   //         $Category = trim($_POST["Category"]);
                   //     }


                        // Check if TextArea is empty
                    //    if(empty(trim($_POST["TextArea"]))){
                     //       $TextArea_err = "Please enter TextArea.";
                    //    } else{
                     //       $TextArea = trim($_POST["TextArea"]);
                     //   }
    // End of checking-------------------------------------------------------
    
    
    // Jeśli nie ma pustych pól to...
    if(empty($username_err) && empty($password_err)){
        echo "ok";
                if ($polaczenie->connect_errno!= 0){
                    
				        echo " <style type='text/css'>#form{background-color:red;}</style>Blad polaczenia z baza danych ".$polaczenie->connect_errno." opis ".$polaczenie->connect_error;
				}else{
                    
				  //  if($polaczenie->query("SELECT name FROM `logindata` where name='$FirstName'"))
                    
                    // zrobić 1 src a nie 2 do img i do pdf...
                    if ($polaczenie->query("INSERT INTO `publications`( `img`, `title`, `cetegproes`, `retailBranch`, `PDFsrc`, `Description`) VALUES ('$src','$Title','$Tags','$Category','$src','$TextArea');"))
					{	
                     
                      echo "poszło i all git";
                        header("Location: addsolutions.php");
                        exit();
					}
					else
					{
						echo "coś poszło nie tak ";	
					}
							}	
    }
    
    // Close connection
    mysqli_close($polaczenie);
   



    
    
    
    
    
    
}

function isSmthEmpty($dataToCheck){
    // add $username_err etc;
    $chcecked="";
     if(empty(trim($_POST[$dataToCheck])))
     {
        $chcecked = 'Please enter"."$dataToCheck".';
     } else{
        $chcecked = trim($_POST[$dataToCheck]);
     }
    
    return($chcecked);
}
//End of if($_SERVER["REQUEST_METHOD"] == "POST"){
//}





?>
