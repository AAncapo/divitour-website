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
<header>
  <div class="container-fluid p-0 mb-5" style="height: 40vh;">
    <img src= "<?php echo 'destino/images/banners/banner-' . $destid . '.jpg'; ?>" alt="" style="width:100%; height:100%; object-fit:cover" />
  </div>
</header>
<main class="container">
  <!-- Name & Description -->
  <h1 class="display-2" > <?php echo $dest_rec['nombre']?> </h1>
  <p class='mb-5'> <?php echo $dest_rec['descripcion']?> </p>
    <?php 
        $dest_stmt->close();
      } else {
        echo 'No destination found with id=' . $_GET['dest_id'];
        die();
      }
    } ?>
        <!-- Services -->
        <div class="container-fluid w-100 p-0">
          <h1 class="display-4 text-center section-title">Services</h1>
          <!-- <h2>Immersions</h2>
            <div class="container-fluid p-0">
            </div> -->
            <!-- Excursiones -->
            <?php if ($stmt = $connect->prepare('SELECT * FROM servicios where destino_id = ?')) {
              $stmt->bind_param('s',$destid);
              $stmt->execute();
              
              $result = $stmt->get_result();
              if ($result->num_rows > 0) { ?>
                <h2>Excursions</h2>
                <div class="container-fluid p-0">
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                  <!-- Service Card -->
                  <div class="card mb-3 servcard <?php echo $row['tipo']; ?>">
                    <div id="servCardWrapper" class="row g-0">
                      <div id="servImage" class="col-md-4 d-none">
                        <img src= <?php echo $row['image_url']; ?> class="img-fluid rounded-start"/>
                      </div>
                      <div class="card-body col-md-8">
                        <h5 id="servName" class="card-title"><?php echo $row['nombre']; ?></h5>
                        <!-- TODO: enviar el $row como parametro a la helper_function y manejar por alla errores como que no se encuentre la key en el array 
                        OR
                        crear todo el servcard en un destino_view.php
                        -->
                        <?php echo set_simple_p('',$row['descripcion'],"servDesc","card-text");?>
                        <!-- <?php echo set_simple_p('Incluye: ',$row['incluye'],"servInc","card-text"); ?> -->
                        <?php echo set_psmall('Disponibilidad: ', $row['horario']); ?>
                        <?php echo set_psmall('Duracion: ', $row['duracion']); ?>
                        <?php echo set_psmall('Inmersiones: ', $row['inmersiones']); ?>
                        <?php echo set_psmall("",$row['precios']); ?>
                        <?php echo set_psmall("Politica de Cancelacion: ", $row['pol_cancel']); ?>
                      </div>
                    </div>
                  </div>
              <?php } ?>
            </div>
            <?php }
              }
              $stmt->close();
            ?>
            <!-- Cursos -->
            <?php if ($stmt = $connect->prepare('SELECT * FROM cursos')) {
              // $stmt->bind_param('s',$destid);
              $stmt->execute();
              
              $result = $stmt->get_result();
              if ($result->num_rows > 0) { ?>
          <h2>Courses</h2>
            <div class="container-fluid p-0">
            </div>
        
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              
        <?php } ?>
        </div>
<?php } else {
        echo 'Couldnt find any courses :/';
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
          <div id='hoteles' class="row justify-content-center mb-5">
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
      } ?>
</main>

<?php
      include('../includes/footer.inc.php');
    }
?>
