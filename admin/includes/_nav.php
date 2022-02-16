  <div class="container-fluid p-0">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
        <button class="nav-link" id="nav-rooms-tabA" data-bs-toggle="tab" data-bs-target="#nav-roomsA" type="button" role="tab" aria-controls="nav-roomsA" aria-selected="false">Available Rooms</button>
        <button class="nav-link" id="nav-rooms-tabU" data-bs-toggle="tab" data-bs-target="#nav-roomsU" type="button" role="tab" aria-controls="nav-roomsU" aria-selected="false">Unavailable Rooms</button>
        <button class="nav-link" id="nav-bookings-tabA" data-bs-toggle="tab" data-bs-target="#nav-bookingsA" type="button" role="tab" aria-controls="nav-bookingsA" aria-selected="false">Active Bookings</button>
        <button class="nav-link" id="nav-bookings-tabH" data-bs-toggle="tab" data-bs-target="#nav-bookingsU" type="button" role="tab" aria-controls="nav-bookingsH" aria-selected="false">Bookings History</button>
        <button class="nav-link" id="nav-payments-tab" data-bs-toggle="tab" data-bs-target="#nav-payments" type="button" role="tab" aria-controls="nav-payments" aria-selected="false">Payments</button>
      </div>
    </nav>
    <div class="container py-5">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> <?php include "includes/_home.php"; ?></div>
        <div class="tab-pane fade" id="nav-roomsA" role="tabpanel" aria-labelledby="nav-rooms-tabA"> <?php include "includes/_roomsA.php"; ?></div>
        <div class="tab-pane fade" id="nav-roomsU" role="tabpanel" aria-labelledby="nav-rooms-tabU"> <?php include "includes/_roomsU.php"; ?></div>
        <div class="tab-pane fade" id="nav-bookingsA" role="tabpanel" aria-labelledby="nav-bookings-tabA"> <?php include "includes/_bookingsA.php"; ?></div>
        <div class="tab-pane fade" id="nav-bookingsU" role="tabpanel" aria-labelledby="nav-bookings-tabH"> <?php include "includes/_bookingsH.php"; ?></div>
        <div class="tab-pane fade" id="nav-payments" role="tabpanel" aria-labelledby="nav-payments-tab"> <?php include "includes/_payments.php"; ?></div>
      </div>
    </div>
  </div>