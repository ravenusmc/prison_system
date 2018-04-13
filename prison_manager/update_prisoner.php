<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/update.css">

<main class='update_prisoner_main'>

  <div>
    <h1>Update page</h1>

    <form action="index.php" method="post">

      <input type="hidden" name="action" value="update_prisoner_submit" />

      <label>First Name: </label><input name='first_name' placeholder='<?php echo $sole_prisoner['first_name'] ?>'><br>
      <label>Last Name: </label><input name='last_name' placeholder='<?php echo $sole_prisoner['last_name'] ?>'><br>
      <label>Phone Number: </label><input name='phone' placeholder='<?php echo $sole_prisoner['phone'] ?>'><br>
      <input type='hidden' name='criminal_id' value='<?php echo $sole_prisoner['criminal_id'] ?>'>

      <div class='button_fix'>
        <input class='crime_form_button' type='submit' value="Submit Changes" />
      <div>

    </form>
  </div>

</main>


<?php include '../view/footer.php'; ?>