<?php
  $base_url = "/divitur/";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="author" content="AAncapo" />
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <link rel="icon" href= <?php echo $base_url . "favicon.png" ?> />
    <meta
      name="description"
      content="The best professional agency specializing in scuba and water activities
      in Cuba"
    />
    <title>
      DIVITOUR | The best professional agency specializing in scuba and water
      activities in Cuba
    </title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="<?php echo $base_url . 'assets/bootstrap-5.3.3-dist/css/bootstrap.min.css'; ?>"
      rel="stylesheet"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href= <?php echo $base_url . "css/main.css" ?> />
    <!-- font Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" role="navigation">
      <div class="container">
        <a class="navbar-brand" href="<?php echo $base_url . 'index.php'; ?>" style="width:240px; height: 60px;">
          <img class="w-100 h-100 object-fit-contain" src="<?php echo $base_url . 'images/divitour-full.png'; ?>" alt="Divitour logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fs-5 fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                DESTINATIONS
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item fw-medium" href=<?php echo $base_url . 'pages/destino.php?dest_id=havana'; ?>>Havana</a></li>
                <li><a class="dropdown-item fw-medium" href=<?php echo $base_url . 'pages/destino.php?dest_id=varadero'; ?>>Varadero</a></li>
                <li><a class="dropdown-item fw-medium" href=<?php echo $base_url . 'pages/destino.php?dest_id=jibacoa'; ?>>Jibacoa</a></li>
                <li><a class="dropdown-item fw-medium" href=<?php echo $base_url . 'pages/destino.php?dest_id=cayolargo'; ?>>Cayo Largo del Sur</a></li>
                <li><a class="dropdown-item fw-medium" href=<?php echo $base_url . 'pages/destino.php?dest_id=stlucia'; ?>>Santa Lucia</a></li>
                <li><a class="dropdown-item fw-medium" href=<?php echo $base_url . 'pages/destino.php?dest_id=trinidad'; ?>>Trinidad</a></li>
                <li><a class="dropdown-item fw-medium" href=<?php echo $base_url . 'pages/destino.php?dest_id=guillermo'; ?>>Cayo Guillermo</a></li>
                <li><a class="dropdown-item fw-medium" href=<?php echo $base_url . 'pages/destino.php?dest_id=zapata'; ?>>Peninsula de Zapata</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5 fw-semibold" href="#events">EVENTS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="staticBackdropLabel">Booking Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <form action="<?php echo $base_url . 'includes/booking.inc.php'; ?>" method="post">
          <select name="destino" class="form-select form-select-sm" aria-label="Small select example">
            <option selected>Select Your Destination</option>
            <option value="havana">Havana</option>
            <option value="varadero">Varadero</option>
            <option value="jibacoa">Jibacoa</option>
            <option value="cayolargo">Cayo Largo del Sur</option>
            <option value="guillermo">Cayo Guillermo</option>
            <option value="stlucia">Santa Lucia</option>
            <option value="trinidad">Trinidad</option>
            <option value="zapata">Peninsula de Zapata</option>
          </select>
          <input name="datestart" type="date">
          <label for="#psgrInput">Adults</label>
          <input name="psgrs" id="psgrInput" type="number" min="1">
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
      </div>
    </div> -->
