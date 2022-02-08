<?php include('inc/nav.php') ?>

<div class="container py-5">
        <div class="row">

            <div class="col-md-6 offset-md-3">
                <h3 class="mb-3">Add Customer</h3>
                <div class="card">
                    <div class="card-body p-5">
                        <form method="POST" action="handlers/add-customer.php">
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control" name="name">
                            </div>

                           

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>

                            <div class="form-group">
                                <label>Balance</label>
                                <input type="number" class="form-control" name="balance" >
                            </div>
  
                          
                            
                            
                              
                            <div class="text-center mt-5">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-dark" href="customers.php">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include('inc/footer.php'); ?>
