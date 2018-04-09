<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/by_officer.css">

<h1>Officers</h1>

  <ol>
  <?php foreach ($criminals as $criminal) : ?>

    <li class='by_crime_li'><?php echo $criminal['first_name'] . ' ' . $criminal['last_name'] . '<br>'; ?></li>

  <?php endforeach; ?>
  </ol>




<?php include '../view/footer.php'; ?>