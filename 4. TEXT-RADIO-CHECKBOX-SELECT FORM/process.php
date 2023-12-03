<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userName = $_POST['userName'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $number = $_POST['number'];
            $message = $_POST['message'];
            $province = $_POST['province'];
            $gender = $_POST['radio'];
            $subjects = $_POST['checkbox'];
        }
    ?>
        <tr>
            <td><?php echo $userName ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $password ?></td>
            <td><?php echo $number ?></td>
            <td><?php echo $message ?></td>
            <td><?php echo $province ?></td>
            <td>
                <?php 
                   // subjects
                   if(isset($subjects)){
                    foreach ($subjects as $value){
                        echo  " | " . $value;
                    }
    
                }
                ?>
            </td>
            <td><?php // gender 

                if ($gender === "Female") {
                    echo $gender;
                } elseif ($gender === "Male") {
                    echo $gender;
                }
        ?>
            </td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>