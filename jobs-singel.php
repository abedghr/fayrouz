<?php include 'includes/index_header.php'; ?>


<section class="site-section" style="padding: 0px; padding-top:250px;">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <?php
                $query = "select * from jobs where job_id = {$_GET['job_id']}";
                $result = mysqli_query($conn, $query);
                $row = array();
                while ($rowSet = mysqli_fetch_assoc($result)) {
                    $row[] = $rowSet;
                }
?>
                <?php
                if (is_array($row)) {
                    foreach ($row as $row1) {
                        $str = "{$row1['job_qual']}";
                        $str1 = "{$row1['job_desc']}";
                        $arr1 = explode("\n", $str);
                        $arr2 = explode("\n", $str1);
                        
                        echo "<div class = 'd-flex align-items-center'>

                <div><h2>{$row1['job_name']}</h2></div>
                </div>
                ";

                        echo "
                    </div>
                    <div class = 'row'>
                    <div class = 'col-lg-8'>
                    <div class = 'mb-5'>

                    <h3 class = 'h5 d-flex align-items-center mb-4 text-primary'><span class = 'icon-align-left mr-3'></span>Job Description</h3>
                    <ul>";
                    foreach($arr2 as $arra){
                        echo "<li>$arra</li>";
                        
                    }
                    echo "</ul>
                    

                    </div>
                    <div class = 'mb-5'>
                    <h3 class = 'h5 d-flex align-items-center mb-4 text-primary'><span class = 'icon-turned_in mr-3'></span>Qualification +
                    Experience</h3>
                    <ul class = 'list-unstyled m-0 p-0'>";


                    
                        foreach ($arr1 as $arr){
                        echo "<li class='d-flex align-items-start mb-2'><span class='icon-check_circle mr-2 text-muted'></span><span>{$arr}</span></li>";
                    }
                    echo "</ul>";
                        echo"</div></div></div>";
                    }
                }
                ?>
            </div>
        </div>

</section>
















<?php include "includes/index_footer.php"?>