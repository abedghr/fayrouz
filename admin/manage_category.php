<?php include'includes/admin_header.php'; ?>
<?php include'includes/connection.php'; ?>
<?php
if (isset($_POST['submit'])) {
    if(!empty($_POST['name']) && !empty($_POST['nameAr'])){
    $file_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $path = "category_img/";
    move_uploaded_file($tmp_name, $path . $file_name);
    //fetch datat from from
    $name = $_POST['name'];
    $nameAr = $_POST["nameAr"];


    //query
    $query = "INSERT into category (cat_name,cat_nameAr,cat_img) values('$name','$nameAr',
    '$file_name')";
    mysqli_query($conn, $query);
    }

}
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Manage Category</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create Category</h3>
                            </div>
                            <hr>
                            <form action="manage_category.php" method="post" novalidate="novalidate" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Name</label>
                                    <input id="cc-number" name="name" type="text" 
                                    class="form-control cc-number identified visa"
                                    required>
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="cc-number" class="control-label mb-1">Name (In Arabic)</label>
                                    <input id="cc-number" name="nameAr" type="text" class="form-control cc-number identified visa" required>
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Image</label>
                                    <input id="cc-name" name="image" type="file" class="form-control cc-name valid" required>
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>

                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">

                                        <span id="payment-button-amount">Create</span>

                                    </button>
                                </div>

                            </form>

                        </div>


                    </div>
                    <table class="table table-borderless table-data3 ">
                        <thead>
                            <tr >
                                <div>
                                <th class="text-center">ID</th>
                                <th class="text-center">Full Name</th>
                                <th class="text-center">Name (In Arabic)</th>
                                <th class="text-center">Logo</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                                </div>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "select * from category";
                            $result = mysqli_query($conn, $query);
                            while ($adminset = mysqli_fetch_assoc($result)) {
                                echo "<tr class='text-center'>";
                                echo "<td> {$adminset['cat_id']}</td>";
                                echo "<td> {$adminset['cat_name']}</td>";
                                echo "<td> {$adminset['cat_nameAr']}</td>";
                                echo "<td> <img src='category_img/{$adminset['cat_img']}' width='60' height='60'></td>";
                                echo "<td> <a href='edit_category.php?cat_id={$adminset['cat_id']}' class='btn btn-warning'>Edit</td>";
                                echo "<td> <a href='delete_category.php?cat_id={$adminset['cat_id']}' class='btn btn-danger'>Delete</td>";
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