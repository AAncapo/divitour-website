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
<section class="container mb-5">
  <h1 class="display-1 fw-semibold text-center" style="color: var(--darkblue-color);" > <?php echo $dest_rec['nombre']?> </h1>
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
      <img class="w-100 h-100 object-fit-cover" src="<?php echo $base_url . 'pages/destino/images/maps/map-'.$destid.'.jpg'; ?>" alt="">
    </div>
    <div class="col-md-5 col" style="height: fit-content;">
      <!-- Excursiones -->
      <h2 class="fs-4 fw-medium my-5 ps-3" style="color: var(--darkblue-color);">Select an excursion to see more details..</h2>
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
            <button class="accordion-button collapsed fs-5 fw-semibold p-0 py-3 ps-3" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $servId; ?>" aria-expanded="false" aria-controls="<?php echo $servId; ?>"  style="color: var(--darkblue-color);"> 
              <?php echo $row['nombre']; ?> 
            </button>
          </h2>
          <div id="<?php echo $servId; ?>" class="accordion-collapse collapse" data-bs-parent="#servCardsAccordion">
            <div class="accordion-body">
              <p class="card-text d-<?php echo get_display($row['descripcion']); ?>"> <?php echo $row['descripcion'] ?> </p>
              <!-- <div class="row align-items-center">
                
                <?php $value = $row['capacidad']; ?>
                <div class="col d-<?php echo get_display($value,'flex'); ?> gap-3 align-items-center">
                  <div style="width: 40px; height: 40px;">
                    <img class="w-100 h-100 object-fit-contain" src="../images/icons/icons8-man-50.png">
                  </div>
                  <p class="card-text fw-medium text-center"><?php echo $value ?></p>
                </div>
                
                <?php $value = $row['horario']; ?>
                <div class="col d-<?php echo get_display($value,'flex'); ?> gap-3 align-items-center">
                  <div style="width: 40px; height: 40px;">
                    <img class="w-100 h-100 object-fit-contain" src="../images/icons/icons8-calendar-48.png">
                  </div>
                  <p class="card-text fw-medium"><?php echo $value ?></p>
                </div>
                
                <?php $value = $row['duracion']; ?>
                <div class="col d-<?php echo get_display($value,'flex'); ?> gap-3 align-items-center">
                  <div style="width: 40px; height: 40px;">
                    <img class="w-100 h-100 object-fit-contain" src="../images/icons/icons8-tiempo-64.png">
                  </div>
                  <p class="card-text fw-medium text-center"><?php echo $value ?></p>
                </div>
            </div> -->
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
