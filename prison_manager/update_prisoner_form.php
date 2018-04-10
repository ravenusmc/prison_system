<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/update.css">


<main id='update_form'>

  <h1>Please Select Prisoner to Update Information</h1>

  <form action="index.php" method="post">

    <input type="hidden" name="action" value="Update_prisoner" />

      <select name="prisoners">
        <?php foreach ($prisoners as $prisoner) : ?>
          <option value='<?php echo $prisoner['criminal_id']; ?>'> 
            <?php echo $prisoner['first_name'] . ' ' . $prisoner['last_name']; ?><br>
          </option>
        <?php endforeach; ?>
      </select>

      <p></p>

    <input class='crime_form_button' type="submit" value="Update Prisoner" />
  </form>

</main>

<?php include '../view/footer.php'; ?>