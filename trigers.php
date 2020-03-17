<?php
 function createUsterAfterRegistration(){
     insertUser=" INSERT INTO users (`userID`, `name`, `surname`,`descriptions`, `avatar`) 
         VALUES (
         (SELECT `IdOfUser` FROM `logindata` ORDER BY IdOfUser DESC LIMIT 1),
         $Name, $Surname,
         'I am new here.','img/defoultAvatar')";
 }


?>