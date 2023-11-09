<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>REEDAFRICA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/images/ReedLogo.png') }}" rel="icon">
  <link href="{{ asset('assets/images/ReedLogo.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- <link href="{{ asset('assets/css2/style.css') }}" rel="stylesheet"> -->
  <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('header')

  <!-- Carousel Start -->
  <div class="container-fluid mb-3 mt-4">
        <div class="row px-xl-5" style="padding-top:150px;">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <!-- <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol> -->
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active mb-1" style="height: 430px; overflow: hidden;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets/images/d21a065a-e6a2-41fe-a69e-70d95010dd63.jpg') }}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Educational Opportunities</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Ensuring that every individual has equal access to educational support</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px; overflow: hidden;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets/images/d21a065a-e6a2-41fe-a69e-70d95010dd63.jpg') }}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Digital Skills</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Recognizing the importance of digital literacy in today's world</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px; overflow: hidden;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('assets/images/d21a065a-e6a2-41fe-a69e-70d95010dd63.jpg') }}" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Enhanced Literacy</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Empowerment of hundreds of individuals to improve reading and writing abilities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px; overflow: hidden;">
                    <img class="img-fluid" src="{{ asset('assets/images/2e852bfc-e91f-4b8c-90b8-0c29b12adfeb.jpg') }}" alt="">
                </div>
                <div class="product-offer mb-30 mt-4" style="height: 200px; overflow: hidden;">
                    <img class="img-fluid" src="{{ asset('assets/images/cb978bd6-b2ef-49b4-8c92-d2401e62cb91.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

  <main id="main">
    <section style="background-color: white; width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>EDUCATION</h1>
                    <p>
                        We offer the following programs:
                    </p>
                    <p>
                        <ol>
                            <li>
                                Literacy Clinics:
                                <ul>
                                    <li>
                                    We establish literacy clinics in rural and underserved areas, offering tailored support to children  struggling with reading and writing.(  rewrite this to include art)
                                    </li>
                                    <li>
                                    Our clinics provide one-on-one tutoring, small group sessions, and literacy workshops to enhance reading comprehension, writing skills, and critical thinking abilities.
                                    </li>
                                    <li>
                                    We collaborate with local schools, community centers, and volunteers to create a supportive and engaging learning environment.
                                    </li>
                                </ul>
                            </li>
                            <li>
                            Digital Skills Training:
                                <ul>
                                    <li>
                                    Recognizing the importance of digital literacy in today's world, we offer comprehensive training programs to equip individuals with essential digital skills.
                                    </li>
                                    <li>
                                    Our training covers basic computer literacy, internet usage, online safety, digital communication, and productivity tools such as word processing and spreadsheet software.
                                    </li>
                                    <li>
                                    We provide access to computer labs and ensure that individuals gain hands-on experience through practical exercises and interactive sessions.
                                    </li>
                                    <li>
                                    Literacy Clinics:
                                        <ol type="i">
                                            <li>
                                                We establish literacy clinics in rural and underserved areas, offering tailored support to individuals of all ages who struggle with reading and writing.
                                            </li>
                                            <li>
                                            Our clinics provide one-on-one tutoring, small group sessions, and literacy workshops to enhance reading comprehension, writing skills, and critical thinking abilities.
                                            </li>
                                            <li>
                                            We collaborate with local schools, community centers, and volunteers to create a supportive and engaging learning environment.
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                    Digital Skills Training:
                                        <ol type="i">
                                            <li>
                                            Recognizing the importance of digital literacy in today's world, we offer comprehensive training programs to equip individuals with essential digital skills.
                                            </li>
                                            <li>
                                            Our training covers basic computer literacy, internet usage, online safety, digital communication, and productivity tools such as word processing and spreadsheet software.
                                            </li>
                                            <li>
                                            We provide access to computer labs and ensure that individuals gain hands-on experience through practical exercises and interactive sessions.
                                            </li>
                                        </ol>
                                    </li>
                                </ul>
                                <p>
                                    <h3>Impact</h3>
                                    <ol>
                                        <li>
                                        Enhanced Literacy Skills:
                                            <ul>
                                                <li>
                                                Our literacy clinics have empowered hundreds of individuals to improve their reading and writing abilities, leading to increased confidence and a greater sense of accomplishment.
                                                </li>
                                                <li>
                                                Through our programs, participants develop essential language skills, which serve as a foundation for their educational journey and future opportunities.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Digital Inclusion:
                                            <ul>
                                                <li>
                                                Our digital skills training programs bridge the digital divide by providing individuals with the knowledge and confidence to navigate the digital landscape.
                                                </li>
                                                <li>
                                                Participants gain access to new educational resources, employment opportunities, and communication platforms, empowering them to actively participate in the digital world.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                        Educational Equity:
                                            <ul>
                                                <li>
                                                By establishing literacy clinics in underserved areas, we promote educational equity, ensuring that every individual has equal access to educational support and opportunities.
                                                </li>
                                                <li>
                                                Our programs focus on reaching marginalized communities, including girls, rural populations, and individuals with limited resources, promoting inclusivity and diversity in education.
                                                </li>
                                            </ul>
                                        </li>
                                    </ol>
                                </p>
                            </li>
                            <li>Mentorship.</li>
                            <li>School resources</li>
                            <li>
                                Enhanced Literacy Skills:
                                <ul>
                                    <li>
                                    Our literacy clinics have empowered hundreds of individuals to improve their reading and writing abilities, leading to increased confidence and a greater sense of accomplishment.
                                    </li>
                                    <li>
                                    Through our programs, participants develop essential language skills, which serve as a foundation for their educational journey and future opportunities.
                                    </li>
                                </ul>
                            </li>
                            <li>
                            Digital Inclusion:
                                <ul>
                                    <li>
                                    Our digital skills training programs bridge the digital divide by providing individuals with the knowledge and confidence to navigate the digital landscape.
                                    </li>
                                    <li>
                                    Participants gain access to new educational resources, employment opportunities, and communication platforms, empowering them to actively participate in the digital world.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                Educational Equity:
                                <ul>
                                    <li>
                                    By establishing literacy clinics in underserved areas, we promote educational equity, ensuring that every individual has equal access to educational support and opportunities.
                                    </li>
                                    <li>
                                    Our programs focus on reaching marginalized communities, including girls, rural populations, and individuals with limited resources, promoting inclusivity and diversity in education.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
    @include('contact')

  </main><!-- End #main -->

  @include('footer')

</body>

</html>