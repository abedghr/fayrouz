<?php include 'includes/index_header.php'; ?>


<section class="site-section" style="padding: 0px; padding-top:250px;">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
            </div>
        </div>


        <div class="mb-5">
            <?php
            $query = "select * from jobs";
            $result = mysqli_query($conn, $query);
            $row = array();
            while ($rowSet = mysqli_fetch_assoc($result)) {
                echo "
                    <div class='row align-items-start job-item border-bottom pb-3 mb-3 pt-3'>
                    <div class='col-md-2'></div>
                    <div class='col-md-4'>
                    
                    <h2><a href='jobs-singel.php?job_id={$rowSet['job_id']}'>{$rowSet['job_name']}</a> </h2>
                    <p class='meta'><strong>";
                    echo substr($rowSet['job_desc'],0,120);
                    echo "...<a href='jobs-singel.php?job_id={$rowSet['job_id']}'>Read More</a></strong>
                       </div>
                    
               ";
                    echo "</div>";
                }
            ?>
<!--            <div class='col-md-3 text-left'>
                    
                    <p><a href='jobs-singel.php?job_id={$rowSet['job_id']}' class='btn btn-secondary'>Read More</a></p>
</div>-->
        </div>


        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section><br>

<?php include "includes/index_footer.php"?>