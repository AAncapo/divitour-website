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
                    <div class="row h-100 justify-content-center">
                        <div class="col h-100 shadow rounded p-5">
                            <div class="w-100 h-20" style="overflow: hidden;">
                                <img class="w-100 h-100 object-fit-contain" src="<?php echo $row['image_url'] ?>" alt="<?php echo $row['nombre'] ?>">
                            </div>
                            <p class="fw-bold fs-4 "><?php echo $row['nombre'] ?></p>
                            <p class="fw-normal"><?php echo $row['descripcion'] ?></p>
                        </div>

                        <form class="col rounded" action="" method="get" style="background-color: #ffffffcc; pointer-events:all">
                            <div class="d-block d-md-flex gap-4 bg-light m-0 rounded align-items-center">
                                
                                <!-- <div class="col">
                                    <label for="dateInput" class="form-label" name="date">DATE</label>
                                    <input id="dateInput" type="date" class="form-control">
                                </div> -->
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <?php 
                                                $pax_range = explode(",", $row['pax_range']);
                                                $pax_min = $pax_range[0];
                                                $pax_max = $pax_range[1];
                                            ?>
                                            <label for="adultsInput" class="form-label">ADULTS</label>
                                            <input id="adultsInput" type="number" class="form-control" name="adults" min="<?php echo $pax_min ?>" value="<?php echo $pax_min ?>">
                                        </div>
                                        <div class="col">
                                            <label for="childInput" class="form-label">KIDS</label>
                                            <input id="childInput" type="number" class="form-control" name="kids" min="0" value="0">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <span class="d-flex"><p>Cost: </p><p id="baseCost"><?php echo ' '. $row['base_cost'] ?></p>EUR</span>
                                <span class="d-flex"><p>* After <p id="baseLimit"><?php echo $row['base_pax_limit'] ?></p>passengers, Cost: <p id="overCost"><?php echo $row['over_cost'] ?></p> </p></span>
                                <p> * Children pay only 50%</p>
                                <span><p>TOTAL COST</p><p id="currentCost">0.00 EUR</p></span>
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