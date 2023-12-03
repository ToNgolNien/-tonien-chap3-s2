<?php // HEADER 
require_once('templates/header.php');
?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $number = $_POST["number"];
    $message = $_POST["message"];
}
?>
    <li class="list-group-item" ><?php echo $userName ?></li>
    <li class="list-group-item"><?php echo $email ?></li>
    <li class="list-group-item"><?php echo $password?></li>
    <li class="list-group-item"><?php echo $number?></li>
    <li class="list-group-item"><?php echo $message?></li>

</ul>
<?php // FOOTER 
require_once('templates/footer.php');
?>