<?php require('header.php');?>
    <!-- main -->
    <div class="container mian mt-4">
        <div class="row">
            <div class="col-8 m-auto">
                <div class="card">
                    <form action="">
                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect04"
                                aria-label="Example select with button addon">
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

        <!-- search result -->
        <div class="row mt-4">
            <div class="col">
                <h2 class="text-center mb-4">Search Result</h2>
                <!-- Item -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-1 mb-0">
                        <img src="assets/images/default-search-avater.png" width="50" alt="">
                            </div>

                            <div class="col-md-7 mb-0">
                                <h4>Mr. Hablu (O+)</h4>
                                <p>Jessore, Khulna, Bangladesh</p>
                            </div>
                            
                            <div class="col-md-4 text-end">
                            <div class="input-group">
                                <input type="text" class="form-control" value="017777777777">
                                <button type="button" class="btn btn-sm px-3 btn-outline-primary"><i class="fa fa-eye"></i></button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div><!-- endItem -->

            </div>
        </div>
    </div>

<?php require('footer.php');?>