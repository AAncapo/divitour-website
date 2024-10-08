<?php
    include('../includes/dbh.inc.php');
    $subtitle= 'Manage Booking';
    include('../includes/header.inc.php');

    if (!isset($_GET['tbl']) || !isset($_GET['id'])) {
        header('Location: '.$base_url.'index.php');
    } else {
        $tbl = htmlspecialchars($_GET['tbl']);
        $productId = $_GET['id'];
        
        if ($stmt=$connect->prepare('SELECT * FROM ' . $tbl . ' where id = ?')) {
            $stmt->bind_param('s',$productId);
            $stmt->execute();
            
            $result=$stmt->get_result();
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <main class="container py-5" style="min-height: 80vh;">
                <h1 class="text-center">Manage Your Booking</h1>
                    <div class="row h-100 justify-content-center gap-3">
                        <div class="col h-100 shadow rounded p-5">
                            <!-- <div class="w-100 h-20" style="overflow: hidden;">
                                <img class="w-100 h-100 object-fit-contain" src="<?php echo $row['image_url'] ?>" alt="<?php echo $row['nombre'] ?>">
                            </div> -->
                            <p class="fw-bold fs-4 "><?php echo $row['nombre'] ?></p>
                            <?php if (isset($_GET['destname'])) { ?>
                                <p class="fw-bold fs-5" style="color:var(--softred)"><img src="../images/icons/icons8-gps-30.png"><?php echo $_GET['destname'] ?></p>
                            <?php } ?>
                            <p class="fw-normal"><?php echo $row['descripcion'] ?></p>
                            <div class="row align-items-center justify-content-start gap-2">

                <!-- Cost -->
                <?php
                  $base_cost = $row['base_cost'];
                  $over_cost = $row['over_cost'];
                  if ($base_cost && $base_cost > 0) { ?>
                  <div class="col d-block d-md-flex gap-1 align-items-center">
                    <div  class="m-auto m-md-0" style="width: 45px; height:45px;">
                      <img class="w-100 h-100 object-fit-contain" src="../images/icons/money-dollar-svgrepo-com.svg">
                    </div>
                    <div class="d-flex d-md-block">
                      <div class="d-flex align-items-center gap-1">
                        <p class="fw-bold m-0" style="font-size: 10px; color:gray">FROM</p>
                        <p class="card-text fw-semibold text-center m-0"> <?php echo $base_cost.'.00 EUR' ?></p>
                      </div>
                  <!-- <?php if ($over_cost && $over_cost > 0) { ?>
                      <div class="d-flex align-items-center gap-1">
                        <p class="fw-bold m-0" style="font-size: 10px; color:gray">TO</p>
                        <p class="fw-semibold text-center m-0"> <?php echo $over_cost.'.00 EUR' ?></p>
                      </div>
                    <?php } ?> -->
                    </div>
                  </div>
                <?php } ?>

                <!-- Max. Capacity -->
                <?php 
                  $max_pax = explode(",",$row['pax_range'])[1];
                  if ($max_pax > 0) { ?>
                  <div class="col d-block d-md-flex gap-1 align-items-center">
                    <div class="m-auto m-md-0" style="width: 35px; height: 35px;">
                      <img class="w-100 h-100 object-fit-contain" src="../images/icons/person-explaining-something-svgrepo-com.svg">
                    </div>
                    <div class="d-block">
                      <p class="text-center fw-bold m-0" style="font-size: 10px; color:gray">MAX. CAPACITY</p>
                      <p class="card-text fw-semibold text-center"><?php echo $max_pax ?></p>
                    </div>
                  </div>
                <?php } ?>

                <!-- Duration -->
                <?php 
                  $duration = $row['duracion']; 
                  if ($duration && $duration > 0) { ?>
                  <div class="col d-block d-md-flex gap-1 align-items-center">
                    <div class="m-auto m-md-0" style="width: 35px; height: 35px;">
                      <img class="w-100 h-100 object-fit-contain" src="../images/icons/time-svgrepo-com.svg">
                    </div>
                    <div class="d-block">
                      <p class="text-center fw-bold m-0" style="font-size: 10px; color:gray">DURATION</p>
                      <p class="card-text fw-semibold text-center"><?php echo $duration ?></p>
                    </div>
                  </div>
                <?php } ?>

            </div>
                        </div>

                        <form class="col rounded" action="" method="post">
                            <div class="d-block d-md-flex gap-4 m-0 py-3 rounded align-items-center">  
                                <!-- <div class="col">
                                    <label for="dateInput" class="form-label" name="date">DATE</label>
                                    <input id="dateInput" type="date" class="form-control">
                                </div> -->
                                <div class="col">
                                    <div class="row">
                                        <div class="col-2">
                                            <?php 
                                                $pax_range = explode(",", $row['pax_range']);
                                                $pax_min = $pax_range[0];
                                                $pax_max = $pax_range[1];
                                            ?>
                                            <label for="adultsInput" class="form-label">ADULTS</label>
                                            <input id="adultsInput" type="number" class="form-control" name="adults" min="<?php echo $pax_min ?>" value="<?php echo $pax_min ?>">
                                        </div>
                                        <div class="col-2">
                                            <label for="childInput" class="form-label">KIDS</label>
                                            <input id="childInput" type="number" class="form-control" name="kids" min="0" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <span class="d-flex gap-1"><p>Cost: </p><p id="baseCost"><?php echo ' '. $row['base_cost'] ?></p>EUR,<p id="overCost"><?php echo $row['over_cost'] ?></p><p>EUR</p> after</p><p id="baseLimit"><?php echo $row['base_pax_limit'] ?></p>passengers.</p></span>
                                <p> * Children pay only 50%</p>
                                <p id="currentCost">0.00 EUR</p>
                                <button type="submit" class="btn btn-danger w-100 fs-5 fw-semibold p-3">Process Payment</button>
                        </form>  
                    </div>
                </main>
                <?php }
        } else {
            header('Location: '.$base_url.'index.php');
        }
    } ?>

<style>
    label {
        margin-bottom: 4px;
        color: gray;
        font-size: .7rem;
        font-weight: bold;
        letter-spacing: .5px;
        transition: all .1s;
        &:active {
            color: var(--darkblue-color);
        }
    }
    input {
        color: red;
        font-size: .7rem;
        font-weight: bold;
    }
</style>
<script src="../js/manage-booking.js"></script>
<?php
    include('../includes/footer.inc.php');
?>