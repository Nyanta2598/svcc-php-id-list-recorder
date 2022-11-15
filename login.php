<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login System in PHP MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <?php
                    // Your message code
                    if(isset($_SESSION['message']))
                    {
                        echo '<h4 class="alert alert-warning">'.$_SESSION['message'].'</h4>';
                        unset($_SESSION['message']);
                    } // Your message code
                ?>

                <div class="card shadow">
                    <div class="card-header text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">

                        <form action="classes/login-code.php" method="POST">

                            <div class=" mt-3 mb-3 row">
                                <label class="col-sm-3 col-form-label ">Email:</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="email" name="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Password:</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="password" name="password" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="mb-4 d-grid gap-2 col-5 mx-auto">
                                <button type="submit" name="login_button" class="btn btn-primary">Login</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>