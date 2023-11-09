<!DOCTYPE html>
<html lang="en">

@include('head')

<body>
@include('header')
<section id="team" class="team">
<div class="container" style="padding-top: 80px;" data-aos="fade-up">

<header class="section-header">
  <h2>Team</h2>
  <p>Our team</p>
</header>

<div class="row gy-4 my-4">

<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
    <div class="member">
      <div class="member-img member-img-restrict-height">
        <img src="{{ asset('assets/images/Emefa.png') }}" class="img-fluid" alt="">
        <div class="social">
          <a href=""><i class="bi bi-twitter"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <div class="member-info">
        <h4 class="view-team-member-details" data-name="Emefa" data-bs-toggle="modal" data-bs-target="#team-modal">Emefa Kumaza</h4>
        <span>Co-Founder / Executive Director</span>
        <p>From being a full-time English teacher to co-founding Rural Empowerment through Education (REEd Africa), Emefa has spearheaded numerous interventions and programs to expand educational opportunities and provide solutions that empower communities.</p>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
    <div class="member">
      <div class="member-img member-img-restrict-height">
        <img src="{{ asset('assets/images/William.png') }}" class="img-fluid" alt="">
        <div class="social">
          <a href=""><i class="bi bi-twitter"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <div class="member-info">
        <h4 class="view-team-member-details" data-name="William" data-bs-toggle="modal" data-bs-target="#team-modal">William Fiifi Andrews</h4>
        <span>Head of Finance & Sponsorship</span>
        <p>William's journey showcases dedication to advancement, shaping impactful ventures. Committed to REED's mission, his diverse skills fuel positive change in the nonprofit and corporate sectors.
</p>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
    <div class="member">
      <div class="member-img member-img-restrict-height">
        <img src="{{ asset('assets/images/Bridget.png') }}" class="img-fluid" alt="">
        <div class="social">
          <a href=""><i class="bi bi-twitter"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <div class="member-info">
        <h4 class="view-team-member-details" data-name="Bridget" data-bs-toggle="modal" data-bs-target="#team-modal">Bridget Mensah</h4>
        <span>Research and Development Associate</span>
        <p>Passion for education's transformative potential led Bridget to join REED Africa in 2022. She has embraced the role of an R&D Associate to contribute to research initiatives and support the team's mission.</p>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
    <div class="member">
      <div class="member-img member-img-restrict-height">
        <img src="{{ asset('assets/images/Dorcas.png') }}" class="img-fluid" alt="">
        <div class="social">
          <a href=""><i class="bi bi-twitter"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <div class="member-info">
        <h4 class="view-team-member-details" data-name="Dorcas" data-bs-toggle="modal" data-bs-target="#team-modal">Dorcas Kongwie</h4>
        <span>Social Media and Communications Associate.</span>
        <p>Dorcas dedicates her time as a volunteer with REEd where she plays a vital role in the social media team. With a fervent passion for storytelling for change, her role extends beyond conventional duties, as she uses her skills to craft narratives that inspire transformation and empower communities.</p>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
    <div class="member">
      <div class="member-img member-img-restrict-height">
        <img src="{{ asset('assets/images/Benjamin.png') }}" class="img-fluid" alt="">
        <div class="social">
          <a href=""><i class="bi bi-twitter"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
      <div class="member-info">
        <h4 class="view-team-member-details" data-name="Benjamin" data-bs-toggle="modal" data-bs-target="#team-modal">Benjamin Essien</h4>
        <span>Head of Community Empowerment Programs (SONGSIM).</span>
        <p>Benjamin's role acknowledges and champions the pivotal role mothers and community  play in shaping their children's educational journeys. He leads REEd Africa’s  informal education programs and initiatives that are intended to create a ripple effect that will empower women, enrich children's lives, and uplift the entire community.</p>
      </div>
    </div>
  </div>

</div>

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="team-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="member">
        <div class="member-img">
          <div class="member-modal-image"></div>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="member-info">
          <h4 class="member-modal-name">Dorcas Kongwie</h4>
          <span class="member-modal-title">Social Media and Communications Associate.</span>
          <p class="member-modal-desc">Dorcas dedicates her time as a volunteer with REEd where she plays a vital role in the social media team. With a fervent passion for storytelling for change, her role extends beyond conventional duties, as she uses her skills to craft narratives that inspire transformation and empower communities.</p>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
</body>

@include('footer')

</html>