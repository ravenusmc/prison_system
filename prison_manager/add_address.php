<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/add_prisoner.css">

<main>

  <h2>Please Fill Out Form to Add Address of Prisoner</h2>

  <form action="index.php" method="post">

    <input type="hidden" name="action" value="add_crime" />

    <!-- The below inputs will deal with getting information for the prisoner -->
    <input placeholder='Street' type='text' name='Street'>&nbsp;
    <input placeholder='Town' type='text' name='town'>&nbsp;
    <input placeholder='State' type='text' name='state'>&nbsp;&nbsp;&nbsp;
    <input placeholder='Zip' type='text' name='zip'>&nbsp;&nbsp;&nbsp;


    <label>&nbsp;</label>
    <input type="submit" value="Add Address" />

  </form>

</main>

<?php include '../view/footer.php'; ?>