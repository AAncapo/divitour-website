<?php
include('../includes/dbh.inc.php');
include('../includes/header.inc.php');
include('../includes/helper_functions.inc.php');

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
<header class="container-fluid p-0 mb-5" style="height: 40vh;">
    <img class="w-100 h-100" src= "<?php echo 'destino/images/banners/banner-' . $destid . '.jpg'; ?>" style="object-fit:cover" />
</header>
<!-- Name & Description -->
<section class="container">
  <h1 class="display-1" > <?php echo $dest_rec['nombre']?> </h1>
  <p class='fs-3 fw-light mb-5' id="destDescription"> <?php echo $dest_rec['descripcion']?> </p>
</section>
<?php 
    $dest_stmt->close();
  } else {
    echo 'No destination found with id=' . $_GET['dest_id'];
    die();
  }
} ?>

<main class="container-fluid">
  <div class="row justify-content-center">
    <!-- Map -->
    <div class="col">
      <img src="" alt="">
    </div>
  </div>
        <!-- Services -->
        <div class="container-fluid w-100 p-0">
          <h1 class="display-4 text-center section-title">Services</h1>
            <!-- Excursiones -->
            <?php if ($stmt = $connect->prepare('SELECT * FROM servicios where destino_id = ?')) {
              $stmt->bind_param('s',$destid);
              $stmt->execute();
              
              $result = $stmt->get_result();
              if ($result->num_rows > 0) { ?>

  
  <!-- <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div> -->


  
                <div class="accordion accordion-flush" id="servCardsAccordion">
                  <!-- <div class="row justify-content-center"> -->
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <?php $servId = 'serv' . $row['id']; ?>

                  <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $servId; ?>" aria-expanded="false" aria-controls="<?php echo $servId; ?>"> <?php echo $row['nombre']; ?> </button>
                      </h2>
                      <div id="<?php echo $servId; ?>" class="accordion-collapse collapse" data-bs-parent="#servCardsAccordion">
                        <div class="accordion-body">
                        <?php echo set_simple_p('',$row['descripcion'],"servDesc","card-text");?>

                          <!-- <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
                        </div>
                      </div>
                    </div>




                  <!-- Service Card -->
                  <!-- <div class="servcard-separator ms-5" style="border-top: 1px solid rgba(0, 0, 0, 0.2); "></div> -->
                  <!-- <div class="card mb-3 servcard border-0"> -->
                    <!-- <div id="servCardWrapper" class="row"> -->
                      <!-- <div id="servImage" class="col-md-4">
                        <img src= <?php echo $row['image_url']; ?> class="img-fluid rounded-start"/>
                      </div> -->
                      <!-- <div class="card-body col-md-8">
                        <h5 id="servName" class="card-title fs-4"><?php echo $row['nombre']; ?></h5>
                        <?php echo set_simple_p('',$row['descripcion'],"servDesc","card-text");?>
                        <?php echo set_psmall('Disponibilidad: ', $row['horario']); ?>
                        <?php echo set_psmall('Duracion: ', $row['duracion']); ?>
                        <?php echo set_psmall('Inmersiones: ', $row['inmersiones']); ?>
                        <?php echo set_psmall("",$row['precios']); ?>
                        <?php echo set_psmall("Politica de Cancelacion: ", $row['pol_cancel']); ?>
                      </div> -->
                    <!-- </div> -->
                  <!-- </div> -->
              <?php } ?>
            </div>
            <?php }
              }
              $stmt->close();
            ?>
            <!-- Cursos -->
            <!-- <?php if ($stmt = $connect->prepare('SELECT * FROM cursos')) {
              $stmt->execute();
              
              $result = $stmt->get_result();
              if ($result->num_rows > 0) { ?>
          <h2>Courses</h2>
            <div class="container-fluid p-0">
              
              <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card mb-3 servcard">
                    <div id="servCardWrapper" class="row g-0">
                      <div class="card-body col-md-8">
                        <h5 id="servName" class="card-title"><?php echo $row['title']; ?></h5>
                        <?php echo set_psmall('Inmersiones: ', $row['inmersiones']); ?>
                      </div>
                    </div>
                  </div>
                
                <?php } ?>
              </div>
        </div>
<?php } else {
        echo 'Couldnt find any courses :(';
      }
      $stmt->close();
    }
  ?> -->

  <?php 
      if ($stmt = $connect->prepare('SELECT * FROM hoteles where destino_id = ?')) {
        $stmt->bind_param('s',$destid);
        $stmt->execute();
        
        $res = $stmt->get_result();
        if ($res->num_rows > 0) { ?>
          <!-- Hotels -->
          <div id='hoteles' class="row justify-content-center m-5">
            <h1 class="text-center display-4 section-title">Hotels</h1>
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
      } ?>
</main>

<?php
      include('../includes/footer.inc.php');
    }
?>
