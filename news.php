<?php include 'includes/index_header.php'; ?>

        

        <section class="ftco-section" style="padding: 0px; padding-top:250px;">
            <div class="container">
                <div class="row d-flex">
                    <?php
                    $query = "select * from news";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='col-md-3 d-flex ftco-animate'><div class='blog-entry justify-content-end'><div class = 'text'>"
                        . "<a href='news-single.php?news_id={$row['news_id']}' class = 'block-20 img' style='background-image: url(admin/news_img/{$row['news_img']});'></a>"
                        . "<h3 class = 'heading'><a href='news-single.php?news_id={$row['news_id']}'>{$row['news_name']}</a></h3>"
                        . "<div class = 'meta mb-3'><div><a href='news-single.php?news_id={$row['news_id']}'>{$row['news_date']}</a>";
                        echo "</div></div></div></div></div>";
                    }
                    ?>

                </div>
            </div>
            
        </div>
    </section>	

<?php include "includes/index_footer.php"?>