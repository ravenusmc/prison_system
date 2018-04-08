<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/by_crime.css">

<h1>See Crimes</h1>

<?php echo $criminals['last_name']; ?>
<?php echo $criminals['first_name']; ?>

<?php foreach ($criminals as $criminal) : ?>

  <?php echo $criminals['last_name'] . '<br>'; ?>
  <?php echo $criminals['first_name'] . '<br>'; ?>

<?php endforeach; ?>


<?php include '../view/footer.php'; ?>