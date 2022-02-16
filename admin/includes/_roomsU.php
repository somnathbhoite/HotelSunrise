<table class="table table-success table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Room Type</th>
      <th scope="col">Booking Details</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql2 = "SELECT * FROM room,booking WHERE br_id=r_id AND isPaid=0";
    $result2 = mysqli_query($conn, $sql2);
    $count = 0;

    while($row = mysqli_fetch_assoc($result2))

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
      <td>' .$r_type. '</td>
      <td>
      <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.  $count  .'" aria-expanded="false" aria-controls="flush-collapseOne">
      Booking Details
      </button>
      </h2>
      <div id="flush-collapse'.  $count  .'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul class="list-group list-group-flush">
      <li class="list-group-item">Customer Name-'.  $bu_name  .'</li>
      <li class="list-group-item">Phone No-'.  $bu_phno  .'</li>
      <li class="list-group-item">Checkin Date-'.  $check_in_date  .'</li>
      </ul>
      </div>
      </div>
      </div>
      </div>
      </td>
      </tr>';
    }
    ?>

  </tbody>
</table>