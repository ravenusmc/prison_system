<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/address.css">

<header>
  <h1>Address For Selected Prisoner</h1>
</header>


<main>

  <div id='prisoner_info_div'>
    <h3>Name: <?php echo $sole_prisoner['first_name']; ?> <?php echo $sole_prisoner['last_name']; ?></h3>
    <h3>Street: <?php echo $address['street']; ?></h3>
    <h3>City:<?php echo $address['town']; ?></h3>
    <h3>State: <?php echo $address['state']; ?></h3>
    <h3>Zip: <?php echo $address['zip']; ?></h3>
  </div>


</main>







<?php include '../view/footer.php'; ?>