<?php ob_start(); ?>
<?php include'includes/admin_header.php'; ?>
<?php include'includes/connection.php'; ?>
<?php
if (isset($_POST['submit'])) {
    


    $file_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $path = "product_img/";
    move_uploaded_file($tmp_name, $path . $file_name);
    
    $category_id = $_POST['cat_id'];
    $name = $_POST['name'];
    $nameAr = $_POST['nameAr'];
    $description = $_POST['desc'];
    $desc_Ar = $_POST['desc_Ar'];
    $price = $_POST["price"];



    
    $query = "INSERT into product (pro_name,prod_nameAr,pro_desc,prod_desc_Ar,prod_price,pro_img,cat_id) values('$name','$nameAr','$description','$desc_Ar', $price ,'$file_name','$category_id')";
    //echo $query;die;
    mysqli_query($conn, $query);
}
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Manage Product</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create Product</h3>
                            </div>
                            <hr>
                            <!--enctype="multipart/form-data"  to add any upload file img/vedio-->
                            <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Name</label>
                                    <input id="cc-number" name="name" type="text" 
                                    class="form-control cc-number identified visa"
                                          required="required">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Name (In Arabic)</label>
                                    <input id="cc-number" name="name" type="text" class="form-control cc-number identified visa"
                                          required="required">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Description</label>
                                    <input id="cc-pament" name="desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required="required">
                                </div>  
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Description (In Arabic)</label>
                                    <input id="cc-pament" name="desc_Ar" type="text" class="form-control" aria-required="true" aria-invalid="false" required="required">
                                </div>                                
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Price</label>
                                    <input id="cc-pament" name="price" type="text" class="form-control" aria-required="true" aria-invalid="false" required="required">
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Image</label>
                                    <input id="cc-name" name="image" type="file" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                           autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Category</label>
                                    <select class="form-control" name="cat_id">
                                        <?php
                                        $query = "select * from category";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value={$row['cat_id']}>{$row['cat_name']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">

                                        <span id="payment-button-amount">Create</span>

                                    </button>
                                </div>

                            </form>

                        </div>


                    </div>
                    <table class="table table-borderless table-data3 table-responsive">
                        <thead>
                            <tr>
                                <th>ID_Product</th>
                                <th>Category</th>
                                <th>Category "AR"</th>
                                <th>Full Name</th>
                                <th>Name "AR"</th>
                                <th>Description</th>
                                <th>Desc "AR"</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT product.* , category.cat_name , category.cat_nameAr from product
                            INNER JOIN category ON product.cat_id = category.cat_id";
                            $result = mysqli_query($conn, $query);
                            while ($adminset = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td> {$adminset['pro_id']}</td>";
                                echo "<td> {$adminset['cat_name']}</td>";
                                echo "<td> {$adminset['cat_nameAr']}</td>";
                                echo "<td> {$adminset['pro_name']}</td>";
                                echo "<td> {$adminset['prod_nameAr']}</td>";
                                echo "<td> {$adminset['pro_desc']}</td>";
                                echo "<td> {$adminset['prod_desc_Ar']}</td>";
                                echo "<td> {$adminset['prod_price']}</td>";
                                echo "<td> <img src='product_img/{$adminset['pro_img']}'></td>";
                                echo "<td> <a href='edit_product.php?pro_id={$adminset['pro_id']}' class='btn btn-warning'>Edit</td>";
                                echo "<td> <a href='delete_product.php?pro_id={$adminset['pro_id']}' class='btn btn-danger'>Delete</td>";
                                echo "</tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include'includes/admin_footer.php'; ?>