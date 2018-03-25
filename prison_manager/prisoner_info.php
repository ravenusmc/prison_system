<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
<link rel="stylesheet" type="text/css" href="../assets/css/address.css">

<main>

  <header>
    <h1>Prisoner <?php echo $prisoner_info[2] . ' ' . $prisoner_info[1];  ?> </h1>
  </header>

  <section>
    <h4>Street: <?php echo $prisoner_address[2];  ?></h4>
    <h4>Town: <?php echo $prisoner_address[3];  ?></h4>
    <h4>State: <?php echo $prisoner_address[4];  ?></h4>
    <h4>Zip: <?php echo $prisoner_address[5];  ?></h4>
    <h4>Phone Number: <?php echo $prisoner_info[3];  ?></h4>

  </section>

  <button><a href="?action=list_criminals">Criminal List</a></button>

</main>





<?php include '../view/footer.php'; ?>