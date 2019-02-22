<?php

 function checkInput($input)
 {
     $input = htmlspecialchars($input);
     $input = trim($input);
     $input = stripcslashes($input);   
     return $input;        
 }

 
if(isset($_POST['submit'])){
    $name = checkInput($_POST['name']);

}


?>