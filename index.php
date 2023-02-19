<?php require('header.php'); ?>
<!-- main -->
<div class="container mian mt-4">
    <div class="row">
        <div class="col-8 m-auto">
            <div class="card">
                <form action="" method="get">
                    <div class="input-group">
                        <select class="form-select" name='bg' id="blodgroupinput">
                            <option selected>Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if(isset($_GET['bg'])){
        $bloodgroup = $_GET['bg'];
     ?>
    <!-- search result -->
    <div class="row mt-4">
        <div class="col">
            <h2 class="text-center mb-4">Search Result</h2>

            <?php
            $sql = "SELECT * FROM $TBL_USERS WHERE bloodgroup = '$bloodgroup'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

                    ?>
                    <!-- Item -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1 mb-0">
                                    <img src="assets/images/default-search-avater.png" width="50" alt="">
                                </div>

                                <div class="col-md-7 mb-0">
                                    <h4><?php echo $row['fullname'];?> (<?php echo $row['bloodgroup'];?>)</h4>
                                    <p><?php echo $row['address'];?></p>
                                </div>

                                <div class="col-md-4 text-end">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?php echo $row['phone_no'];?>">
                                        <button type="button" class="btn btn-sm px-3 btn-outline-primary"><i
                                                class="fa fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- endItem -->

                    <?php
                }
            } else {
                echo "<h1 class='text-center'>No Result Found</h1>";
            }
            ?>

        </div>
    </div>
    <?php }?>

    <div class="row">
        <div class="col text-center mt-5">
            <img src="https://www.graphic.com.gh/images/2022/jun/14/BloodDonation.jpeg" class="">
        </div>
    </div>
</div>

<?php require('footer.php'); ?>