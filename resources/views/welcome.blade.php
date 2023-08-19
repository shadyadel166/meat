<x-head>

</x-head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="asset/css/swiper-bundle.min.css">
<link rel="stylesheet" href="asset/css/card.css">

{{-- card- --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- card---}}
<style>

/*** Hero Header ***/
.hero-header {
    background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(asset/img/bg-hero.jpg);
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


/*** Section Title ***/
.section-title {
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
/* end section */

/* card */
    .slider {
        /* max-width: 1080px; */
        display: flex;
        margin-bottom: 35%;
        /* height: 300px; */
        place-items: center;
    }

    .slider .card {
        flex: 1;
        margin: 0 10px;
        background: #fff;
    }

    .slider .card .img {
        height: 200px;
        width: 100%;
    }

    .slider .card .img img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .slider .card .content {
        padding: 10px 20px;
    }

    .card .content .title {
        font-size: 25px;
        font-weight: 600;
        color: #031C78;
    }

    .card .content .sub-title {
        font-size: 20px;
        font-weight: 600;
        line-height: 20px;
    }

    .card .content p {
        text-align: justify;
        margin: 10px 0;
    }

    /* .card .content .btn {
    display: block;
    text-align: left;
    margin: 10px 0;

} */

    .card .content .btn button {
        background: #031C78;
        color: #fff;
        border: none;
        outline: none;
        font-size: 17px;
        padding: 5px 8px;
        border-radius: 30px;
        cursor: pointer;
        transition: 0.2s;
    }

    .card .content .btn button:hover {
        transform: scale(0.9);
    }

    .slide-bar {
        margin: 10px;

    }

    .section {
        position: relative;
        height: 100vh;
    }

    .section .section-center {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);

    }
    /* end card */
    /*  start about */
    section#section2 {
  padding-top: 65px;
  padding-bottom: 150px;
}

section#section2 .maintext span{
  margin-top: 90px;
  font-weight: 800;
  color: #f9b000;
  line-height: 1.7;
  letter-spacing: 6px;
  text-transform: uppercase;

}



section#section2 .maintext h2 {
  font-size: 70px;
  font-family: 'Righteous';
  color: rgb(68, 68, 68);
  line-height: 1;
  text-align: center;
  margin-top: 30px;
  margin-bottom: 50px;
}
section#section2 .maintext p {

  font-family: "Roboto";
  font-size: 14px;
  line-height: 1.7;
  color: #666666;
  margin: 0px;
  padding-left: 50px;
  padding-right: 50px;


}

section#section2 .shapes span{
  font-size: 18px;
  font-family: "Roboto";
  color: rgb(51, 51, 51);
  line-height: 1.7;
  font-weight: bold;
  text-transform: uppercase;
}

section#section2 .shapes p{
    font-size: 15px;
    font-family: "Roboto";
    color: rgb(119, 119, 119);
    line-height: 1.4;
    text-align: center;
    margin-top: 25px;
}

.minHeightProp{
  min-height: 150px;
}



.section-title h3{
  margin-top: 90px;
  font-weight: 800;
  color: #f9b000;
  line-height: 1.7;
  letter-spacing: 6px;
  text-transform: uppercase;

  }

.section-title h2 {
  margin-top: 30px;
  font-size: 70px;
  font-family: 'Righteous';
  color: rgb(68, 68, 68);
  line-height: 1;
  text-align: center;
  margin-bottom: 50px;
}


.imgback {
  background-image: url(asset/img/backgroundshape.png);
  /* max-width: 100%; */
  padding-right: 35px;
  background-repeat: no-repeat;
  display: block;
  float: none;
  margin: auto;
  padding-left: 35px;
  padding-top: 40px;
  padding-bottom: 40px;
  transition: padding-top 0.5s;
}


img.imgback:hover {
  padding-top: 32px;
}

.shapes{
  margin-top: 50px;
  margin-bottom: 50px;
}
/* end */

</style>

