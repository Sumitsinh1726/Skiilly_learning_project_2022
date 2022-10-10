<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skilly Online Learning Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="app.js ">
    




    <!-- Font Awsome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- .End -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="h/logo.png" alt="..." height="36">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto" id="bar">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="C/course.php">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    </div>

    <div class="video-background-holder">
  <div class="video-background-overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="video/bg-video.mp4" type="video/mp4">
    </video>
  <div class="video-background-content container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
      <div class="container-sm">
                    <div class="text-box">
                        <h1>I'm Going to Learn <span class="auto-input" style="color:red;"></span> </h1>
                        <p>You can Learn any thing whatyou want</p>
                        <a href="C/course.php" class="btn">Explore Courses</a>
                    </div>
            
                </div>
            </div>
      </div>
    </div>
  </div>
</div>



<!-- <div class="container">
        <h1 class="text-center mt-5 display-3 fw-bold">Why Choose <span class="theme-text">Me ?</span></h1>
        <div class="container py-5">
            <div class="row gy-2 my-3">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="circle">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">100+ Courses</h4>
                            <p>Top off 100+ Courses Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row gy-2 my-3">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="circle">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">100+ Courses</h4>
                            <p>Top off 100+ Courses Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

     -->

      







    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var type = new Typed(".auto-input", {
            strings: ["Trading", "Hacking", "Networking", "Web devlopment", "Video Editing", "Digital Marketing", "UX/UI Designing ", "Animation & VFX.", "Graphic Designing",],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
        });
    </script>












</body>

</html>