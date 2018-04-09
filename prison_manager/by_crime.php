<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/by_crime.css">

<main class='by_crime_main'>

  <h1>Criminals Who Committed: <?php echo $crime; ?></h1>

  <ol>
  <?php foreach ($prisoners as $prisoner) : ?>

    <li class='by_crime_li'><?php echo $prisoner['first_name'] . ' ' . $prisoner['last_name'] . '<br>'; ?></li>

  <?php endforeach; ?>
  </ol>

</main>


<?php include '../view/footer.php'; ?>