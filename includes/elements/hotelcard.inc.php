<div id="htlCard" class="card shadow m-2" style="min-width: 300px; min-height: 400px; height:fit-content; border-width: 0px;">
    <div id="htlImage">
        <img class="card-img-top" src= <?php echo $row['image_url']; ?> />
    </div>
    <div class="card-body" style="height: fit-content;">
        <h4 id="htlName" class="card-title fw-semibold" style="color: var(--darkblue-color);"> <?php echo $row['nombre']; ?> </h4>
        <?php if ($row['stars'] > 0) { ?>
        <div class="d-flex justify-content-start align-items-center fs-5 fw-semibold my-4" style="width:20px; height: 20px; color:var(--darkblue-color)">
        <?php echo $row['stars']; ?>
        <img class="w-100 h-100 object-fit-contain" src="<?php echo $base_url . 'images/icons/icons8-star-48.png'; ?>">
        </div>
    <?php 
        }
        ?>
        <span class="collapsable-text text-collapsed">
            <p id="htlDesc" class="card-text"> <?php echo $row['descripcion']; ?> </p>
            <a class="toggle-more">Read more</a>
        </span>
        <a href="<?php echo $base_url.'pages/manage-booking.php?destname='.$destName.'&tbl=servicios&id='. $row['id'] ?>" class="btn btn-outline-danger">View Offers</a>
    </div>
</div>