<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aditya shinde task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

   
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-1 d-none d-md-block">
    <!-- Container wrapper -->
    <div class="container d-flex justify-content-between align-items-center">
      <!-- Left Section: Contact Information -->
      <div class="d-flex align-items-center gap-4">
        <div class="me-3">
          <i class="fas fa-phone me-2"></i> +91 9878646463
        </div>
        <div class="me-3">
          <i class="fas fa-envelope me-2"></i> contact@company.com
        </div>
      </div>
  
      <!-- Right Section: Social Media Icons and Buttons -->
      <div class="d-flex align-items-center gap-4">
        <!-- Social Media Icons -->
        <div class="d-flex align-items-center gap-3">
          <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
        </div>
  
        <!-- Action buttons -->
        <button data-mdb-ripple-init   data-bs-toggle="modal" data-bs-target="#contact-1" type="button" class="btn cta-color">
          Get A Quote
        </button>
      </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  

  

  <!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg  ">
    <div class="container d-flex ">
        <a class="navbar-brand" href="#">Binford Ltd.</a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ms-3"><a class="nav-link px-3" href="#">Home</a></li>
                <li class="nav-item ms-3"><a class="nav-link px-3" href="#about">About</a></li>
                <li class="nav-item ms-3"><a class="nav-link px-3" href="#gallery">Gallery</a></li>
                <li class="nav-item ms-3"><a class="nav-link px-3" href="#logo">Clients</a></li>
                <li class="nav-item ms-3"><a class="nav-link px-3" href="#" data-bs-toggle="modal" data-bs-target="#contact-1">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="carouselExampleControls" class="carousel slide w-100 mx-auto" data-bs-ride="carousel">
    <!-- Carousel Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Carousel Inner -->
    <div class="carousel-inner">
        <div class="carousel-item active position-relative">
            <img src="assets/img/silder-1.png" class="d-block w-100 img-fluid object-fit-cover" style="height: 500px;" alt="First slide">   
            <div class="carousel-caption d-none d-md-block text-start position-absolute top-50 start-0 translate-middle-y ps-4">
                <h1 class="text-light">Mahindra XUV700</h1>
                <p class="text-light">Experience luxury and power like never before.</p>
                <a href="#learn-more" class="btn cta-color" data-bs-toggle="modal" data-bs-target="#contact-1">Contact</a>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img src="assets/img/silder-2.png" class="d-block w-100  img-fluid object-fit-cover" style="height: 500px;" alt="Second slide">
            <div class="carousel-caption d-none d-md-block text-start position-absolute top-50 start-0 translate-middle-y ps-4">
                <h1 class="text-light">Adventure Awaits</h1>
                <p class="text-light">Built for every terrain, ready for any journey.</p>
                <a href="#features" class="btn cta-color" data-bs-toggle="modal" data-bs-target="#contact-1">Contact</a>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img src="assets/img/silder-3.png" class="d-block w-100   img-fluid object-fit-cover" style="height: 500px;" alt="Third slide">
            <div class="carousel-caption d-none d-md-block text-start position-absolute top-50 start-0 translate-middle-y ps-4">
                <h1 class="text-light">Ultimate Comfort</h1>
                <p class="text-light">Designed with your comfort in mind.</p>
                <a href="#book-now" class="btn cta-color" data-bs-toggle="modal" data-bs-target="#contact-1">Contact</a>
            </div>
        </div>
    </div>
</div>

<!-- Fixed Contact Form -->
<div class="contact-form d-none d-md-block">
    <div class="modal-body">
        <form action="mail.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="fullname" class="form-control" style="border-radius:20px;" id="name" placeholder="Full Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" style="border-radius:20px;" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" style="border-radius:20px;" id="phone" placeholder="Phone">
            </div>
            <div class="text-center">
                <button name="submit" type="submit" class="btn cta-color btn-success">Submit Form</button>
            </div>
        </form>
    </div>
