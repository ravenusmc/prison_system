<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/add_prisoner.css">

<main>

  <h2>Please Fill Out Form to Add Address of Prisoner</h2>

  <form action="index.php" method="post">

    <input type="hidden" name="action" value="add_address" />

    <!-- The below inputs will deal with getting information for the prisoner -->
    <input placeholder='Street' type='text' name='street'>&nbsp;
    <input placeholder='Town' type='text' name='town'>&nbsp;
    <input placeholder='State' type='text' name='state'>&nbsp;&nbsp;&nbsp;
    <input placeholder='Zip' type='text' name='zip'>&nbsp;&nbsp;&nbsp;
    <label>Please Select Prisoner Address Belongs to:</label>
    <select name="prisoner">
      <?php foreach ($criminals as $criminal) : ?>
      <option value='<?php echo $criminal['criminal_id'] ?>'> 
        <?php echo $criminal['first_name']; ?> <?php echo $criminal['last_name']; ?></option>
      <?php endforeach; ?>
    </select><br>
    <input type="submit" value="Submit Address" />

  </form>

</main>

<?php include '../view/footer.php'; ?>