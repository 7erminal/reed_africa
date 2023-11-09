<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

  <!-- ======= Header ======= -->
  @include('header')

  <main id="main">
    <section style="background-color: white; width: 100%;">
        <div class="container" data-aos="fade-up" style="padding-top:150px;">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3>Who We Are</h3>
                    <h2>A world where every individual, regardless of their background, has access to quality education.</h2>
                    <p>
                    We provide educational opportunities to underserved communities, foster literacy skills, and promote digital inclusion, enabling individuals to reach their full potential and contribute to the development of their communities.
                    </p>
                    <div class="text-center text-lg-start">
                    <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Read More</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    </div>
                </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('assets/images/cb978bd6-b2ef-49b4-8c92-d2401e62cb91.jpg') }}" class="img-fluid" alt="">
                </div>

            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/images/e1e3810f-5b69-4991-8de5-bc4a9dea12ea.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <p style="padding-left: 15px">
                        REEd Africa is a dedicated non-profit organization committed to bridging the educational inequality gap in rural Ghana/ northern Ghana. We firmly believe that education is a fundamental right and that every individual, regardless of their background, deserves access to quality education. Through our literacy clinics and digital skills training programs, we aim to empower individuals with the tools and knowledge needed to thrive in an increasingly digital world.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('donate_section')
    
    @include('contact')

  </main><!-- End #main -->

  @include('footer')

</body>

</html>