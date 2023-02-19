<?php require('header.php'); ?>
<!-- main -->
<div class="container mian mt-4">
    <div class="row">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Blood Group</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM $TBL_USERS";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['fullname']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['phone_no']?></td>
                        <td><?php echo $row['bloodgroup']?></td>
                        <td>
                            <div class="btn btn-sm btn-primary">Edit</div>
                            <div class="btn btn-sm btn-danger">delete</div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
        </table>




    </div>
</div>

<?php require('footer.php'); ?>