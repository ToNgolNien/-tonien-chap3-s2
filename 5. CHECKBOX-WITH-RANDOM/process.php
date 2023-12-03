<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE
// Kiểm tra xem form đã được gửi đi hay chưa
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kiểm tra xem checkbox đã được chọn hay không
    if (isset($_POST['checkbox'])) {
        $selectedLanguages = $_POST['checkbox'];
    }
} 
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
            foreach ($selectedLanguages as $language) {
                // Chọn màu ngẫu nhiên từ mảng $colors
                $randomColor = $colors[array_rand($colors)];
                echo '<span class="badge bg-' . $randomColor . '">' . $language . '</span> ';}
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>