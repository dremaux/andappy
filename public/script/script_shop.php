<?php
$answer = $_POST['circle'];  
if ($answer == "ans1") { 
    $images = array(
        'images\properties\cercle-style.png',);         
    header('Location: https://projet-epsi-andappy.herokuapp.com/');
    exit();     
}
else {
    echo 'Incorrect';
}          
?>