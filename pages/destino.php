<?php
include('../includes/dbh.inc.php');
include('../includes/header.inc.php');

?>
      <!-- Banner -->
      <div class="container-fluid p-0 mb-5" style="height: 40vh;">
        <img id="destBanner" src="" alt="" style="width:100%; height:100%; object-fit:cover" />
      </div>
    </header>
    <main class="container">
      <!-- Name & Description -->
      <h1 id="destName"></h1>
      <p id="destDesc" class='mb-5'></p>
      <!-- Hotels -->
      <section id='hoteles' class="mb-5">
      <h1 class="text-center section-title">Hotels</h1>
      <div id="destHotels" class="container-fluid row"></div>
      </section>
      <!-- Services -->
      <div class="container-fluid w-100">
        <h1 class="text-center section-title">Services</h1>
        <div id="destServices" class="container-fluid w-100"></div>
      </div>
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
