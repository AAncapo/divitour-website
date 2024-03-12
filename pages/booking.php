<?php
    include('../includes/dbh.inc.php');
    $subtitle= 'My Booking';
    include('../includes/header.inc.php');

    $current_price = 0;
    $reserved_list = [];
?>
<main class="container-fluid">
    <div class="container">
        <?php include('../includes/booking_form.inc.php'); ?>
    </div>
    
    <div class="row">

    <!-- Resultados -->
    <div class="col py-5" style="min-height: 50vh;">
    <?php 
    if (isset($_GET['destId'])) {
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
            <?php 
            if ($total_results > 0) {
                while ($row=mysqli_fetch_assoc($result)) { ?>

                    <div id="servCard" class="card p-0" style="max-width: 540px; overflow: hidden;" >
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img
                                    class="w-100 h-100 object-fit-cover"
                                    src="<?php echo $row['image_url']; ?>"
                                    class="img-fluid rounded-start"
                                    alt="<?php echo $row['nombre'] ?>"
                                    
                                />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 id="servName" class="card-title"><?php echo $row['nombre'] ?></h5>
                                    <p id="servDesc" class="card-text"><?php echo substr($row['descripcion'],0,strpos($row['descripcion'],'.')) ?></p>
                                    <p id="servCost" class="text-center fw-bold fs-5">$0.00 USD</p>
                                    <span>
                                        <button id="addReservation" class="btn btn-danger">Add Reservation</button>
                                        <button class="btn btn-outline-danger">View Offers</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php }
            } ?>
        </div>
        <?php   }
            $stmt->close();
        } else {
            echo 'Couldnt create connection to database';
        }

        //////////////////////////////////// HOTELES ////////////////////////////////////
        if ($stmt=$connect->prepare('SELECT * FROM hoteles where destino_id = ?')) {
            $stmt->bind_param('s',$destId);
            $stmt->execute();
            $result=$stmt->get_result();

            $total_results = $result->num_rows;
            ?>
        <p class="fs-4 fw-bold text-center mt-5">Hotels available in <?php echo $destName.' ('.$total_results.')' ?></p>
        <div class="row w-100 justify-content-center gap-2">
        <?php 
            if ($total_results > 0) {
                while ($row=mysqli_fetch_assoc($result)) { ?>
                    <div id="htlCard" class="card shadow m-2" style="min-width: 400px; min-height: 450px; border-width: 0px;">
                        <div id="htlImage">
                            <img class="card-img-top" src= <?php echo $row['image_url']; ?> />
                        </div>
                        <div class="card-body">
                            <h4 id="htlName" class="card-title fw-semibold" style="color: var(--darkblue-color);"> <?php echo $row['nombre']; ?> </h4>
                        <?php if ($row['stars'] > 0) { ?>
                        <div class="d-flex justify-content-start align-items-center fs-5 fw-semibold my-4" style="width:20px; height: 20px; color:var(--darkblue-color)">
                            <?php echo $row['stars']; ?>
                            <img class="w-100 h-100 object-fit-contain" src="<?php echo $base_url . 'images/icons/icons8-star-48.png'; ?>">
                        </div>
                        <?php 
                            }
                            ?>
                            <p id="htlDesc" class="card-text"> <?php echo $row['descripcion']; ?> </p>
                        </div>
                    </div>
        <?php } ?>
        </div> 
    <?php 
            }
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
        <?php 
            if ($total_results > 0) {
                while ($row=mysqli_fetch_assoc($result)) { ?>

        <?php } ?>
        </div>
    <?php
            }
    } else {
        echo '<p class="text-center fs-5 fw-bold">Manage your reservations from here</p>';
    } ?>
    </div>


                    <!---------------------- RESUMEN ---------------------->
    <div class="col-lg-4">
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

                                <!-- <div class="row w-100 align-items-center">
                                    <p class="col fs-5 fw-semibold text-center m-0">$0.00 - Paseando Por </p>
                                    <button id="removeBI" class="col-1 btn btn-danger fw-bold">-</button>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center gap-2 py-2">
                <p class="fs-5 fw-medium h-100 text-center m-0">Total Price: <?php echo $current_price.'.00 ' ?>USD</p>
                <button type="submit" class="btn btn-danger">Process Payment</button>
            </div>
        </div>
    </div>
    </div>
</main>
<script src="../js/booking.js"></script>
<?php
    include('../includes/footer.inc.php');
?>
