<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="app.js ">
    
    <style>
        .gradient-custom {
/* fallback for old browsers */ 


Chrome 10-25, Safari 5.1-6
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
    </style>
</head>

<body>
  <div>
  <?php require_once('includes/student_includes.php'); ?>
  </div>
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">SINGUP</h2>
              <p class="text-white-50 mb-5 ">CREATE AN ACCOUNT
</p>

              
              <div class="form-outline form-white mb-4">
                <input type="text" id="typeName" class="form-control form-control-lg" />
                <label class="form-label" for="typeName" text-center>Name</label>
              </div>
              
              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX" text-center>Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typePhno" class="form-control form-control-lg" />
                <label class="form-label" for="typePhno" text-center>Phone No</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">REGISTER</button>

          

            </div>

            <div>
              <p class="mb-0">Allready have Account <a href="login.php" class="text-white-50 fw-bold">Log In</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html> 