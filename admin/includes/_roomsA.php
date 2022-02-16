<table class="table table-success table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Room Type</th>
      <th scope="col">Charges</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql1 = "SELECT * FROM room WHERE isAvailable=1";
    $result1 = mysqli_query($conn, $sql1);
    $count = 0;

    while($row = mysqli_fetch_assoc($result1))

    {
        //room
      $count = $count+1;
      $r_id = $row['r_id'];
      $r_type = $row['r_type'];
      $isAvailable = $row['isAvailable'];
      $r_price = $row['r_price'];

      echo '<tr>
      <th scope="row">' .$count. '</th>
      <td>' .$r_type. '</td>
      <td>' .$r_price. '</td>
      </tr>';

    }
    ?>

  </tbody>
</table>