<body>
    <x-nav></x-nav>
    {{-- slide --}}

    <div class="container-xxl position-relative p-0 mt-5">


        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a href="" class="btn btn-danger py-sm-3 px-sm-5 me-3 animated slideInLeft">Shop Now</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="asset/img/hero.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- start section --}}
    <section id="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <div class="maintext text-center">
                        <span>Serve You Since 1988</span>
                        <h2>Welcome To Dr.meat</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis leo vitae lacinia congue.</p>
                        </div>
                </div>
            </div>
            <div class="row shapes">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 minHeightProp">
                            <img class="imgback" src="asset/img/shape1.png">
                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <span>Serve You Since 1988</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis leo vitae lacinia congue.</p>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 minHeightProp">
                            <img class="imgback" src="asset/img/shape2.png">
                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <span>Serve You Since 1988</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis leo vitae lacinia congue.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 minHeightProp">
                            <img class="imgback" src="asset/img/shape3.png">
                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <span>Serve You Since 1988</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis leo vitae lacinia congue. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section2 End -->



    <div class="container ">

        <div class="slide-bar">

            <div class="slider owl-carousel">
                <div class="card">
                    <div class="img">
                        <img src="asset/img/shady6.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="title"> <h3>
                            Beef Kebab
                        </h3>
                        <div class="title">

                            <h5>

                                Enjoy a traditional Arabic delight with our beef kebab, renowned for its aromatic flavor and succulent meat. </div>
                            </h5>
                        </div>
                        <div class="sub-title">

                        </div>

                        <div class="title mt-2">
                            <i class="fa-solid fa-money-check-dollar fa-bounce fa-xs"></i> 800$
                        </div>
                        <div class="btn ">
                            <a href=""><button>SHOP NOW</button></a>
                        </div>
                    </div>
                </div>



                <div class="card">
                    <div class="img">
                        <img src="asset/img/shady5.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="title"> <i class="fa-solid fa-plane"></i> CAIRO</div>
                        <div class="title"><i class="fa-solid fa-calendar-days fa-bounce"></i> Friday 14-7-2023</div>
                        <div class="sub-title"><i class="fa-solid fa-plane-departure fa-beat-fade"></i>Aswan airport.

                        </div>
                        <p>
                            <i class="fa-solid fa-plane-arrival fa-beat-fade"></i>cairo airport
                        </p>
                        <div class="title">
                            <i class="fa-solid fa-money-check-dollar fa-bounce fa-xs"></i> 800$
                        </div>
                        <div class="btn">
                            <a href=""><button>BOOKING NOW</button></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="asset/img/shady7.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="title"> <i class="fa-solid fa-plane"></i> LUXOR</div>
                        <div class="title"><i class="fa-solid fa-calendar-days fa-bounce"></i> Saturday 15-7-2023
                        </div>
                        <div class="sub-title"><i class="fa-solid fa-plane-departure fa-beat-fade"></i>Hurdaga
                            airport
                        </div>
                        <p>
                            <i class="fa-solid fa-plane-arrival fa-beat-fade"></i> Luxor airport.
                        </p>
                        <div class="title">
                            <i class="fa-solid fa-money-check-dollar fa-bounce fa-xs"></i> 300$
                        </div>
                        <div class="btn">
                            <a href="/form"><button>BOOKING NOW</button></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="asset/img/shady3.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="title"> <i class="fa-solid fa-plane"></i> ALEX</div>
                        <div class="title"><i class="fa-solid fa-calendar-days fa-bounce"></i> Sunday 16-7-2023</div>
                        <div class="sub-title"><i class="fa-solid fa-plane-departure fa-beat-fade"></i> Aswan
                            airport
                        </div>
                        <p>
                            <i class="fa-solid fa-plane-arrival fa-beat-fade"></i> ALEX airport.
                        </p>
                        <div class="title">
                            <i class="fa-solid fa-money-check-dollar fa-bounce fa-xs"></i> 800$
                        </div>
                        <div class="btn">
                            <a href="/form"><button>BOOKING NOW</button></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="asset/img/shady6.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="title"> <i class="fa-solid fa-plane"></i> HURDAGA </div>
                        <div class="title"><i class="fa-solid fa-calendar-days fa-bounce"></i> Monday 24-7-2023</div>
                        <div class="sub-title"><i class="fa-solid fa-plane-departure fa-beat-fade"></i> cairo
                            airport
                        </div>
                        <p>
                            <i class="fa-solid fa-plane-arrival fa-beat-fade"></i> Hurdaga airport.
                        </p>
                        <div class="title">
                            <i class="fa-solid fa-money-check-dollar fa-bounce fa-xs"></i> 800$
                        </div>
                        <div class="btn">
                            <a href="/form"><button>BOOKING NOW</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(".slider").owlCarousel({
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                });
            </script>
        </div>
    </div>


     <script src=".asset/js/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"
        integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>



</body>


{{-- <div class="container1">
    <div id="carouselExampleDark" class="carousel carousel-light slide mt-5 " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="asset\img\meat3.jpg" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="\asset\img\photo.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset\img\fresh-meat.jpg" class="d-block  w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

</div> --}}

<x-footer></x-footer>