</div>




    <section id="about" class="hero-section   text-white d-flex align-items-center" style="background-color: #180a2b;" >
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-md-6 mt-3">
                    <h1 class="display-4 fw-bold">Next Gen <span class="text-warning">Virtual Reality</span></h1>
                    <p class="lead mt-4">
                        Discover new worlds and make the impossible real with our immersive VR experiences. 
                        Dive in, explore, and let your imagination come alive. Adventure and connection await. 
                        Step into the extraordinary.
                    </p>
                    <a href="#learn-more" class="btn cta-color btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#contact-1">See More</a>
                </div>
                <!-- Image Content -->
                <div class="col-md-6 text-center ">
                    <img src="assets/img/hero-1.png" alt="Virtual Reality" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- Optional Background Overlay -->
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.6); z-index: -1;"></div>
    </section>




    
    

<!-- Hero Section -->

<!-- Features Section -->
<section class="py-5">
<div class="blob-LEFT"></div>
    <div class="container">
        <h2 class="text-center mb-5">Key Features</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="feature-box">
                    <h5>Aggregate</h5>
                    <p>See what you can do within the platform</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <h5>Sell</h5>
                    <p>NFT collection for free sell within design and mint</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <h5>Buy</h5>
                    <p>NFT aggregator and large marketplaces</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <h5>Send</h5>
                    <p>Users united by one simple convenient interface</p>
                </div>
            </div>
        </div>
    </div>
    <div class="blob-RIGHT"></div>
</section>

<section class="creative-slider py-5 " style="background-image: url('assets/img/bg-img.svg');">


    <div class="container">
        <h2 class="text-center mb-5">  Our Services</h2>
        <div id="creativeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <div class="p-4 border rounded shadow-sm">
                                <img src="assets/img/social-media.png" alt="Team Member" class="img-fluid rounded-circle mb-3" >
                                <h5 class="mb-2">Social Media Marketing</h5>
                                <p class="text-mute">Creative Director</p>
                                <p>Live workshop where we define the main problems and challenges before
                                    building a strategic plan moving forward.</p>
                                <a href="#more" class="btn btn-outline-primary cta-color btn-sm"> read more </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <div class="p-4 border rounded shadow-sm">
                                <img src="assets/img/website.png" alt="Team Member" class="img-fluid  mb-3" >
                                <h5 class="mb-2">Web Developments</h5>
                                <p class="text-mute">Lead Designer</p>
                                <p>We create visually appealing and user-friendly websites that leave a
                                    lasting impression.</p>
                                <a href="#more" class="btn btn-sm cta-color" data-bs-toggle="modal" data-bs-target="#contact-1">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <div class="p-4 border rounded shadow-sm">
                                <img src="assets/img/e-commerce.png" alt="Team Member" class="img-fluid  mb-3">
                                <h5 class="mb-2">E-Eommerce Developments </h5>
                                <p class="text-mute">Marketing Expert</p>
                                <p> E-commerce solutions that scale with your business, expanding products and reach.</p>
                                <a href="#more" class="btn btn-outline-primary btn-sm cta-color" data-bs-toggle="modal" data-bs-target="#contact-1">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <div class="p-4 border rounded shadow-sm">
                                <img src="assets/img/seo.png" alt="Team Member" class="img-fluid  mb-3" >
                                <h5 class="mb-2">SEO & Content Writing </h5>
                                <p class="text-mute">Marketing Expert</p>
                                <p>Boost online visibility and authority with our strategic SEO and content
                                    creation.</p>
                                <a href="#more" class="btn btn-outline-primary btn-sm cta-color " data-bs-toggle="modal" data-bs-target="#contact-1">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#creativeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#creativeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


