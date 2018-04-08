<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/by_crime.css">

<h1>See Crimes</h1>

<?php foreach ($prisoners as $prisoner) : ?>

  <?php echo $prisoner['last_name'] . ' ' . $prisoner['first_name'] . '<br>'; ?>

<?php endforeach; ?>


<?php include '../view/footer.php'; ?>