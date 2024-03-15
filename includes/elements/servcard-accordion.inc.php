<?php $servId = 'serv' . $row['id']; ?>
        
        <div class="accordion-item my-2 px-3 rounded-top rounded-bottom">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed fs-5 fw-semibold p-0 py-3 ps-3" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $servId; ?>" aria-expanded="false" aria-controls="<?php echo $servId; ?>"  style="color: var(--darkblue-color);"> 
              <?php echo $row['nombre']; ?> 
            </button>
          </h2>
          <div id="<?php echo $servId; ?>" class="accordion-collapse collapse" data-bs-parent="#servCardsAccordion">
            <div class="accordion-body">
              <p id="servDesc" class="card-text d-<?php echo get_display($row['descripcion']); ?>"> <?php echo $row['descripcion'] ?> </p>
              <!-- <button class="toggle-readmore btn btn-primary">Read more</button> -->
              <div class="row align-items-center justify-content-start gap-2">

                <!-- Cost -->
                <?php
                  $base_cost = $row['base_cost'];
                  $over_cost = $row['over_cost'];
                  if ($base_cost && $base_cost > 0) { ?>
                  <div class="col col-md-2 d-block d-md-flex gap-1 align-items-center">
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
                  <div class="col col-md-2 d-block d-md-flex gap-1 align-items-center">
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
                  <div class="col col-md-2 d-block d-md-flex gap-1 align-items-center">
                    <div class="m-auto m-md-0" style="width: 35px; height: 35px;">
                      <img class="w-100 h-100 object-fit-contain" src="../images/icons/time-svgrepo-com.svg">
                    </div>
                    <div class="d-block">
                      <p class="text-center fw-bold m-0" style="font-size: 10px; color:gray">DURATION</p>
                      <p class="card-text fw-semibold text-center"><?php echo $duration ?></p>
                    </div>
                  </div>
                <?php } ?>
                <a href="<?php echo $base_url.'pages/manage-booking.php?destname='.$destName.'&tbl=servicios&id='. $row['id'] ?>" class="btn btn-outline-danger">View Offers</a>

            </div>
            </div>
          </div>
        </div>