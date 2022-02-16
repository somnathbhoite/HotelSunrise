<nav class="navbar sticky-top navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="#">HotelSunrise</a>
		<?php 
		echo'<div class="input-group-text ms-auto mx-1">@</div>
		<input type="text" class="form-control" id="autoSizingInputGroup" placeholder="' . $_SESSION['u_email'] . '" disabled style="width: 10rem;">'
		?>
		<button type="button" class="btn btn-secondary mx-2"><a class="text-white" href="../includes/_logout.php">Logout</a></button>
	</div>
</nav>