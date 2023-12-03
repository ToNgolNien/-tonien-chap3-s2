<?php // HEADER
require ('templates/header.php')
?>
<?php
// YOUR CODE HERE
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $province = $_POST["province"];
    $radio = $_POST["radio"];
    $checkbox = $_POST["checkbox"];
}
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $province ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <!-- YOUR CODE HERE [gender] -->
            <?php
                if ($radio === "Female") {
                    echo '<img src="images/female.png" class="h-25 w-25" alt="Female Image">';
                } elseif ($radio === "Male") {
                    echo '<img src="images/male.png" class="h-25 w-25" alt="Male Image">';
                } 
        ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                // YOUR CODE HERE [subject]
            if(isset($checkbox)){
                foreach ($checkbox as $value){
                    echo   '<button type="submit" class="btn btn-primary me-3">' . $value . '</button>';
                }

            }
            ?>
        </div>
    </div>

<?php // FOOTER 
require ('templates/footer.php')
?>