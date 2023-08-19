<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="asset/animate.min.css" rel="stylesheet">
    <link href="asset/owl.carousel.min.css" rel="stylesheet">
    <link href="asset/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="asset/css/style.css" rel="stylesheet">
</head>
<body>

<x-head></x-head>
<x-nav></x-nav>

<style>
    /********** Template CSS **********/
 :root {
    --primary: rgb(255, 0, 0);
    --dark: #1f2126;
    --light:#f2b63d;
}

/* .ff-secondary {
    font-family: 'Pacifico', cursive;
}

.fw-medium {
    font-weight: 600 !important;
}

.fw-semi-bold {
    font-weight: 700 !important;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 45px;
    bottom: 45px;
    z-index: 99;
} */


/*** Spinner ***/
/* #spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
} */


/*** Button ***/
/* .btn {
    font-family: 'Nunito', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: .5s;
}

.btn.btn-primary,
.btn.btn-secondary {
    color: #FFFFFF;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 2px;
}  */


/*** Navbar ***/
/* .navbar-dark .navbar-nav .nav-link {
    position: relative;
    margin-left: 25px;
    padding: 35px 0;
    font-size: 15px; */
    /* color: #000000; */
    /* background-color: #f50707 !important; */
    /* text-transform: uppercase;
    font-weight: 500;
    outline: none;
    transition: .5s;
} */
/*
.sticky-top.navbar-dark .navbar-nav .nav-link {
    padding: 20px 0;
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link.active {
    color: var(--primary) !important;
}

.navbar-dark .navbar-brand img {
    max-height: 60px;
    transition: .5s;
}

.sticky-top.navbar-dark .navbar-brand img {
    max-height: 45px;
}

@media (max-width: 991.98px) {
    .sticky-top.navbar-dark {
        position: relative;
    }

    .navbar-dark .navbar-collapse {
        margin-top: 15px;
        border-top: 1px solid rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-nav .nav-link,
    .sticky-top.navbar-dark .navbar-nav .nav-link {
        padding: 10px 0;
        margin-left: 0;
    }

    .navbar-dark .navbar-brand img {
        max-height: 45px;
    }
}

@media (min-width: 992px) {
    .navbar-dark {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: transparent !important;
    }

    .sticky-top.navbar-dark {
        position: fixed;
        background: var(--dark) !important;
    }
} */


/*** Hero Header ***/
/* .hero-header {
    background: linear-gradient(#f2b63d, rgba(198, 198, 9, 0.548));
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.hero-header img {
    animation: imgRotate 50s linear infinite;
}

@keyframes imgRotate {
    100% {
        transform: rotate(360deg);
    }
}

.breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, .5);
}
 */

/*** Section Title ***/
/* .section-title {
    position: relative;
    display: inline-block;
}

.section-title::before {
    position: absolute;
    content: "";
    width: 45px;
    height: 2px;
    top: 50%;
    left: -55px;
    margin-top: -1px;
    background: var(--primary);
}

.section-title::after {
    position: absolute;
    content: "";
    width: 45px;
    height: 2px;
    top: 50%;
    right: -55px;
    margin-top: -1px;
    background: var(--primary);
}

.section-title.text-start::before,
.section-title.text-end::after {
    display: none;
}


/*** Service ***/
/* .service-item {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
    transition: .5s;
}

.service-item:hover {
    background: var(--primary);
}

.service-item * {
    transition: .5s;
} */

/* .service-item:hover * {
    color: var(--light) !important;
}


/*** Food Menu ***/
/* .nav-pills .nav-item .active {
    border-bottom: 2px solid var(--primary);
} */

 */

/*** Team ***/
.team-item {
    box-shadow: 0 0 45px rgba(0, 0, 0, .08);
    height: calc(100% - 38px);
    transition: .5s;
}

.team-item img {
    transition: .5s;
}

.team-item:hover img {
    transform: scale(1.1);
}

.team-item:hover {
    height: 100%;
}

.team-item .btn {
    border-radius: 38px 38px 0 0;
}


/*** Testimonial ***/
.testimonial-carousel .owl-item .testimonial-item,
.testimonial-carousel .owl-item.center .testimonial-item * {
    transition: .5s;
}

.testimonial-carousel .owl-item.center .testimonial-item {
    background: var(--primary) !important;
    border-color: var(--primary) !important;
}

.testimonial-carousel .owl-item.center .testimonial-item * {
    color: var(--light) !important;
}

.testimonial-carousel .owl-dots {
    margin-top: 24px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.testimonial-carousel .owl-dot {
    position: relative;
    display: inline-block;
    margin: 0 5px;
    width: 15px;
    height: 15px;
    border: 1px solid #CCCCCC;
    border-radius: 15px;
    transition: .5s;
}

.testimonial-carousel .owl-dot.active {
    background: var(--primary);
    border-color: var(--primary);
}


/*** Footer ***/

</style>
<div class="container-xxl bg-white p-0">

    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
{{--
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
             <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link active">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="menu.html" class="nav-item nav-link">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="booking.html" class="dropdown-item">Booking</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
            </div> --}}
        {{-- </nav> --}}

        <div class="container-xxl py-10 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item" style="color:# "><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="store">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="asset/img/meat.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="../asset/img/meat1.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="../asset/img/meat2.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="../asset/img/meat3.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                    <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">3</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Years of</p>
                                    <h6 class="text-uppercase mb-0">Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">6 </h1>
                                <div class="ps-4">
                                    <p class="mb-0">Popular</p>
                                    <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                <h1 class="mb-5">Our Master Chefs</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="../asset/img/model1.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="../asset/img/model50.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="../asset/img/model5.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="../asset/img/modelsmiling.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<x-footer></x-footer>
