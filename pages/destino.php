<?php
include('../includes/dbh.inc.php');
include('../includes/header.inc.php');

// get destination from table
if (isset($_GET['dest_id'])) {
  $destid = htmlspecialchars($_GET['dest_id']);
  if ($dest_stmt = $connect->prepare('SELECT * FROM destinos where id = ?')) {
    $dest_stmt->bind_param('s',$destid);
    $dest_stmt->execute();
    
    $result = $dest_stmt->get_result();
    if ($result->num_rows > 0){
      $dest_rec = mysqli_fetch_assoc($result);
?>

<!-- Banner -->
<header>
  <div class="container-fluid p-0 mb-5" style="height: 40vh;">
    <img src="" alt="" style="width:100%; height:100%; object-fit:cover" />
  </div>
</header>
<main class="container">
  <!-- Name & Description -->
  <h1> <?php echo $dest_rec['nombre']?> </h1>
  <p class='mb-5'> <?php echo $dest_rec['descripcion']?> </p>
  <?php 
      $dest_stmt->close();
    } else {
      echo 'No destination found with id=' . $_GET['dest_id'];
      die();
    }
  }
  ?>
      
    <?php
    if ($stmt = $connect->prepare('SELECT * FROM servicios where destino_id = ?')) {
        $stmt->bind_param('s',$destid);
        $stmt->execute();
        
        $res = $stmt->get_result();
        if ($res->num_rows > 0) { ?>
          <!-- Services -->
          <div class="container-fluid w-100">
            <h1 class="text-center section-title">Services</h1>

            <!-- Services Filters -->
            <div class="row justify-content-center m-3">
              <div id="serviceFilters" class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="immersion" autocomplete="off" >
                <label class="btn btn-outline-dark" for="immersion">Immersions</label>
                
                <input type="radio" class="btn-check" name="btnradio" id="excursion" autocomplete="off" checked>
                <label class="btn btn-outline-dark" for="excursion">Excursions</label>
                
                <input type="radio" class="btn-check" name="btnradio" id="course" autocomplete="off">
                <label class="btn btn-outline-dark" for="course">Courses</label>
              </div>
            </div>
              
            <div class="container-fluid w-100">
            <?php while ($record = mysqli_fetch_assoc($res)) { ?>
                  <!-- Service Card -->
                  <div id="servCard" class="card mb-3 <?php echo $record['tipo']; ?>" >
                    <div id="servCardWrapper" class="row g-0">
                      <div id="servImage" class="col-md-4">
                        <img src= <?php echo $record['image_url']; ?> 
                          class="img-fluid rounded-start"
                        />
                      </div>
                      <div class="card-body col-md-8">
                        <h5 id="servName" class="card-title"><?php echo $record['nombre']; ?></h5>
                        <p id="servDesc" class="card-text"><?php echo $record['descripcion']; ?></p>
                        <p class="card-text">
                          <small class="text-muted">Availability:  <?php echo $record['horario']; ?></small>
                        </p>
                        <p class="card-text">
                          <small class="text-muted">Duration: <?php echo $record['duracion']; ?></small>
                        </p>
                        <p class="card-text"><?php echo $record['precios']; ?></p>
                        <p class="card-text">
                          <small class="text-muted">Cancelation Policy:  <?php echo $record['pol_cancel']; ?></small>
                        </p>
                      </div>
                    </div>
                  </div>
            <?php } ?>
            </div>
          </div>
          <script>
            // Handle Service Cards filtering
            let servFilters = document.querySelector('#serviceFilters'),
            filterBtns = servFilters.querySelectorAll('.btn-check');
            let servCards = document.querySelectorAll('#servCard');
            
            filterServices();
            
            filterBtns.forEach(fb => {
              fb.addEventListener('click', ()=> {
                filterBtns.forEach(element => {
                  if (element.hasAttribute('checked')) { element.removeAttribute('checked'); }
                });
                fb.setAttribute('checked','');
                filterServices();
              })
            })

            function filterServices() {
              filterBtns.forEach(filterb => {
                if (filterb.hasAttribute('checked')) {
                  // console.log(filterb.id);
                  servCards.forEach(scard => {
                    scard.style.display = scard.classList.contains(filterb.id) ? 'initial' : 'none';
                  });
                }
              });
            }

          </script>
  <?php } else {
          echo 'Couldnt find any service :/';
        }
        $stmt->close();
      }
  ?>

  <?php 
      if ($stmt = $connect->prepare('SELECT * FROM hoteles where destino_id = ?')) {
        $stmt->bind_param('s',$destid);
        $stmt->execute();
        
        $res = $stmt->get_result();
        if ($res->num_rows > 0) { ?>
          <!-- Hotels -->
          <div id='hoteles' class="mb-5">
            <h1 class="text-center section-title">Hotels</h1>
            <div id="htlCardContainer" class="container-fluid row justify-content-center">
          <?php while ($record = mysqli_fetch_assoc($res)) { ?>
              <!-- Insert Hotel Cards -->
              <div id="htlCard" class="card m-2">
                <div id="htlImage">
                  <img class="card-img-top" src= <?php echo $record['image_url']; ?> />
                </div>
                <div class="card-body">
                  <h4 id="htlName" class="card-title text-center"> <?php echo $record['nombre']; ?> </h4>
                  <p id="htlDesc" class="card-text"> <?php echo $record['descripcion']; ?> </p>
                </div>
              </div>
          <?php } ?>
            </div>
          </div>
  <?php } 
        $stmt->close();
      }
  ?>
</main>

<?php
      include('../includes/footer.inc.php');
    }
?>
