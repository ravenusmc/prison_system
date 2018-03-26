<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/add_prisoner.css">

<main>

  <h2>Please Fill Out Form to Add Prisoner</h2>

  <form action="index.php" method="post">
    <?php echo $criminal_id; ?>
    <input type="hidden" name="action" value="add_crime" />

    <!-- The below inputs will deal with getting information for the prisoner -->
    <input placeholder='' type='text' name='first_name'>&nbsp;
    <input placeholder='Last Name' type='text' name='last_name'>&nbsp;
    <input placeholder='Phone Number' type='text' name='phone'>&nbsp;&nbsp;&nbsp;


    <label>&nbsp;</label>
    <input type="submit" value="Add Crime" />

  </form>

</main>

<?php include '../view/footer.php'; ?>