<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Trinetra Hotels - About</title>

  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">TRINETRA HOTELS</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active me-2" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="room.php">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="facilities.php">Facilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
              Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
              Register
            </button>
          </form>
        </div>
      </div>
    </nav>
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h1 class="modal-title d-flex align-items-center fs-3">
                <i class="bi bi-person-circle fs-3 me-2"></i>User Login</h1>
              <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none">
              </div>
              <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control shadow-none">
              </div>
              <div class="d-flex align-items-center justify-content-between mb-2">
                <button type="submit" class="btn btn-dark shadow-none">Login</button>
                <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget Password?</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h1 class="modal-title d-flex align-items-center fs-3">
              <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration</h1>
              <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                Note: Your details must match with your ID (Aadhar card, passport,driving license, etc.)
                that will be required during check-in.
              </span>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control shadow-none">  
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control shadow-none">  
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="number" class="form-control shadow-none">  
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Picture</label>
                    <input type="file" class="form-control shadow-none">  
                  </div>
                  <div class="col-md-12 p-0 mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control shadow-none" rows="1"></textarea>  
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Pincode</label>
                    <input type="number" class="form-control shadow-none">  
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Date of birth</label>
                    <input type="date" class="form-control shadow-none">  
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none">  
                  </div>
                  <div class="col-md-6 p-0">
                    <label class="form-label">Conform Password</label>
                    <input type="password" class="form-control shadow-none">  
                  </div>
                </div>
              </div>
              <div class="text-center my-1">
                <button type="submit" class="btn btn-dark shadow-none">Register</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    

    <!-- Footer -->

  <div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">TRINETRA HOTELS</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Eos temporibus non nulla quas quidem! Provident cupiditate
            dolor natus voluptas maxime quibusdam qui tempore mollitia 
            reprehenderit vitae sequi veritatis, delectus iste?
        </p>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow us</h5>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-twitter-x me-1"></i> Twitter      
        </a>  
        <br>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-facebook me-1"></i> Facebook      
        </a>  
        <br>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-youtube me-1"></i> Youtube     
        </a>  
        <br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">
          <i class="bi bi-instagram me-1"></i> Instagram     
        </a>  
        <br>
      </div>
    </div>
  </div>
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>