<section class="gallery-section py-5 " id="gallery">
<div class="blob-LEFT"></div>
    <div class="container">
        <h2 class="text-center mb-4">Gallery</h2>
        <div class="row g-3 justify-content-center justify-content-md-around">
            <!-- Image 1 -->
            <div class="col-12 col-md-2 text-center">
                <div class="gallery-img">
                    <img src="assets/img/gallery/img-1.jpg" class="img-fluid rounded shadow img-zoom" data-bs-toggle="modal" data-bs-target="#galleryModal1" alt="Gallery Image 1">
                </div>
            </div>
            <!-- Image 2 -->
            <div class="col-12 col-md-2 text-center">
                <div class="gallery-img">
                    <img src="assets/img/gallery/img-2.jpg" class="img-fluid rounded shadow img-zoom" data-bs-toggle="modal" data-bs-target="#galleryModal2" alt="Gallery Image 2">
                </div>
            </div>
            <!-- Image 3 -->
            <div class="col-12 col-md-2 text-center">
                <div class="gallery-img">
                    <img src="assets/img/gallery/img-3.jpg" class="img-fluid rounded shadow img-zoom" data-bs-toggle="modal" data-bs-target="#galleryModal3" alt="Gallery Image 3">
                </div>
            </div>
            <!-- Image 4 -->
            <div class="col-12 col-md-2 text-center">
                <div class="gallery-img">
                    <img src="assets/img/gallery/img-4.jpg" class="img-fluid rounded shadow img-zoom" data-bs-toggle="modal" data-bs-target="#galleryModal4" alt="Gallery Image 4">
                </div>
            </div>
            <!-- Image 5 -->
            <div class="col-12 col-md-2 text-center">
                <div class="gallery-img">
                    <img src="assets/img/gallery/img-5.jpg" class="img-fluid rounded shadow img-zoom" data-bs-toggle="modal" data-bs-target="#galleryModal5" alt="Gallery Image 5">
                </div>
            </div>
        </div>
    </div>

    <div class="blob-RIGHT"></div>
</section>



<style>
  
  

</style>
<div class="text-center"> <h2> 
    Our Clients </h2></div>
<div class="slider my-5 container" id="logo">
  
	<div class="slide-track">
		<div class="slide">
			<img src="assets/img/logo/di7-logo.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/download.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/enhansafe.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/goldmine.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/paper.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/plantgenic.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/scrum.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/di7-logo.png" height="100" width="200" alt="" />
		</div>

        
		<div class="slide">
			<img src="assets/img/logo/download.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/enhansafe.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/goldmine.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/paper.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/plantgenic.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/scrum.png" height="100" width="200" alt="" />
		</div>
		<div class="slide">
			<img src="assets/img/logo/di7-logo.png" height="100" width="200" alt="" />
		</div>
	
	
	</div>
</div>

<footer class="footer text-white py-4">
<div class="blob-LEFT"></div>
    <div class="container">
      <div class="row">
        
        <!-- Services List -->
        <div class="col-md-4 mb-4">
          <h3 class="mb-3">Home</h3>
          <ul class="list-unstyled">
            <li class="mb-2">About </li>
            <li class="mb-2">Services</li>
            <li class="mb-2">Gallery</li>
            <li class="mb-2">Contact </li>
          </ul>
          <div class="text-cente mt-4">
            <a href="#" class="text-white mx-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white mx-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white mx-3"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-white mx-3"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        
        <!-- Contact Info -->
        <div class="col-md-4 mb-4">
          <h3 class="mb-3">Contact Info</h3>
          <ul class="list-unstyled mb-3">
            <li class="mb-3">Email: contact@company.com</li>
            <li class="mb-3">Phone: +91 9899765649</li>
            <li class="mb-3">Address: 1st, 2nd & 3rd Floor, Meera Building, Durga Mata Colony,
                Behind Shivar Garden Restaurant, Pimple Saudagar, Pune-411027, MH, India.  </li>
          </ul>
        </div>
    
        <!-- Location Map -->
        <div class="col-md-4 mb-4">
          <h3>Our Location</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23557.79995726814!2d73.770562!3d18.580612!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b90ea49a921f%3A0x3660fff14cfc2cd9!2sWeb%20Link%20Services%20Pvt.%20Ltd.%20%7C%20Website%20designer%20in%20Pune%20%7C%20SEO%20Company%20In%20Pune%20%2C%20Pimpri%20Chinchwad%20%7C%20Digital%20Marketing%20in%20PCMC!5e1!3m2!1sen!2sin!4v1735707685848!5m2!1sen!2sin" 
                  width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    
      <!-- Social Media Icons -->
    
    </div>
    <div class="blob-RIGHT"></div>
  </footer>
  
  

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p>Binford Ltd. &copy; 2024</p>
        <div class="footer-links">
            <a href="#">Terms & Conditions</a> | 
            <a href="#">Privacy Policy</a> | 
            <a href="#">Support</a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include 'pop-up-form.php';?>
</html>
