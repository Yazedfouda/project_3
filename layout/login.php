
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/all.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <?php 
    include("head.php")
    ?>
<section class="vh-100">
    <div class="cont mt-5" style="width: 80%;margin-left:10%">

            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="images/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="post" action="../data/check.php">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
                </button>

                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>
                
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-linkedin-in"></i>
                </button>
            </div>
            
            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Or</p>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="email"  name= "email" class="form-control form-control-lg"
                placeholder="Enter a valid email address" />
                <label class="form-label" for="email">Email address</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-3">
                <input type="password" id="password" name="password" class="form-control form-control-lg"
                placeholder="Enter password" />
                <label class="form-label" for="password">Password</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="check" />
                    <label class="form-check-label" for="check">
                        Remember me
                        </label>
                    </div>
                    <a href="#!" class="text-body">Forgot password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
                <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="sign_up.php"
                class="link-danger">Register</a></p>
            </div>
            
        </form>
    </div>
    </div>
    </div>
    <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
        Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
        <a href="#!" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
            <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </div>
    <!-- Right -->
</div>
</div>
</section>
</body>
</html>