<?php include 'includes/index_header.php'; ?>


<section class="ftco-section goto-here" style="padding: 0px; padding-top:250px;">
    <div class="container">
        <div class="row">
            <?php
            $query = "select * from category";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='col-md-4'>
                <div class='property-wrap ftco-animate'>
                    <div class='img d-flex align-items-center justify-content-center' style='background-image: url(admin/category_img/{$row['cat_img']});'>
                        <a href='product.php?cat_id={$row['cat_id']}' class='icon d-flex align-items-center justify-content-center btn-custom'>
                            <span class='ion-ios-link'></span>
                        </a>
                        <div class='list-agent d-flex align-items-center'>
                            <a href='product.php?cat_id={$row['cat_id']}' class='agent-info d-flex align-items-center'>
                                <h3 class='mb-0 ml-2'>{$row['cat_name']} </h3>
                            </a>
                        </div>
                    </div>
                    <div class='text'>
                        <h3 class='mb-0'><a href='product.php?cat_id={$row['cat_id']}'>{$row['cat_name']} </a></h3>
                        

                    </div>
                </div>
            </div>
                            ";
            }
            ?>

        </div>
    </div>
</section>


<?php include "includes/index_footer.php"?>