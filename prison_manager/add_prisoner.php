<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/add_prisoner.css">

<main>

  <h2>Please Fill Out Form to Add Prisoner</h2>

  <form action="index.php" method="post">

    <input type="hidden" name="action" value="add_prisoner" />

    <!-- The below inputs will deal with getting information for the prisoner -->
    <input placeholder='First Name' type='text' name='first_name'>&nbsp;
    <input placeholder='Last Name' type='text' name='last_name'>&nbsp;
    <input placeholder='Phone Number' type='text' name='phone'>&nbsp;&nbsp;&nbsp;

    <!-- The below inputs will deal with getting information for the prisoner's address -->
<!--     <input placeholder='Street' type='text' name='street'>&nbsp;
    <input placeholder='City' type='text' name='last_name'>&nbsp;
    <input placeholder='State' type='text' name='phone'>&nbsp;&nbsp;&nbsp;
    <input placeholder='Zip' type='text' name='phone'>&nbsp;&nbsp;&nbsp; -->

    <label>&nbsp;</label>
    <input type="submit" value="Add Prisoner" />

  </form>


</main>


<?php include '../view/footer.php'; ?>