<?php
$base_url = '/divitur/';
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
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
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

  <body
    class=" w-100"
    style="font-family: 'Montserrat', sans-serif; margin-top: 59px"
  >
    <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href=<?php echo $base_url . 'index.php' ?>>
          <img
            src=<?php echo $base_url . 'images/divitour-full.png' ?>
            alt="Divitour Logo"
            style="width: 200px"
        /></a>
        <button
          class="navbar-toggler d-lg-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavId"
          aria-controls="collapsibleNavId"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse"
          id="collapsibleNavId"
        >
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="#home" aria-current="page"
                >Home<span class="visually-hidden">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#events">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#destinations">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacts">Contacts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>