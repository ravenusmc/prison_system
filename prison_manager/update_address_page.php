<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/update.css">

<main class='update_prisoner_main'>

  <div>
    <h1>Update page</h1>

    <form action="index.php" method="post">

      <input type="hidden" name="action" value="update_address_submit" />

      <label>Street: </label><input name='street' placeholder='<?php echo $address['street'] ?>'><br>
      <label>Town: </label><input name='town' placeholder='<?php echo $address['town'] ?>'><br>
      <label>State: </label><input name='state' placeholder='<?php echo $address['state'] ?>'><br>
      <label>Zip: </label><input name='zip' placeholder='<?php echo $address['zip'] ?>'><br>
      <input type='hidden' name='criminal_id' value='<?php echo $address['criminal_id'] ?>'>

      <div class='button_fix'>
        <input class='crime_form_button' type='submit' value="Submit Changes" />
      <div>

    </form>
  </div>

</main>

<?php include '../view/footer.php'; ?>