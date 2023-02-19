<?php require('config.php'); ?>
<?php
    if(isset($_SESSION['loginestatus']) && $_SESSION['loginestatus'] === true){
        header('location:index.php');
    }

    

    $pass = password_hash("123",PASSWORD_DEFAULT);

    echo $pass;
?>
<?php
if (isset($_POST['regbtn'])) {

    $added_datetime = date('Y-m-d H:i:s');
    $fullname = $_POST['fullname'];
    $address = $_POST['uaddress'];
    $phone_no = $_POST['ucontact'];
    $bloodgroup = $_POST['bloodgroup'];
    $email = $_POST['uname'];
    $password = md5($_POST['upass']);
    $cupass = md5($_POST['cupass']);
    $profile_pic_path = "assets/images/profile_pics/";
    $user_status = "active";

    if($password === $cupass){
        $sql = "INSERT INTO $TBL_USERS( added_datetime, fullname, address, phone_no, bloodgroup, email, password, profile_pic_path, user_status) VALUES ('$added_datetime', '$fullname', '$address', '$phone_no', '$bloodgroup', '$email', '$password', '$profile_pic_path', '$user_status')";

        if ($conn->query($sql) === true) {
            $msg = "Registration Successfull";
            
            // profile picture upload code
            $file_tmp_name = $_FILES["profilepic"]["tmp_name"];
            $file_path = "assets/images/profile_pics/$email.png";
            move_uploaded_file($file_tmp_name, $file_path);
        } else {
            $err = "Registration Faild. Please Try Again. " . $conn->error;
        }
    }else{
        $err = "Password is not match. Please try again";
    }

  

}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup | ABlood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>

    <!-- main -->
    <div class="container mian mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="mb-3 text-center">Signup</h1>

                <!-- Show status with alert-->
                <?php if (isset($msg)) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $msg ?>
                    </div>
                <?php } ?>

                <?php if (isset($err)) {
                    echo '<div class="alert alert-danger" role="alert">' . $err . '</div>';
                } ?>

                <!-- login form -->
                <form class="was-validated" method="post" enctype="multipart/form-data">
                    <!-- name input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="fullname" id="fullname" class="form-control"
                            placeholder="Enter your full name" required />
                    </div>
                    <!-- address input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="uaddress" id="uaddress" class="form-control"
                            placeholder="Enter your address" required />
                    </div>
                    <!-- phone number input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="ucontact" id="ucontact" class="form-control"
                            placeholder="Enter your phone number" required />
                    </div>

                    <!-- Blood group -->
                    <div class="form-outline mb-4">
                        <select class="form-select" name="bloodgroup" id="bloodgroup"
                            aria-label="Example select with button addon" required>
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="uname" id="uname" class="form-control"
                            placeholder="Enter your username / email" required />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="upass" id="upass" class="form-control"
                            placeholder="Enter you password" required />
                    </div>

                    <!-- Confirm Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="cupass" id="cupass" class="form-control"
                            placeholder="Enter your confirm password" required />
                    </div>

                    <div class="mb-3">
                        <input type="file" name="profilepic" class="form-control" name="" id=""
                            aria-describedby="profilepic">
                    </div>



                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="rememberme" required />
                                <label class="form-check-label" for="rememberme"> I Agree with T&C </label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" name="regbtn" class="btn btn-primary btn-block mb-4">Registration</button>
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Already member? <a href="login.php">Login</a></p>
                    </div>

                </form>


            </div>
        </div>
    </div>

    <?php require('footer.php'); ?>