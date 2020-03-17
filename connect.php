<?php
	$host = "localhost";
	$db_user = "UBW_user";
	$db_password = "5LZfxQdNEon9TJcm";
	$db_name = "UBW";
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name); 
     
	 
	 try {
	
        $pdo = new PDO('mysql:host=localhost; dbname=UBW; encoding=utf8', 'UBW_user', '5LZfxQdNEon9TJcm');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
    } catch( PDOException $e ) {
        echo 'ERROR: ' . $e->getMessage();        
    } 
	 
	 
	 
?>
