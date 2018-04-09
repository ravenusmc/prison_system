<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/by_crime.css">


<main id='by_crime_form_main'>

  <section>
    <h1 class='center'>Please Select Crime:</h1>

    <form class='by_crime_form' action="index.php" method="post">

      <input type="hidden" name="action" value="see_prisoner_by_crime" />

      <select name="crimes">
        <?php foreach ($crimes as $crime) : ?>
          <option value='<?php echo $crime['crime_committed']; ?>'> 
            <?php echo $crime['crime_committed']; ?>
          </option>
        <?php endforeach; ?>
      </select><br>

    <input class='crime_form_button' type="submit" value="See Criminals" />
    </form>

  </section>


</main>



<?php include '../view/footer.php'; ?>