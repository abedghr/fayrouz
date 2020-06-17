<?php
include 'includes/index_header.php';
$query = "SELECT product.*,category.cat_name FROM product"
        . " INNER JOIN category ON product.cat_id = category.cat_id "
        . "where category.cat_id = {$_GET['cat_id']}";
$result = mysqli_query($conn, $query);
$row = array();
while ($rowSet = mysqli_fetch_assoc($result)) {
    $row[] = $rowSet;
}


?>


<section class="ftco-section goto-here" style=" padding-top:250px;">
    <div class="container">
        <div class="row">
            <?php
            if (is_array($row)) {
                foreach ($row as $row1) {

                    echo "<div class='col-md-4'>
                <div class='property-wrap ftco-animate'>
                    <div class='img d-flex align-items-center justify-content-center' style='background-image: url(admin/product_img/{$row1['pro_img']});'>

                </div>
                <div class='text'>

                    <h3 class='mb-0'><a href='#'>{$row1['pro_name']}</a></h3>
                    <span>{$row1['pro_desc']}</span><br>
                    
                    <h3 style='font-weight:bold; color:red; font-size:15px;' class='mt-2'><strong>{$row1['prod_price']}JD</strong></h3>
                    <small><center>*Price Do not Include Sales Tax*</center></small>
                    
                   
                    <button class='btn btn-primary btn-block mt-2'>Add to Cart</button>
                </div>
            </div>
        </div>

        ";
                }
            }
            ?>

        </div>
        
    </div>
</section>

<?php include "includes/index_footer.php"?>