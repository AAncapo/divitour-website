<?php
include('../includes/dbh.inc.php');
include('../includes/header.inc.php');

// get destination from table
if (isset($_GET['dest_id'])) {
  $destid = $_GET['dest_id'];
  if ($stmt = $connect->prepare('SELECT * FROM destinations where id = ?')) {
    $stmt->bind_param('s',$destid);
    $stmt->execute();
    
    // $stmt->close();

    $result = $stmt->get_result();

    if ($result->num_rows>0){
      $record = mysqli_fetch_assoc($result);
?>

<!-- Banner -->
<header>
  <div class="container-fluid p-0 mb-5" style="height: 40vh;">
    <img id="destBanner" src="" alt="" style="width:100%; height:100%; object-fit:cover" />
  </div>
</header>
<main class="container">
  <!-- Name & Description -->
  <h1 id="destName"> <?php echo $record['name']?> </h1>
  <p id="destDesc" class='mb-5'> <?php echo $record['description']?> </p>
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

<?php
      include('../includes/footer.inc.php');

    }
    
  }
}
?>
