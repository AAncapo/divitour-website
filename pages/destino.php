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
  <img class="w-100 h-100" src= "<?php echo 'destino/images/banners/banner-' . $destid . '.jpg'; ?>" style="object-fit:cover;" />
</header>
<!-- Name & Description -->
<section class="container">
  <h1 class="display-1 fw-semibold" style="color: var(--darkblue-color);" > <?php echo $dest_rec['nombre']?> </h1>
  <p class='fs-5 fw-normal mb-5' id="destDescription" > <?php echo $dest_rec['descripcion']?> </p>
</section>
<?php 
    $dest_stmt->close();
  } else {
    echo 'No destination found with id=' . $_GET['dest_id'];
    die();
  }
} ?>

<main class="container-fluid p-0">
  <h1 class="display-5 text-center fw-semibold" style="color: var(--darkblue-color);">Excursions</h1>
  <!-- Expeditions -->
  <div class="row w-100" style="background-color: var(--excursions-bg); height:fit-content">
    <!-- Map -->
    <div id="locMap" class="col-5" style="overflow: hidden; min-height:40px;" >
      <img class="w-100 h-100 object-fit-cover" src="<?php echo $base_url . 'pages/destino/images/maps/map-havana.jpg'; ?>" alt="">
    </div>
    <div class="col-md-5 col" style="height: fit-content;">
      <!-- Excursiones -->
      <h2 class="fs-4 fw-medium my-5" style="color: var(--darkblue-color);">Select an excursion to see more details..</h2>
<?php if ($stmt = $connect->prepare('SELECT * FROM servicios where destino_id = ?')) {
      $stmt->bind_param('s',$destid);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->num_rows > 0) { ?>

      <div class="accordion accordion-flush" id="servCardsAccordion">
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <?php $servId = 'serv' . $row['id']; ?>
        
        <div class="accordion-item my-2 px-3 rounded-top rounded-bottom">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed fs-5 fw-medium p-0" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $servId; ?>" aria-expanded="false" aria-controls="<?php echo $servId; ?>"  style="color: var(--darkblue-color);"> 
              <div class="me-3" style="width: 40px; height:40px;">
              <?php if($row['tipo']=='immersion') { ?>
                <img class="w-100 h-100 object-fit-contain" src="../images/icons/icons8-diving-goggles-48.png" alt="Includes Diving Activities">
              <?php } ?>
            </div>
              <?php echo $row['nombre']; ?> 
            </button>
          </h2>
          <div id="<?php echo $servId; ?>" class="accordion-collapse collapse" data-bs-parent="#servCardsAccordion">
            <div class="accordion-body">
              <?php echo set_simple_p('',$row['descripcion'],"servDesc","card-text");?>
              <?php 
                // $horario = $row['horario'] ;
                // $days_hrs = explode(',',$horario);
                // $days = $days_hrs[0];
                // $hrs = $days_hrs[1];

                if ($row['horario']) { ?>
                  <div style="width: 35px; height: 35px;">
                    <img class="w-100 h-100 object-fit-contain" src="../images/icons/icons8-calendar-48.png" alt="">
                  </div>
            <?php echo set_psmall('', $row['horario']);
                } ?>
                <?php if ($row['duracion']) { ?>
                  <div style="width: 35px; height: 35px;">
                    <img class="w-100 h-100 object-fit-contain" src="../images/icons/icons8-tiempo-64.png" alt="">
                  </div>
            <?php echo set_psmall('', $row['duracion']);
                } ?>
              <?php echo set_psmall('Inmersiones: ', $row['inmersiones']); ?>
              <?php echo set_psmall("",$row['precios']); ?>
              <?php echo set_psmall("Politica de Cancelacion: ", $row['pol_cancel']); ?>
            </div>
          </div>
        </div>
    <?php } ?>
      </div>
    </div>
  </div>
<?php }
  }
  $stmt->close();
?>

  <?php 
      if ($stmt = $connect->prepare('SELECT * FROM hoteles where destino_id = ?')) {
        $stmt->bind_param('s',$destid);
        $stmt->execute();
        
        $res = $stmt->get_result();
        if ($res->num_rows > 0) { ?>
          <!-- Hotels -->
          <div id='hoteles' class="row justify-content-center m-5">
            <h1 class="text-center display-6 fw-semibold" style="color: var(--darkblue-color);">Hotels Available</h1>
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
