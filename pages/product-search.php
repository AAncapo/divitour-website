<?php
    include('../includes/dbh.inc.php');
    $subtitle= 'My Booking';
    include('../includes/header.inc.php');
?>
<main class="container-fluid">
    <div class="container">
        <?php include('../includes/product-search-form.inc.php'); ?>
    </div>
    
    <div class="container">
    <!-- Resultados -->
    <div class="row py-5" style="min-height: 50vh;">
    <?php 
    if (isset($_GET['destId']) && $_GET['destId'] != "") {
        $dest_data = explode(',',$_GET['destId']);
        $destId = $dest_data[0];
        $destName = $dest_data[1];
        ////////////////////////////////// SERVICIOS //////////////////////////////////
        if ($stmt=$connect->prepare('SELECT * FROM servicios where destino_id = ?')) {
            $stmt->bind_param('s',$destId);
            $stmt->execute();
            $result=$stmt->get_result();

            $total_results = $result->num_rows;
            ?>
        <p class="fs-4 fw-bold text-center">Services offered in <?php echo $destName . ' ('.$total_results.')' ?></p>
        <div class="row w-100 justify-content-center gap-2">
        <?php if ($total_results > 0) {
                while ($row=mysqli_fetch_assoc($result)) { 
                    include('../includes/elements/servcard.inc.php');
                }
            } ?>
        </div>
<?php   } else {
            echo 'Couldnt create connection to database';
        }
        $stmt->close();
        //////////////////////////////////// HOTELES ////////////////////////////////////
        if ($stmt=$connect->prepare('SELECT * FROM hoteles where destino_id = ?')) {
            $stmt->bind_param('s',$destId);
            $stmt->execute();
            $result=$stmt->get_result();

            $total_results = $result->num_rows;
            ?>
            <p class="fs-4 fw-bold text-center mt-5">Hotels available in <?php echo $destName.' ('.$total_results.')' ?></p>
            <div class="row w-100 justify-content-center gap-2">
        <?php if ($total_results > 0) {
                while ($row=mysqli_fetch_assoc($result)) {
                    include('../includes/elements/hotelcard.inc.php');
                } ?>
        </div> 
    <?php   }
        }
        $stmt->close();
        //////////////////////////////////// CURSOS ////////////////////////////////////
        if ($stmt=$connect->prepare('SELECT * FROM cursos')) {
            $stmt->execute();
            $result=$stmt->get_result();

            $total_results = $result->num_rows;
            ?>
            <p class="fs-4 fw-bold text-center mt-5">Courses available  <?php echo ' ('.$total_results.')' ?></p>
            <div class="row w-100 justify-content-center gap-2">
        <?php if ($total_results > 0) {
                while ($row=mysqli_fetch_assoc($result)) { ?>
                    <!-- Courses cards -->
        <?php   }
            } ?>
            </div>
<?php   }
        $stmt->close();
    } else {
        echo '<p class="text-center fs-5 fw-bold"> Manage your reservations from here </p>'; 
    } 
        ?>
    </div>
                    <!---------------------- RESUMEN ---------------------->
    <!-- <div class="col-lg-4">
        <p class="fs-4 fw-bold text-center">Resume</p>
        <div class="d-block">
            <div class="accordion" id="resumeAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button fs-5 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Booked Services
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#resumeAccordion">
                        <div class="accordion-body">
                            <div id="bookedItemsList" class="d-flex flex-column">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center gap-2 py-2">
                <p class="fs-5 fw-medium h-100 text-center m-0">Total Cost: <?php echo $current_price.'.00 ' ?>USD</p>
                <button type="submit" class="btn btn-danger">Process Payment</button>
            </div>
        </div>
    </div> -->
    </div>
                    <!--------------------- OFFCANVAS --------------------->    
    <!-- <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p id="offcanvasDesc" ></p>
            <button id="addReservation" class="btn btn-danger" >Add Reservation</button>
        </div>
    </div> -->
</main>
<?php
    include('../includes/footer.inc.php');
?>
