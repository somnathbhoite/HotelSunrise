<table class="table table-success table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Checkin Date</th>
      <th scope="col">Checkout Date</th>
      <th scope="col">Payment Details</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql4 = "SELECT * FROM booking, payment WHERE isPaid=1 AND pb_id=b_id";
    $result4 = mysqli_query($conn, $sql4);
    $count = 0;

    while($row = mysqli_fetch_assoc($result4))

    {
        //booking
      $count = $count+1;
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
      //payments
      $p_id = $row['p_id'];
      $pu_id = $row['pu_id'];
      $pb_id = $row['pb_id'];
      $p_amt = $row['p_amt'];
      $p_mode = $row['p_mode'];
      $check_out_date = $row['check_out_date'];

      echo '<tr>
      <th scope="row">' .$count. '</th>
      <td>' . $bu_name. '</td>
      <td>' .$bu_phno. '</td>
      <td>' .$check_in_date. '</td>
      <td>' .$check_out_date. '</td>
      <td>
      <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.  $count  .'" aria-expanded="false" aria-controls="flush-collapseOne">
      Payment Details
      </button>
      </h2>
      <div id="flush-collapse'.  $count  .'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <ul class="list-group list-group-flush">
      <li class="list-group-item">Payment Amount-'.  $p_amt  .'&#8377</li>
      <li class="list-group-item">Payment Mode-'.  $p_mode  .'</li>
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