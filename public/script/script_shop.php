<?php

if (isset($_POST['radio'])) { // if options was checked
    echo $_POST['radio'];
 } // echo the choice 
  else {
    echo "you nothing was selected.";
  }