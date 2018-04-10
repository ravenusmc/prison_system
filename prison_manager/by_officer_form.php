<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/by_officer.css">

<main id='by_officer_form_main'>

  <h3>Please Select An Officer to See Which Criminals They Arrested</h3>

  <form class='by_officer_form' action="index.php" method="post">

    <input type="hidden" name="action" value="see_officers" />

      <select name="officers">
        <?php foreach ($officers as $officer) : ?>
          <option value='<?php echo $officer['officer_id']; ?>'> 
            <?php echo $officer['first'] . ' ' . $officer['last']; ?><br>
          </option>
        <?php endforeach; ?>
      </select>

      <p></p>

    <input class='crime_form_button' type="submit" value="See Officers" />
  </form>

</main>

<?php include '../view/footer.php'; ?>