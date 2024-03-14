<div id="servCard" class="card p-0" style="min-height:320px; overflow: hidden;" >
    <div class="row g-0 h-100">
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
                <p id="servDesc" class="card-text collapsable-text"><?php echo substr($row['descripcion'], 0, strpos($row['descripcion'],'.')) ?></p>
                <div class="d-flex justify-content-between align-items-center mb-3">
                <!-- Cost -->
                <?php
                $base_cost = $row['base_cost'];
                // $over_cost = $row['over_cost'];
                if ($base_cost && $base_cost > 0) { ?>
                <div class="col d-block d-md-flex flex-md-column gap-1 align-items-center">
                    <div  class="m-auto m-md-0" style="width: 45px; height:45px;">
                    <img class="w-100 h-100 object-fit-contain" src="../images/icons/money-dollar-svgrepo-com.svg">
                    </div>
                    <div class="d-flex d-md-block">
                    <div class="d-block align-items-center gap-1">
                        <p class=" text-center fw-bold m-0" style="font-size: 10px; color:gray">FROM</p>
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
                <div class="col d-block d-md-flex flex-md-column gap-1 align-items-center">
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
                <div class="col d-block d-md-flex flex-md-column gap-1 align-items-center">
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
                <a href="<?php echo 'manage-booking.php?destname='.$destName.'&tbl=servicios&id='. $row['id'] ?>" class="btn btn-outline-danger">View Offers</a>
            </div>
        </div>
    </div>
</div>