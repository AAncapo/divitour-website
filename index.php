<?php
include('includes/dbh.inc.php');
$subtitle='The best professional agency specializing in scuba and water activities in Cuba';
include('includes/header.inc.php');
?>
<!-- Header -->
<header id="home" class="container-fluid p-0 mb-5">
  <div class="d-flex flex-column" style="height: 70vh; position: relative;">
    <div class="w-100 h-100 position-relative">
      <img class="w-100 h-100 object-fit-cover object-position-center" src="images/home-banner.jpg">
      <div class="gradient"></div>
    </div>
    <div class="row align-items-bottom w-100 h-100 position-absolute m-0" style="pointer-events: none;">    
      <div class="container d-block m-auto pb-4">
        <div class="col-md-8 p-0 m-auto">
          <p class="fs-4 fw-semibold text-light text-center">
            Join us <br/>in exploring the hidden treasures beneath the waves
            <br/>and make your underwater adventure with Divitour <br/>a
            journey to remember.
          </p>
        </div>
        <div class="col-md-8 p-0 m-auto">
          <?php include('includes/product-search-form.inc.php'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row w-100 m-0 py-3 align-items-center justify-content-center gap-3" style="background-color: var(--darkblue-color);">
    <div class="col d-md-flex justify-content-end gap-2 text-light text-center fs-5 fw-bold"><img src="images/icons/medal-svgrepo-com.svg"><p class="m-0">Sponsored by <br>Pipin Ferreras</p></div>
    <div class="col d-md-flex justify-content-center gap-2 text-light text-center fs-5 fw-bold"><img src="images/icons/map-location-pin-svgrepo-com.svg"><p class="m-0">+50 Unique <br>Experiences</p></div>
    <div class="col d-md-flex justify-content-start gap-2 text-light text-center fs-5 fw-bold"><img src="images/icons/graduate-certificate-svgrepo-com.svg"><p class="m-0">Specialized <br>Courses</p></div>
  </div>
</header>

<main class="container-fluid p-0">
  <!-- Destinations -->
<?php if ($stmt=$connect->prepare('SELECT * FROM destinos')) {
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) { ?>
        <section id="destinations" class="container-fluid my-5 p-0" >
          <h1 class="text-center display-5 fw-bold section-title">Top Destinations</h1>
          <div id="dest-card-container" class="row g-0" style="height: 70vh;">

    <?php while ($row=mysqli_fetch_assoc($result)) { ?>
            <a id="destCard" class="col-3 col-lg p-0 d-flex align-items-center position-relative text-light text-decoration-none" href="<?php echo $base_url.'pages/destino.php?dest_id='.$row['id'] ?>"  style="overflow:hidden;">
              <video
                class="w-100 h-100 object-fit-cover object-position-center"
                id="destVideo"
                loop
                muted
                preload="metadata"
                loading="lazy"
                frameborder="0"
                src="<?php echo $base_url.'images/destinos/'.$row['id'].'.mp4' ?>"
                poster="<?php echo $base_url.'images/destinos/'.$row['id'].'.jpg' ?>"
              ></video>
              <div id="cardGradient"></div>
              <p id="destName" class="position-absolute w-100 m-0 text-center fw-semibold">
                <?php echo strtoupper($row['nombre']) ?>
              </p>
          </a>
    <?php } ?>
            
          </div>
        </section>
  <?php } 
      } ?>

<!-- Events -->
<?php
if ($stmt = $connect->prepare('SELECT * FROM eventos')) {
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) { ?>
  <section id="events" class="contaier-fluid w-100 mb-5 p-0">
    <h1 class="text-center mb-2 display-5 fw-bold section-title">Upcoming Events</h1>
      <div id="eventsCarousel" class="carousel slide" data-bs-touch="true" style="height:600px">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#eventsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#eventsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#eventsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner h-100">

          <?php 
          $active = "active";
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
  </section>
<?php
  }
} else {
  echo 'Connection to database failed!';
}
?>
  <!-- Seleccion de Excursiones -->
  <!-- <section id="excursionsSelection" class="container my-5">
    <h1 class="text-center display-5 fw-bold section-title">Popular Excursions</h1>
    <div class="row justify-content-around gap-2 align-items-center" style="min-height: 200px;">
       <p id="excSelLocation" class="text-center fs-5 fw-semibold p-2" style="height:30px; color: var(--softred);"><img src="images/icons/icons8-gps-30.png" style="width: 30px; height: 30px;">Havana</p>
      <div class="col-lg-2 p-0 h-100 rounded shadow position-relative" style="overflow: hidden;">
        <img class="w-100 h-100 object-fit-cover object-position-center" src="images/destinos/cayolargo.jpg" alt="">
        <div class="gradient2">
          <p class="d-flex text-center text-light fs-5 fw-semibold w-100 h-100 p-2 align-items-center">Diving in Coral Reefs</p>
        </div>
      </div>
      <div class="col-lg-2 p-0 h-100 rounded shadow position-relative" style="overflow: hidden;">
        <img class="w-100 h-100 object-fit-cover object-position-center" src="images/destinos/cayolargo.jpg" alt="">
        <div class="gradient2">
          <p class="d-flex text-center text-light fs-5 fw-semibold w-100 h-100 p-2 align-items-center">Russian Frigate #383</p>
        </div>
      </div>
      <div class="col-lg-2 p-0 h-100 rounded shadow position-relative" style="overflow: hidden;">
        <img class="w-100 h-100 object-fit-cover object-position-center" src="images/destinos/cayolargo.jpg" alt="">
        <div class="gradient2">
          <p class="d-flex text-center text-light fs-5 fw-semibold w-100 h-100 p-2 align-items-center">Coral Tour</p>
        </div>
      </div>
      <div class="col-lg-2 p-0 h-100 rounded shadow position-relative" style="overflow: hidden;">
        <img class="w-100 h-100 object-fit-cover object-position-center" src="images/destinos/cayolargo.jpg" alt="">
        <div class="gradient2">
          <p class="d-flex text-center text-light fs-5 fw-semibold w-100 h-100 p-2 align-items-center">Super Reef</p>
        </div>
      </div>
      <div class="col-lg-2 p-0 h-100 rounded shadow position-relative" style="overflow: hidden;">
        <img class="w-100 h-100 object-fit-cover object-position-center" src="images/destinos/cayolargo.jpg" alt="">
        <div class="gradient2">
          <p class="d-flex text-center text-light fs-5 fw-semibold w-100 h-100 p-2 align-items-center">Seafari Cayo Blanco</p>
        </div>
      </div>
    </div>
  </section> -->

</main>

  

<script src=<?php echo $base_url . 'js/index.js' ?> ></script>

<?php
include('includes/footer.inc.php');
?>
