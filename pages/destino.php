<?php
include('../includes/dbh.inc.php');
include('../includes/header.inc.php');

// get destination from table
if (isset($_GET['dest_id'])) {
  $destid = $_GET['dest_id'];
  if ($dest_stmt = $connect->prepare('SELECT * FROM destinations where id = ?')) {
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
  <h1> <?php echo $dest_rec['name']?> </h1>
  <p class='mb-5'> <?php echo $dest_rec['description']?> </p>
  <?php 
      $dest_stmt->close();
    } else {
      echo 'No destination found with id=' . $_GET['dest_id'];
      die();
    }
  }
  ?>
      <?php 
      if ($stmt = $connect->prepare('SELECT * FROM hotels where destination_id = ?')) {
        $stmt->bind_param('s',$destid);
        $stmt->execute();
        
        $res = $stmt->get_result();
        if ($res->num_rows>0) { ?>
          <!-- Hotels -->
          <div id='hoteles' class="mb-5">
            <h1 class="text-center section-title">Hotels</h1>
            <div class="container-fluid row">
          <?php while ($record = mysqli_fetch_assoc($res)) { ?>
            <!-- Insert Hotel Cards -->
            <div id="hotelCard" class="card m-2" style="max-width: 300px; padding:0px; overflow:hidden">
          <img class="card-img-top hotelImage" src= <?php echo $record['image_url']; ?> style="height:100%;" />
          <div class="card-body">
            <h4 id="hotelName" class="card-title text-center"> <?php echo $record['name']; ?> </h4>
            <p id="hotelDesc" class="card-text"> <?php echo $record['description']; ?> </p>
          </div>
        </div>
          <?php 
            }
          }
          ?>
    </div>
  </div>
  <!-- Services -->
  <div class="container-fluid w-100">
    <h1 class="text-center section-title">Services</h1>
    <div class="container-fluid w-100">

    </div>
    <?php 
        $stmt->close();
      }
    ?>
  </div>
</main>

<?php
      include('../includes/footer.inc.php');
    }
?>
