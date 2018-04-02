<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/criminal_list.css">

<header>
  <div>
    <h1>The Criminals</h1>
  </div>
</header>

<main>

  <!-- This table will display all of the prisoners in the database -->
  <table>

    <tr>
      <th>View Prisoner</th>
      <th>Last Name</th>
      <th>First Name</th>
      <th>Phone Number</th>
      <th>Delete Prisoner</th>
    </tr>

    <?php foreach ($criminals as $criminal) : ?>
    <tr> 
      
      <td>
        <form action="index.php" method="post">
          <input type="hidden" name="action" value="see_prisoner">
          <input type="hidden" name="criminal_id" value="<?php echo $criminal['criminal_id']; ?>">
          <input class='input_style' type="submit" value="See Prisoner">
        </form>
      </td>
      <td><?php echo $criminal['last_name']; ?></td>
      <td><?php echo $criminal['first_name']; ?></td>
      <td><?php echo $criminal['phone']; ?></td>
      <td>
        <form action="index.php" method="post">
          <input type="hidden" name="action" value="delete_criminal">
          <input type="hidden" name="criminal_id" value="<?php echo $criminal['criminal_id']; ?>">
          <input class='initial_btn font' type="submit" value="Delete">
        </form>
      </td>
    </tr>
    <?php endforeach; ?>

  </table>
  <!-- End table -->


  <a href="?action=add_prisoner_form">Add Prisoner</a>
  <a href="?action=add_officer_form">Add Police Officer</a>
  <a href="?action=add_crime_form">Add Crime</a>

</main>

<?php include '../view/footer.php'; ?>


