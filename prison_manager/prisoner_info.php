<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
<link rel="stylesheet" type="text/css" href="../assets/css/prisoner_info.css">

  <header class='prisoner_info_header'>
    <div>
      <h1>Prisoner: <?php echo $all_information['first_name'] . ' ' . $all_information['last_name'];  ?></h1>
      <div class='pris_info_button_div'>
      </div>
    </div>
  </header>

<main>

  <section id='prisoner_info'>
    <div>
      <h2>Personal Information:</h2>
      <h4>Street: <?php echo $all_information['street'];  ?></h4>
      <h4>Town: <?php echo $all_information['town'];  ?></h4>
      <h4>State: <?php echo $all_information['state'];  ?></h4>
      <h4>Zip: <?php echo $all_information['zip'];  ?></h4>
      <h4>Phone Number: <?php echo $all_information['phone'];  ?></h4>
      <br>
      <h2>Arresting Officer Information:</h2>
      <h4>First Name: <?php echo $all_information['first'];  ?></h4>
      <h4>Last Name: <?php echo $all_information['last'];  ?></h4>
      <h4>Badge Number: <?php echo $all_information['badge_number'];   ?></h4>
      <br>
      <h2>Crime Information:</h2>
      <h4>Crime Committed: <?php echo $all_information['crime_committed']; ?></h4>
    </div>
  </section>

</main>

<?php include '../view/footer.php'; ?>