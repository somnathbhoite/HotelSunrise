<table class="table table-success table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Payment Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Boooking Details</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql5 = "SELECT * FROM payment, booking, room WHERE isPaid=1 AND pb_id=b_id AND br_id=r_id";
    $result5 = mysqli_query($conn, $sql5);
    $count = 0;

    while($row = mysqli_fetch_assoc($result5))

    {
        //payments
      $count = $count+1;
      $p_id = $row['p_id'];
      $pu_id = $row['pu_id'];
      $pb_id = $row['pb_id'];
      $p_amt = $row['p_amt'];
      $p_mode = $row['p_mode'];
      $check_out_date = $row['check_out_date'];
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
        //room
      $r_id = $row['r_id'];
      $r_type = $row['r_type'];
      $isAvailable = $row['isAvailable'];
      $r_price = $row['r_price'];

      echo '<tr>
      <th scope="row">' .$count. '</th>
      <td>' .$bu_name. '</td>
       <td>' .$bu_phno. '</td>
      <td>' .$p_amt. '&#8377</td>
      <td>' .$p_mode. '</td>
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
       <li class="list-group-item">Room Type-'.  $r_type .'</li>
      <li class="list-group-item">Checkin Date-'.  $check_in_date  .'</li>
      <li class="list-group-item">Checkout Date-'.  $check_out_date  .'</li>
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