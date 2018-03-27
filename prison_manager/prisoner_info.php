<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
<link rel="stylesheet" type="text/css" href="../assets/css/prisoner_info.css">

<main>

  <header>
    <h1>Prisoner <?php echo $prisoner_info[2] . ' ' . $prisoner_info[1];  ?> </h1>
    <?php echo  $prisoner_info[0]; ?>
  </header>

  <section id='prisoner_info'>
    <div>
      <h4>Street: <?php echo $prisoner_address[2];  ?></h4>
      <h4>Town: <?php echo $prisoner_address[3];  ?></h4>
      <h4>State: <?php echo $prisoner_address[4];  ?></h4>
      <h4>Zip: <?php echo $prisoner_address[5];  ?></h4>
      <h4>Phone Number: <?php echo $prisoner_info[3];  ?></h4>
      <form action="index.php" method="post">
        <input type="hidden" name="action" value="add_address_form">
        <input type="hidden" name="criminal_id" value="<?php echo $prisoner_info[0]; ?>">
        <input class='input_style' type="submit" value="Add Address">
      </form>
    </div>

    <div>
      <h3>Police Officer Information </h3>
      <h4>First Name: <?php   ?></h4>
      <h4>Last Name: <?php  ?></h4>
      <h4>Badge Number: <?php   ?></h4>
      <form action="index.php" method="post">
        <input type="hidden" name="action" value="add_officer_form">
        <input type="hidden" name="criminal_id" value="<?php echo $prisoner_info[0]; ?>">
        <input class='input_style' type="submit" value="Add Officer">
      </form>
    </div>

    <div>

      <h4>Crime Committed: <?php   ?></h4>

      <form action="index.php" method="post">
        <input type="hidden" name="action" value="add_crime_form">
        <input type="hidden" name="criminal_id" value="<?php echo $prisoner_info[0]; ?>">
        <input class='input_style' type="submit" value="Add Crime">
      </form>

    </div>



  </section>

  <button><a href="?action=list_criminals">Criminal List</a></button>

</main>

<?php include '../view/footer.php'; ?>