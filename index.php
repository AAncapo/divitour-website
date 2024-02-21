<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="author" content="AAncapo" />
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <link rel="icon" href="favicon.png" />

    <meta
      name="description"
      content="The best professional agency specializing in scuba and water activities
      in Cuba"
    />
    <title>
      DIVITOUR | The best professional agency specializing in scuba and water
      activities in Cuba
    </title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/main.css" />
    <!-- font Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
  </head>

  <body
    class="bg-dark w-100"
    style="font-family: 'Montserrat', sans-serif; margin-top: 59px"
  >
    <!-- Navbar -->
    <?php include('includes/navbar.php') ?>
  <!-- Header  -->
  <header class="container-fluid p-0" style="position:relative;">
    <div id="home" class="mb-4 bg-dark" style="height: 95vh;display:flex; align-items:center; justify-content:space-around">
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
    <main class="container">
      <!---------- Events ---------->
      <div id="events" class="container-fluid mt-5">
        <h1 class="text-center mb-2 text-light section-title">
          Upcoming Events
        </h1>
        <div class="row">
          <div
            id="evCard"
            class="card bg-dark text-light mb-3"
            style="border: none"
          >
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  id="evImage"
                  src="Image Source"
                  class="img-fluid"
                  alt="Card title"
                  style="width: 100%"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <!-- event title -->
                  <h1 id="evTitle" class="card-title" ></h1>
                  <!-- event description -->
                  <p id="evDesc" class="card-text" style="font-weight:200">
                    </p>
                  <p class="card-text">
                    <small id="evDate" class="text-muted"
                      ></small
                    >
                  </p>
                  <button
                    class="btn btn-light rounded-0"
                    data-bs-toggle="modal"
                    data-bs-target="#modal"
                    href="/"
                  >
                    Subscribe
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- fotosub modal -->
         <div id="modal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <!-- <h3>Subscribe to FotoSub Event</h3> -->
              </div>
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
      <!-- Destinations -->
      <div
        id="destinations"
        class="container-fluid mb-5 mt-5"
      >
        <h1 class="text-center text-light section-title">
          Popular Destinations
        </h1>
        <div id="dest-card-container" class="container-fluid row g-0"></div>
      </div>
      <!-- About us -->
      <div
        id="about"
        class="container"
        style="height: fit-content; margin-bottom: 100px"
      >
        <h1 class="text-light section-title">Who we are</h1>
        <p class="text-light">
          At Divitour, we take pride in being the leading agency for diving and
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
      <!-- Contacts -->
      <div id="contacts" class="container d-flex" style="margin-bottom: 100px;flex-direction:column">
        <h3 class="text-light text-center section-title">Contact Us</h3>
        <div class="contact-items">
          <span class="contact-item">
            <img src="images/icons/whatsapp.png" alt="" /><a
              href="https://wa.me/5352529974" target="_blank"
              >(+53) 52529974</a
            >
          </span>
          <span class="contact-item">
            <img src="images/icons/icons8-address.png" /><a
              style="text-decoration: none"
              href=""
              >5ta Avenida e/ 62 & 66, Miramar, La Habana, Cuba</a
            >
          </span>
          <span class="contact-item">
            <img src="images/icons/icons8-mail.png" /><a
              href="mailto: info@divitour.com"
              target="_blank"
              >info@divitour.com</a
            >
          </span>
          <!-- Social Media -->
          <div class="social-media">
            <span class="contact-item">
              <a href="https://www.facebook.com/divitourtravel/" target="_blank"
              ><img src="images/icons/icons8-facebook.png"
              /></a>
            </span>
            <span class="contact-item">
              <a href="https://www.instagram.com/divitourtravel/" target="_blank"
              ><img src="images/icons/icons8-instagram.png"
              /></a>
            </span>
          </div>
        </div>
      </div>

      <!-- Whatsapp widget -->
      <!-- <script
          src="https://static.elfsight.com/platform/platform.js"
          data-use-service-core
          defer
        ></script>
        <div
          class="elfsight-app-313ebca9-aa4a-4f79-b99d-803f64cb2f5d"
          data-elfsight-app-lazy
        ></div> -->
    </main>
    <footer class="container">

    <!-- Partners -->
    <div class="container-fluid mb-5">
      <h3 class="text-center text-light mb-2 section-title">Our Partners</h3>
      <div class="row mb-5 w-100 partners-container">
        <a class="col partner" href="/">
          <img
            src="images/partners/cammproductions.png"
          />
        </a>
        <a
          class="col partner"
          href="https://www.daiquiritravel.com/home"
          target="_blank"
        >
          <img src="images/partners/daiquiri.png" />
        </a>

        <a class="col partner" href="https://ecotur.travel/" target="_blank">
          <img src="images/partners/ecotur.png" />
        </a>
        <a
          class="col partner"
          href="https://www.grupocubanacan.com/"
          target="_blank"
        >
          <img src="images/partners/cubanacan.png" />
        </a>
        <a
          class="col partner"
          href="https://www.marinasmarlin.com/"
          target="_blank"
        >
          <img src="images/partners/marlin.png" />
        </a>
        <a
          class="col partner"
          href="https://www.bluediamondresorts.com/es"
          target="_blank"
        >
          <img src="images/partners/bluediamond.png" />
        </a>
      </div>
    </div>
    </footer>

    <script src="js/index.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
