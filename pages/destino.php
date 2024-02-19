<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      DIVITOUR | The best professional agency specializing in scuba and water
      activities in Cuba
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <header>
      <!-- Navbar -->
      <?php include('../includes/navbar.php'); ?>
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">DIVITOUR</a>
          <!-- navbar toggle list items button -->
          <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- navbar collapsable list items -->
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#home" aria-current="page"
                  >Home<span class="visually-hidden">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#events">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#destinations">Destinations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contacts">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="dropdownId"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Dropdown</a
                >
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="#">Action 1</a>
                  <a class="dropdown-item" href="#">Action 2</a>
                </div>
              </li> -->
            </ul>
            <!-- <form class="d-flex my-2 my-lg-0">
              <input
                class="form-control me-sm-2"
                type="text"
                placeholder="Search"
              />
              <button
                class="btn btn-outline-success my-2 my-sm-0"
                type="submit"
              >
                Search
              </button>
            </form> -->
          </div>
        </div>
      </nav>
      <!-- Banner -->
      <div class="container-fluid" style="height: 40vh">
        <img id="destBanner" src="" alt="" />
      </div>
    </header>
    <main class="container">
      <!-- Name & Description -->
      <h1 id="destName">Destination Name</h1>
      <p id="destDesc">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sint
        quibusdam placeat! Vero qui doloremque illum eos suscipit fugit amet
        possimus, perferendis pariatur optio, magnam natus sint. Quisquam,
        beatae aperiam.
      </p>
      <h1 class="text-center section-title">Hotels</h1>
      <div id="destHotels" class="container-fluid row"></div>
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <script src="destino/js/destination.js"></script>
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
