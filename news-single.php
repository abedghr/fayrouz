<?php include 'includes/index_header.php'; ?>


<section class="ftco-section ftco-degree-bg" style="padding: 0px; padding-top:250px;">
    <div class="container">
        <div class="row news">
            <?php
            $query = "select * from news where news_id = {$_GET['news_id']}";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            
                echo "<div class = 'col-md-8 ftco-animate'>
                <h2 class = 'mb-3'>{$row['news_name']}</h2>
                
                <p>
                <img src = 'admin/news_img/{$row['news_img']}' alt = '' class = 'img-fluid'>
                </p>
                <p>{$row['news_desc']}</p>

                    ";
                echo "</div>";
            }
            ?>







        </div>
</section> <!-- .section -->
<?php include "includes/index_footer.php"?>