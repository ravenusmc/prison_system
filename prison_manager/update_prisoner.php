<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/update.css">

<h1>Update page</h1>

<form action="index.php" method="post">

  <label>First Name: </label><input placeholder='<?php echo $sole_prisoner['first_name'] ?>'><br>
  <label>Last Name: </label><input placeholder='<?php echo $sole_prisoner['last_name'] ?>'><br>
  <label>Phone Number: </label><input placeholder='<?php echo $sole_prisoner['phone'] ?>'>

</form>


<?php include '../view/footer.php'; ?>