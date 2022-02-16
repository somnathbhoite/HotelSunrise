<div class="my-5">
    <h1 class="text-center"> Rooms </h1>
</div>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="row gy-4">
                <?php 
        // Fetching available rooms
        $sql = "SELECT * FROM `room` WHERE `isAvailable`='1'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
        {
          $id = $row['r_id'];
          $type = $row['r_type'];
          $price = $row['r_price'];
          $status = $row['isAvailable'];
          echo
          '<div class="col-md-4 col-10 mx-auto">
          <div class="card">
          <img src="images/rooms/' . $type . '.jpg" class="card-img-top" alt="">
          <div class="card-body">
          <h5 class="card-title font-weight-bold">' . $type . '<span class="badge rounded-pill bg-warning text-dark">&#8377;' . $price . '/per day</span> </h5>
          <p class="card-text">These Rooms let you relax as you admire a beautiful view of the pool,also is 
          fully equipped with all comforts.</p>';
          if(isset($_SESSION['u_id'])): 
          echo
          '<a href="booking.php?roomid=' . $id . '" class="btn btn-primary">Book Now</a>';
          else:
          echo
          '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Book Now</button>';
          endif;
          echo'
          </div>
          </div>
          </div>'; 
        }
        ?>
            </div>
        </div>
    </div>
</div>
<style>
.card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
 
  cursor: pointer;
}

.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}
  </style>