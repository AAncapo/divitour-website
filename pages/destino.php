<?php
include('../includes/dbh.inc.php');

// get destination from table
if (isset($_GET['dest_id'])) {
  $destid = htmlspecialchars($_GET['dest_id']);
  
  
  if ($dest_stmt = $connect->prepare('SELECT * FROM destinos where id = ?')) {
    $dest_stmt->bind_param('s',$destid);
    $dest_stmt->execute();  
    
    $result = $dest_stmt->get_result();
    if ($result->num_rows > 0){
      $dest_rec = mysqli_fetch_assoc($result);
      $subtitle=$dest_rec['nombre'];
      $destName = $dest_rec['nombre'];
      include('../includes/header.inc.php');
      include('../includes/helper-functions.inc.php');
?>

<!-- Banner -->
<header class="container-fluid p-0 mb-5" style="height: 40vh;">
  <img class="w-100 h-100" src= "<?php echo 'destino/images/banners/banner-' . $destid . '.jpg'; ?>" style="object-fit:cover;" />
</header>
<!-- Name & Description -->
<section class="container mb-5">
  <h1 class="display-3 fw-semibold text-center" style="color: var(--darkblue-color);" > <?php echo $dest_rec['nombre']?> </h1>
  <p class='fs-5 fw-normal mb-5 collapsable-text' id="destDescription" > <?php echo $dest_rec['descripcion']?> </p>
</section>
<?php 
    $dest_stmt->close();
  } else {
    echo 'No destination found with id=' . $_GET['dest_id'];
    die();
  }
} ?>

<main class="container-fluid p-0">
  <h1 class="text-center fs-3 fw-semibold" style="color: var(--darkblue-color);">Excursions</h1>
  <!-- Expeditions -->
  <div class="row w-100 m-0" style="background-color: var(--excursions-bg); height:fit-content">
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
      <?php while ($row = mysqli_fetch_assoc($result)) { 
              include('../includes/elements/servcard-accordion.inc.php');
        } ?>
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
            <h1 class="text-center fs-3 fw-semibold" style="color: var(--darkblue-color);">Hotels Available</h1>
            <div id="htlCardContainer" class="container-fluid row justify-content-center m-0">
        <?php while ($row = mysqli_fetch_assoc($res)) {
                include('../includes/elements/hotelcard.inc.php');
              } ?>
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
