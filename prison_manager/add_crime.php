<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/add_prisoner.css">

<main>

  <h2>Please Fill Out Form to Add a Crime</h2>

  <form action="index.php" method="post">
    <?php echo $criminal_id; ?>
    <input type="hidden" name="action" value="add_crime" />

    <!-- The below inputs will deal with getting information for the crime -->
    <input placeholder='Crime' type='text' name='crime'>&nbsp;

    <label>Select Arresting Officer:</label>
    <select name="officers">
      <?php foreach ($officers as $officer) : ?>
      <option value='<?php echo $officer['officer_id'] ?>'> 
        <?php echo $officer['first']; ?> <?php echo $officer['last']; ?></option>
      <?php endforeach; ?>
    </select><br>

    <label>Select Prisoner:</label>
    <select name="prisoners">

      <?php foreach ($criminals as $criminal) : ?>
      <option value='<?php echo $criminal['criminal_id'] ?>'>
        <?php echo $criminal['first_name']; ?> <?php echo $criminal['last_name']; ?></option>
      <?php endforeach; ?>

    </select>


    <label>&nbsp;</label>
    <input type="submit" value="Add Crime" />

  </form>

</main>

<?php include '../view/footer.php'; ?>