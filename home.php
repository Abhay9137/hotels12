<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Trinetra Hotels</title>

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
    
    <!--Carosel-->
    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/carousel/1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/carousel/2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/carousel/3.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/carousel/4.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/carousel/5.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="image/carousel/6.png" class="d-block w-100" alt="...">
        </div>
      </div>

    </div>
    <!-- Check availability form -->

    <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
          <h5>Check Booking Availability</h5>
          <form>
            <div class="row">
              <div class="col-lg-3 mb-3">
                <label class="form-label">Check-In</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label">Check-Out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label">Adult</label>
                <select class="form-select" aria-label="Default select example">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-2 mb-3">
                <label class="form-label">Kids</label>
                <select class="form-select" aria-label="Default select example">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-1 mb-lg-3 mt-2">
                <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!-- Ours Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="image/rooms/1.jpg" class="card-img-top">
            <div class="card-body">
              <h5>Simple Room</h5>
              <h6>₹200 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  2 Rooms
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  1 Balcony
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  3 Sofa
                </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  Wifi
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  Television
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  AC
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  Room Heater
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="image/rooms/1.jpg" class="card-img-top">
            <div class="card-body">
              <h5>Simple Room</h5>
              <h6>₹200 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  2 Rooms
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  1 Balcony
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  3 Sofa
                </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  Wifi
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  Television
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  AC
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  Room Heater
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="image/rooms/1.jpg" class="card-img-top">
            <div class="card-body">
              <h5>Simple Room</h5>
              <h6>₹200 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  2 Rooms
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  1 Balcony
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  3 Sofa
                </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  Wifi
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  Television
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  AC
                </span>
                <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                  Room Heater
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
        </div>
      </div>
    </div>
    
    <!-- Our Facilities -->


    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="image/features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="image/features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="image/features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="image/features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="image/features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
        </div>
    </div>
 

    <!-- Testinomials -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTINOMIALS</h2>

    <!-- Reach Us -->
    
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 mb-lg-0 mb-3 bg-white rounded">
          <iframe class="w-100 rounded" height="450px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57957.67259180358!2d84.94088104972857!3d24.783310612547204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f32a440a1b3c1f%3A0xcef6b223bdbf34a6!2sGaya%2C%20Bihar!5e0!3m2!1sen!2sin!4v1715171287405!5m2!1sen!2sin" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <h5>Call us</h5>
            <a href="tel: +910000000000" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+910000000000</a>
            <br>
            <a href="tel: +910000000000" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+910000000000</a>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
              <h5>Follow us</h5>
              <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-twitter-x me-1"></i> Twitter
                </span>
              </a>  
              <br>
              <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-facebook me-1"></i> Facebook
                </span>
              </a>  
              <br>
              <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-youtube me-1"></i> Youtube
                </span>
              </a>  
              <br>
              <a href="#" class="d-inline-block">
                <span class="badge bg-light text-dark fs-6 p-2">
                  <i class="bi bi-instagram me-1"></i> Instagram
                </span>
              </a>  
              <br>
            
          </div>
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