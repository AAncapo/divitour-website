<?php
include('includes/dbh.inc.php');
include('includes/header.inc.php');
?>

<header id="home" class="container-fluid p-0 mb-5">
  <div class="d-flex flex-column" style="height: 600px; position: relative;">
    <div class="w-100 h-100 position-relative">
      <img class="w-100 h-100 object-fit-cover object-position-center" src="images/home-banner.jpg">
      <div class="gradient"></div>
    </div>

    <div class="w-100 h-100 position-absolute" style="pointer-events: none;">    
      <div class="row flex-column justify-content-end align-items-center w-100 h-100 pb-4 m-0">
        <div class="col-md-8 p-0">
          <p class="fs-4 fw-semibold text-light text-center">
            Join us <br/>in exploring the hidden treasures beneath the waves
            <br/>and make your underwater adventure with Divitour <br/>a
            journey to remember.
          </p>
        </div>
        <div class="col-md-8 p-0">
          <?php include('includes/booking_form.inc.php'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row w-100 m-0 py-2 align-items-center justify-content-around gap-3" style="background-color: var(--darkblue-color);">
    <div class="col text-light text-center fs-5 fw-bold">Sponsored by <br>Pipin Ferreras</div>
    <div class="col text-light text-center fs-5 fw-bold">+50 Unique <br>Experiences</div>
    <div class="col text-light text-center fs-5 fw-bold">Specialized <br>Courses</div>
  </div>
</header>
<main class="container-fluid p-0">
<!-- Events -->
<?php
if ($stmt = $connect->prepare('SELECT * FROM eventos')) {
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) { ?>
  <div id="events" class="contaier-fluid w-100 mb-5 p-0">
    <h1 class="text-center mb-2 display-5 fw-bold section-title">Upcoming Events</h1>
      <div id="eventsCarousel" class="carousel slide" data-bs-touch="true" style="height:600px">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#eventsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#eventsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#eventsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner h-100">
          <?php $active = "active";
          while ($row = mysqli_fetch_assoc($result)) { ?>
          <div class="carousel-item <?php echo $active; $active=""; ?> h-100">
            <img src="<?php echo 'images/eventos/' . $row['banner_url']; ?>" loading="lazy" class="d-block w-100 h-100 object-fit-cover" alt="<?php echo $row['titulo'] ?>">
            <div class="gradient2"></div>
            <div class="carousel-caption d-md-block w-lg-50" style="min-height: fit-content;">
              <h4 class="fs-sm-4 fs-1 fw-semibold text-start"><?php echo $row['titulo'] ?></h4>
              <p id="eventDesc" class="fs-5 fw-medium text-start"><?php echo $row['descripcion'] ?></p>
              <p class="fw-medium text-start"><?php echo $row['fecha'] ?></p>
              <button class="btn btn-outline-light ms-0 fs-4 fw-bold p-3 shadow" data-bs-toggle="modal" data-bs-target="#modal" style="letter-spacing: .1em;">Subscribe</button>
            </div>
          </div>
          <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#eventsCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#eventsCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- fotosub modal -->
      <!-- <div id="modal" class="modal fade">
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
    </div> -->
  </div>
<?php
  }
} else {
  echo 'Connection to database failed!';
}
?>
  <!-- Destinations -->
  <div id="destinations" class="container mb-5 mt-5" >
    <h1 class="text-center display-5 fw-bold section-title">Top Destinations</h1>
    <div id="dest-card-container" class="container-fluid row g-0"></div>
  </div>
  <!-- About us -->
  <div id="about" class="container">
    <h1 class="text-center display-5 fw-bold section-title">Who we are</h1>
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
      with the latest developments in our destinations. Our mission is to provide unique and highly
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

<script src=<?php echo $base_url . 'js/index.js' ?> ></script>

<?php
include('includes/footer.inc.php');
?>
