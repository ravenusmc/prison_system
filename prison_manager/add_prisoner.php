<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/add_prisoner.css">

<main>

  <h2>Please Fill Out Form to Add Prisoner</h2>

  <form action="index.php" method="post">

    <input placeholder='First Name' type='text' name='first_name'>&nbsp;
    <input placeholder='Last Name' type='text' name='last_name'>&nbsp;
    <input placeholder='Phone Number' type='text' name='phone'>&nbsp;&nbsp;&nbsp;

    <label>&nbsp;</label>
    <input type="submit" value="Add_Prisoner" />

  </form>


</main>


<?php include '../view/footer.php'; ?>