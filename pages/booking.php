<?php
    include('../includes/dbh.inc.php');
    include('../includes/header.inc.php');
?>
<main>
    <div class="container-fluid">
        <form class="container" action="<?php echo $base_url . 'pages/booking.php'?>" method="get" style="background-color: #ffffffcc;">
            <div class="d-block d-md-flex gap-4 bg-light m-0 rounded align-items-center p-3">
            <div class="col">
                <label for="destInput" class="form-label">DESTINATION</label>
                <select
                    class="form-select form-select-lg"
                    name="destId"
                    id="destInput"
                >
                    <option selected>Select one</option>
                    <option value="varadero">Varadero</option>
                    <option value="havana">Havana</option>
                    <option value="jibacoa">Jibacoa</option>
                    <option value="cayolargo">Cayo Largo del Sur</option>
                    <option value="guillermo">Cayo Guillermo</option>
                    <option value="trinidad">Trinidad</option>
                    <option value="zapata">Peninsula de Zapata</option>
                    <option value="stlucia">Santa Lucia</option>
                </select>
            </div>
            <div class="col">
                <label for="actInput" class="form-label">ACTIVITY</label>
                <input class="form-control" name="activity" list="actOptions" id="actInput" placeholder="Choose an Activity..">
                <datalist id="actOptions">
                    <option value="Excursions">
                    <option value="Immersions">
                    <option value="Courses">
                </datalist>
            </div>
            <div class="col">
                <label for="dateInput" class="form-label" name="date">DATE</label>
                <input id="dateInput" type="date" class="form-control">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <label for="adultsInput" class="form-label">ADULTS</label>
                        <input id="adultsInput" type="number" class="form-control" name="adults" min="1" value="1">
                    </div>
                    <div class="col">
                        <label for="kidsInput" class="form-label">KIDS</label>
                        <input id="kidsInput" type="number" class="form-control" name="kids" min="0" value="0">
                    </div>
                </div>
            </div>
            <div class="col m-2">
                <button type="submit" class="btn btn-danger w-100 fs-5 fw-semibold p-3">SEARCH</button>
            </div>
        </div>
        </form>
    </div>
    
    <!-- Resultados -->
    <section class="container-fluid py-5" style="min-height: 50vh;">
    <?php 
    if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['destId'])) {
        $destId = $_GET['destId'];
        if ($stmt=$connect->prepare('SELECT * FROM services where destino_id = ?')) {
            var_dump($_GET);
            $stmt->bind_param('s',$destId);
            $stmt->execute();
            $result=$stmt->get_result();

            $totalResults = $result->num_rows;
            ?>
        <p class="fs-4 fw-bold text-center">Results (<?php echo $totalResults ?>)</p>
        <div class="row">
            <?php 
            if ($totalResults > 0) {
                while ($row=mysqli_fetch_assoc($result)) { ?>
            <div class="card col-lg-2">
                <img class="card-img-top" src="holder.js/100x180/" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
            <?php } ?>
        </div>
    <?php }
        } else {
            echo 'Couldnt create connection to database';
        }
    }   
     ?>
       
            
            
    </section>
</main>
<?php

    include('../includes/footer.inc.php');
?>