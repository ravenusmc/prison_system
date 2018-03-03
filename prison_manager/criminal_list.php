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
      <th>Last Name</th>
      <th>First Name</th>
      <th>Phone Number</th>
    </tr>

    <?php foreach ($crimal as $c) : ?>
    <tr> 
      <td><?php echo $c['last_name']; ?></td>
      <td><?php echo $c['first_name']; ?></td>
      <td><?php echo $c['phone']; ?></td>
      <td>
        <form action="index.php" method="post">
          <input type="hidden" name="action" value="delete_student">
          <input type="hidden" name="criminal_id" value="<?php echo $c['criminal_id']; ?>">
          <input class='initial_btn font' type="submit" value="Delete">
        </form>
      </td>
    </tr>
    <?php endforeach; ?>

  </table>
  <!-- End table -->

</main>

<?php include '../view/footer.php'; ?>

    <?php foreach ($students as $student) : ?>
    <tr>
      <td><?php echo $student['student_name']; ?></td>
      <td><?php echo $student['student_grade']; ?></td>
      <td><?php echo $student['letter_grade']; ?></td>
      <td>
        <form action="index.php" method="post">
          <input type="hidden" name="action" value="delete_student">
          <input type="hidden" name="studentID" value="<?php echo $student['studentID']; ?>">
          <input class='initial_btn font' type="submit" value="Delete">
        </form>
      </td>
    </tr>
    <?php endforeach; ?>