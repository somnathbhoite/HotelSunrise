<table class="table table-success table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
       <th scope="col">Room Type</th>
      <th scope="col">Phone No</th>
      <th scope="col">Checkin Date</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql3 = "SELECT * FROM booking,room WHERE br_id=r_id AND isPaid=0";
    $result3 = mysqli_query($conn, $sql3);
    $count = 0;

    while($row = mysqli_fetch_assoc($result3))

    {
         //room
      $count = $count+1;
      $r_id = $row['r_id'];
      $r_type = $row['r_type'];
      $isAvailable = $row['isAvailable'];
      $r_price = $row['r_price'];
        //booking
      $b_id = $row['b_id'];
      $bu_id = $row['bu_id'];
      $br_id = $row['br_id'];
      $bu_name = $row['bu_name'];
      $bu_address = $row['bu_address'];
      $bu_phno = $row['bu_phno'];
      $bu_age = $row['bu_age'];
      $bu_gender = $row['bu_gender'];
      $check_in_date = $row['check_in_date'];
      $isPaid = $row['isPaid'];

      echo '<tr>
      <th scope="row">' .$count. '</th>
      <td>' .$bu_name. '</td>
       <td>' .$r_type. '</td>
      <td>' .$bu_phno. '</td>
      <td>' .$check_in_date. '</td>
      </tr>';

    } 
    ?>
  </tbody>
</table>