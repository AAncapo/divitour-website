<footer class="container-fluid" style="background-color: var(--darkblue-color);">
  <!-- Newsletter -->
  <section class="container-fluid py-5 mb-5" style="background-color: var(--darkblue-color);">
    <p class="fs-4 fw-semibold text-center text-light" style="letter-spacing: 1px;">Subscribe to our Newsletter</p>
    <div class="row w-100 justify-content-center m-0" style="height: 60px;">
      <form class="col-lg-4 d-flex justify-content-around" method="post">
        <input name="email" type="email" class="col form-control rounded-0 rounded-start" id="emailInput" placeholder="  example@mail.com">
        <button type="submit" class="col-2 fw-semibold btn btn-danger rounded-0 rounded-end" style="background-color: var(--darkred-color);"><p class="d-none d-md-flex text-center m-0">Subscribe</p><img class="d-flex d-md-none w-100 h-100" src="<?php echo $base_url . 'images/icons/form-next-link-svgrepo-com.svg' ?>"></button>
      </form>
    </div>
  </section>
  <!-- About us -->
  <div class="row justify-content-around">
    <div id="about" class="col-lg-4">
      <h1 class="text-light text-center text-md-start fs-3 fw-bold mb-3">Who we are</h1>
      <p class="fs-5 fw-medium" style="color: gray;">At Divitour, we take pride in being the leading agency for diving and
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
    <!-- Contacts -->
    <div id="contacts" class="col-lg-4">
      <h3 class="text-light text-center text-md-start fs-3 fw-bold mb-3">Contact Us</h3>
      <div class="d-block">
        <!-- Contact Links -->
        <div class="row" style="height: 50px;">
          <a class="h-100 fs-5 fw-medium text-decoration-none text-light" href="https://wa.me/5352529974" target="_blank"><img class="h-100 object-fit-contain" src=<?php echo $base_url . 'images/icons/phone-call-svgrepo-com.svg'; ?> />  (+53) 52529974</a>
        </div>
        <div class="row" style="height: 50px;">
          <a class="h-100 fs-5 fw-medium text-decoration-none text-light" style="text-overflow: clip; overflow:hidden"><img class="h-100 object-fit-contain" src=<?php echo $base_url . 'images/icons/pin-on-path-svgrepo-com.svg'; ?> />  5ta Avenida e/ 62 & 66, Miramar, La Habana, Cuba</a>
        </div>
        <div class="row" style="height: 50px;">
          <a class="h-100 fs-5 fw-medium text-decoration-none text-light" href="mailto: info@divitour.com" target="_blank"><img class="h-100 object-fit-contain" src=<?php echo $base_url . 'images/icons/mail-alt-3-svgrepo-com.svg'; ?> />  info@divitour.com</a>
        </div>
        <!-- Follow Us in Social Media -->
        <div class="w-100 d-block mt-2 mb-5">
          <p class="text-light text-center fs-4 fw-bold m-0 h-100 object-fit-contain">Follow Us</p>
          <span class="d-flex justify-content-center gap-3">
            <a class="h-100 object-fit-cover" href="https://www.facebook.com/divitourtravel/" target="_blank">
              <img src=<?php echo $base_url . 'images/icons/facebook-svgrepo-com.svg'; ?> />
            </a>
            <a class="h-100 object-fit-cover" href="https://www.instagram.com/divitourtravel/" target="_blank">
              <img src=<?php echo $base_url . 'images/icons/instagram-167-svgrepo-com.svg'; ?> />
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>

  <!-- Partners -->
  <div class="container-fluid pb-5">
    <p class="w-100 text-light text-center fw-medium mx-auto mb-3">We have built trust and established direct partnerships with key service providers and business partners,<br> eliminating intermediaries and ensuring the seamless execution of our aquatic experiences</p>
    <div id="partnerIcons" class="d-flex justify-content-center">
      <a class="" href="" target="_blank">
        <img src=<?php echo $base_url . 'images/partners/cammproductions.png'; ?> /> </a>
      <a class="" href="https://www.daiquiritravel.com/home" target="_blank" >
        <img src=<?php echo $base_url . 'images/partners/daiquiri.png'; ?> />
      </a>

      <a class="" href="https://ecotur.travel/" target="_blank">
        <img src=<?php echo $base_url . 'images/partners/ecotur.png'; ?> />
      </a>
      <a class="" href="https://www.grupocubanacan.com/" target="_blank" >
        <img src=<?php echo $base_url . 'images/partners/cubanacan.png'; ?> />
      </a>
      <a class="" href="https://www.marinasmarlin.com/" target="_blank" >
        <img src=<?php echo $base_url . 'images/partners/marlin.png'; ?> />
      </a>
      <a class="" href="https://www.bluediamondresorts.com/es" target="_blank" >
        <img src=<?php echo $base_url . 'images/partners/bluediamond.png'; ?> />
      </a>
    </div>
  </div>
</footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="<?php echo $base_url . 'assets/bootstrap-5.3.3-dist/js/bootstrap.min.js'; ?>"
      crossorigin="anonymous"
    ></script>
  </body>
</html>