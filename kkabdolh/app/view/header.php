<!DOCTYPE html>
<html>

<head>
  <title>Avatar Family</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="<?= BASE_URL ?>/public/js/jquery-3.3.1.min.js"></script>
  <script src="<?= BASE_URL ?>/public/js/script.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/public/css/styles.css" />
</head>

<body>
  <h1 id="pageHeader">Avatar Family</h1>
  <!-- Header -->
  <header class="box">

    <!-- Bread Crumbs 
    <p class="centerV">
      <a href="<?= BASE_URL ?>">Home</a> >
      <a href="#">Search</a> >
      <a href="<?= BASE_URL ?>/character/sokka">Sokka</a> >
      <a href="<?= BASE_URL ?>/character/sokka/relationships">Sokka Relationships</a> >
      Sokka Add Relationship
    </p>  -->
    <p class="centerV">
      <a href="<?= BASE_URL ?>">Home</a> 
    <?php 
      $path = $_SERVER["REQUEST_URI"];
      $crumbs = explode("/", $path);
      for($i = 4; $i < count($crumbs); $i++) {
    ?>
      > <a href="<?= BASE_URL ?>"><?= ucfirst(str_replace(array(".php","_"), array(""," "), $crumbs[$i])); ?></a> 
    <?php } ?>
    </p>

    <!-- Navbar -->
    <!-- list items reverse order to order correctly -->
    <?php if(isset($_SESSION['email'])) { ?>
      <ul class="centerV">
        <li>
          <a href="<?= BASE_URL ?>/logout">Log Out</a>
        </li>
        <li>
          <a href="#">Account (<?= $_SESSION['email'] ?>)</a>
        </li>
        <li>
          <a href="#">Key</a>
        </li>
        <li>
          <a href="<?= BASE_URL ?>/characters">Character List</a>
        </li>
        <li>
          <a href="<?= BASE_URL ?>">Home</a>
        </li>
      </ul>
    <?php } else { ?>
      <ul class="centerV">
        <li>
          <a href="#">Sign Up</a>
        </li>
        <li>
          <a href="<?= BASE_URL ?>/characters">Character List</a>
        </li>
      </ul>
    <?php } ?>
  </header>