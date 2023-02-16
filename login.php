<?php require('config.php');?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | ABlood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
</head>

<body>

<!-- main -->
<div class="container mian mt-4">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1>Login</h1>
            <!-- login form -->
            <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" name="uname" id="uname" class="form-control" />
                    <label class="form-label" for="uname">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="upass" id="upass" class="form-control" />
                    <label class="form-label" for="upass">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="registration.php">Register</a></p>
                </div>

            </form>
            


        </div>
    </div>
</div>

<?php require('footer.php'); ?>