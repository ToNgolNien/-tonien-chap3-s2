<?php
 
 if (isset($_POST['password'])) {
     $password = $_POST['password'];
     if ($password=== "1234") {
        echo '<div>This is sensitive data visible only if the user knows the correct password</div>';
     }
     else {
        echo '<div>This is sensitive data visible only if the user knows the wrong password</div>';
     }
 }
 ?>