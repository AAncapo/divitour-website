<?php
include('includes/dbh.inc.php');
include('includes/header.inc.php');
?>

<header class="container-fluid p-0" style="position:relative;">
  <div id="home" class="mb-4" style="height: 95vh; display:flex; align-items:center; justify-content:space-around">
    <div class="banner-image">
      <img src="images/home-banner.jpg" alt="" >
      <div class="banner-gradient"></div>
    </div>
    <div
    class="container-sm"
    style="position:absolute; width:fit-content"
    >
      <p class="col-md-8 fs-4 text-light mb-5">
        Join us <br />in exploring the hidden treasures beneath the waves
        <br />and make your underwater adventure with Divitour <br />a
        journey to remember.
      </p>
      <!-- <button class="btn btn-light btn-lg rounded-0" type="button">
          Book Now
        </button> -->
    </div>
  </div>
</header>
<main class="container" style="height: fit-content;">
<!-- Events -->
  <div id="events" class="container-fluid mt-5">
    <h1 class="text-center mb-2 section-title">Upcoming Events</h1>
    <div id="eventsCarousel" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#eventsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#eventsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#eventsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <!-- Carousel Item -->
        <!-- ///////////// -->
        <div class="carousel-item active">
          <div id="evCard" class="card mb-3 border-0">
            <div class="row g-0">
              <div class="col-md-4 ev-img-container">
                <img
                id="evImage"
                  src=""
                  class="img-fluid rounded-0"
                  alt="Card title"
                />
              </div>
              <div class="col-md-8 ev-text-container">
                <div class="card-body">
                  <h5 id="evTitle" class="card-title">Card title</h5>
                  <p id="evDesc" class="card-text">
                    This is a wider card with supporting text below as a
                    natural lead-in to additional content. This content is a
                    little bit longer.
                  </p>
                  <p class="card-text">
                    <small id="evDate" >Last updated 3 mins ago</small>
                  </p>
                  <button class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#modal">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- fotosub modal -->
        <div id="modal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header"> </div>
            <div class="modal-body">
              <script
                charset="utf-8"
                type="text/javascript"
                src="//js-eu1.hsforms.net/forms/embed/v2.js"
              ></script>
              <script>
                hbspt.forms.create({
                  region: "eu1",
                  portalId: "144042486",
                  formId: "e4b74cc4-01e7-4f4c-a1f8-b07a0b60af4b",
                });
              </script>
            </div>
            <div class="modal-footer">
              <button
                class="btn btn-dark"
                data-bs-target="#modal"
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Destinations -->
  <div id="destinations" class="container-fluid mb-5 mt-5" >
    <h1 class="text-center section-title">Popular Destinations</h1>
    <div id="dest-card-container" class="container-fluid row g-0"></div>
  </div>
  <!-- About us -->
  <div id="about" class="container">
    <h1 class="section-title">Who we are</h1>
    <p>At Divitour, we take pride in being the leading agency for diving and
      aquatic activities in Cuba. Founded in 2015, we have been pioneers in
      developing training programs and educational initiatives for
      professionals on the island. <!--Our headquarters are strategically
      located in Cuba, known for its abundant marine biodiversity, stunning
      coral reefs, and warm, crystal-clear waters. With multiple
      internationally certified diving centers, top-notch marinas, and
      high-standard hotels spread along its 5,746 kilometers of coastline,
      Cuba provides the perfect setting for unforgettable experiences. The
      Divitour team consists of highly skilled professionals who specialize
      in our destination and aquatic activities. This expertise allows us to
      have in-depth knowledge of the activities we offer and stay up-to-date
      with the latest developments in our destinations. Through our
      commitment to excellence, we have built trust and established direct
      partnerships with key service providers and business partners,
      eliminating intermediaries and ensuring the seamless execution of our
      aquatic experiences. Our mission is to provide unique and highly
      satisfying aquatic experiences that meet the highest standards of
      quality and professional technical rigor. Additionally, we actively
      contribute to advising and training other entities to foster the
      development of aquatic activities in Cuba. At Divitour, we are
      dedicated to creating unforgettable moments and helping you explore
      the wonders of Cuba's aquatic world.  -->
      Divitour Global Sponsor and Associate Colaborate - Pipin Ferreras, is a former professional free
      diver and world-record holder in the sport. He is considered one of
      the pioneers and legends of free diving.
    </p>
  </div>
</main>

<?php
include('includes/footer.inc.php');
?>
