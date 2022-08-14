<?php
$answer = $_POST['circle'];  
if ($answer == "ans1") {          
    $_VAR="<img src='\images\properties\cercle-style.png'/>"; 
    echo $_VAR;
  
}
else {
    echo 'Incorrect';
}          
?>