<?php require('header.php'); ?>
<!-- main -->
<div class="container mian mt-4">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1 class="mb-3 text-center">Signup</h1>
            <!-- login form -->
            <form class="was-validated">
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
                    <input type="password" name="upass" id="upass" class="form-control" placeholder="Enter you password"
                        required />
                </div>

                <!-- Confirm Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="cupass" id="cupass" class="form-control"
                        placeholder="Enter your confirm password" required />
                </div>

                <div class="mb-3">
                  <input type="file" name="profilepic" class="form-control" name="" id="" aria-describedby="profilepic">
                </div>



                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked
                                required />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Registration</button>
                <!-- Register buttons -->
                <div class="text-center">
                    <p>Already member? <a href="login.php">Login</a></p>
                </div>

            </form>


        </div>
    </div>
</div>

<?php require('footer.php'); ?>