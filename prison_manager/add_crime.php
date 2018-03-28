<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/add_prisoner.css">

<main>

  <h2>Please Fill Out Form to Add a Crime</h2>

  <form action="index.php" method="post">
    <?php echo $criminal_id; ?>
    <input type="hidden" name="action" value="add_crime" />

    <!-- The below inputs will deal with getting information for the crime -->
    <input placeholder='Crime' type='text' name='crime'>&nbsp;
    <input type="hidden" name="criminal_id" value="<?php echo $prisoner_info[0]; ?>">


    <label>&nbsp;</label>
    <input type="submit" value="Add Crime" />

  </form>

</main>

<?php include '../view/footer.php'; ?>