/**
* Template Name: FlexStart
* Updated: Jul 27 2023 with Bootstrap v5.3.1
* Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 10
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        aos_init();
      }, true);
    }

  });

  var member_d = document.querySelectorAll(".view-team-member-details")

  for(var i=0; i< member_d.length; i++){
    member_d[i].addEventListener('click',function(e){
      console.log("Clicked")
      console.log(this.dataset.name)
      if(this.dataset.name == "Dorcas"){
        document.querySelector(".member-modal-image").innerHTML = "<img src='assets/images/Dorcas.png' class='img-fluid' alt=''>";
        document.querySelector(".member-modal-name").innerHTML = "Dorcas Kongwie";
        document.querySelector(".member-modal-title").innerHTML = "Social Media and Communications Associate.";
        document.querySelector(".member-modal-desc").innerHTML = "Dorcas's commitment to creating a positive impact led her to become a teaching fellow at Lead for Ghana (LFG), she actively contributed to meaningful projects that drive social progress. Alongside her professional roles, she plays a vital role in the social media team. With a fervent passion for storytelling for change, her role extends beyond conventional duties, as she uses her skills to craft narratives that inspire transformation and empower communities. Through her dedication and multifaceted involvement, Dorcas exemplifies how storytelling and media can be formidable tools for driving positive change and amplifying the voices of those in need.";
      }
      if(this.dataset.name == "Emefa"){
        document.querySelector(".member-modal-image").innerHTML = "<img src='assets/images/Emefa.png' class='img-fluid' alt=''>";
        document.querySelector(".member-modal-name").innerHTML = "Emefa Kumaza";
        document.querySelector(".member-modal-title").innerHTML = "Co-Founder / Executive Director";
        document.querySelector(".member-modal-desc").innerHTML = "In 2019, under the Lead for Ghana Teaching fellowship, Emefa was a full-time English teacher in one of the underserved schools in Tamale, Ghana. During her time in the classroom and her placement community,  she encountered numerous hurdles ranging from lack of resources to mindset challenges that affected the educational trajectory of her students and the community negatively. This led to her spearheading numerous interventions and programs to mitigate the situation.  After graduating from the fellowship in 2021 she co-founded Rural Empowerment through Education (REEd Africa) to continue her work  in expanding educational opportunities and providing solutions that empower communities. Emefa is currently pursuing a master’s degree in Education Policy and Management from Vanderbilt University";
      }
      if(this.dataset.name == "William"){
        document.querySelector(".member-modal-image").innerHTML = "<img src='assets/images/William.png' class='img-fluid' alt=''>";
        document.querySelector(".member-modal-name").innerHTML = "William Fiifi Andrews";
        document.querySelector(".member-modal-title").innerHTML = "Head of Finance & Sponsorship";
        document.querySelector(".member-modal-desc").innerHTML = "<p>Recognizing REED Africa's potential to impact lives, William embraced the chance to contribute expertise, now leading Finance and Sponsorships. A Computer Engineer with strategic acumen, his growth led to an Executive Certificate from Accra Business School.</p><p>His journey showcases dedication to advancement, shaping impactful ventures. Committed to REED's mission, his diverse skills fuel positive change in the nonprofit and corporate sectors.</p><p>Professionally, he's CEO of WILLI.AN IT Solutions, merging tech innovation with business solutions. As Marketing Director for Empire Auto Services, his dynamic skills extend to the automotive industry. </p>";
      }
      if(this.dataset.name == "Bridget"){
        document.querySelector(".member-modal-image").innerHTML = "<img src='assets/images/Bridget.png' class='img-fluid' alt=''>";
        document.querySelector(".member-modal-name").innerHTML = "Bridget Mensah";
        document.querySelector(".member-modal-title").innerHTML = "Research and Development Associate";
        document.querySelector(".member-modal-desc").innerHTML = "Passion for education's transformative potential led me to join REED Africa in 2022. As an undergraduate majoring in Computer Engineering at the Accra Institute of Technology, I'm dedicated to leveraging knowledge for communal betterment. I've embraced the role of an R&D Associate to contribute to research initiatives and support the team's mission.";
      }
      if(this.dataset.name == "Benjamin"){
        document.querySelector(".member-modal-image").innerHTML = "<img src='assets/images/Benjamin.png' class='img-fluid' alt=''>";
        document.querySelector(".member-modal-name").innerHTML = "Benjamin Essien";
        document.querySelector(".member-modal-title").innerHTML = "Head of Community Empowerment Programs (SONGSIM)";
        document.querySelector(".member-modal-desc").innerHTML = "<p>Benjamin is enthusiastic  about projects that  impact lives in impoverished communities. His role acknowledges and champions the pivotal role mothers and community  play in shaping their children's educational journeys. He leads REEd Africa’s  informal education programs and initiatives that are intended to create a ripple effect that will empower women, enrich children's lives, and uplift the entire community.</p><p>Professionally, he is a  Licensed investment advisor and C.E.O Phamily Circle. He has run workshops and conferences to educate people on Savings, Investments, wealth creation, expansion and social intervention impact projects for the past 5 years.</p><p>Benjamin is  currently pursuing  his Juris Doctorate (JD) programe at the Baylor University Law</p>";
      }
    });
  }

  var media_images = document.querySelectorAll(".media-images");

  for(var i=0; i< media_images.length; i++){
    media_images[i].addEventListener('click',function(e){
      console.log("Clicked")
      console.log(this.dataset.imageurl)
      document.querySelector('.media-image-modal').innerHTML = "<img src='"+this.dataset.imageurl+"' class='img-fluid' alt=''>"
    })
  }
  

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfokio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Animation on scroll
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})();