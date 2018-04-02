<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/add_prisoner.css">

<main>

  <h2>Please Add the information for the arresting officer</h2>

  <form action="index.php" method="post">

    <input type="hidden" name="action" value="add_officer" />
    <!-- The below inputs will deal with getting information for the prisoner -->
    <input placeholder='First Name' type='text' name='f_name'>&nbsp;
    <input placeholder='Last Name' type='text' name='l_name'>&nbsp;
    <input placeholder='Badge Number' type='text' name='badge'>&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Submit" />

  </form>

</main>

<?php include '../view/footer.php'; ?>