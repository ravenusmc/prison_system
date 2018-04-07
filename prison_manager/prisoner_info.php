<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
<link rel="stylesheet" type="text/css" href="../assets/css/prisoner_info.css">

  <header class='prisoner_info_header'>
    <div>
      <h1>Prisoner: <?php echo $prisoner_info[2] . ' ' . $prisoner_info[1];  ?></h1>
      <div class='pris_info_button_div'>
        <button><a href="?action=list_criminals">Criminal List</a></button>
      </div>
    </div>
  </header>

<main>

  <section id='prisoner_info'>
    <div>
      <h2>Personal Information:</h2>
      <h4>Street: <?php echo $all_information['street'];  ?></h4>
      <h4>Town: <?php echo $all_information['town'];  ?></h4>
      <h4>State: <?php echo $prisoner_address[4];  ?></h4>
      <h4>Zip: <?php echo $prisoner_address[5];  ?></h4>
      <h4>Phone Number: <?php echo $prisoner_info[3];  ?></h4>
      <br>
      <h2>Arresting Officer Information:</h2>
      <h4>First Name: <?php echo $officer_info[2];  ?></h4>
      <h4>Last Name: <?php echo $officer_info[1];  ?></h4>
      <h4>Badge Number: <?php echo $officer_info[3];   ?></h4>
      <br>
      <h2>Crime Information:</h2>
      <h4>Crime Committed: <?php echo $crime_info[2]; ?></h4>
    </div>
  </section>

</main>

<?php include '../view/footer.php'; ?>