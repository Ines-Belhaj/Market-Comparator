

<?php
session_start();
$title = "edit profile";
$stylesheet="css/edit-profile.css";

include "template.php";
?>

<?php function body() { ?>

		<div class="box" style="text-align:center;">

			<img width="450" height="350" src="pics/profile.png" alt="Local image"><br>
			<h1 style="text-align:center;">profile</h1>
			<h2 style="text-align:center;">MODIFY your ACCOUNT</h2>

			<?php
			$id = $_SESSION['id'];
			include "connection.php";
			$customer = $db->customer[$id]; // get by primary key
			?>

			<div class="form-group mx-sm-3 mb-2" >

			<form action="edit-customer-account-submit.php">
					<label for="firstName"><p><b> name: </b>  </p></label>
					<input type="text" name="firstName" value=<?php echo $customer['first_name'] ?> id="firstName">
					<br>

					<label for="email"><p><b>email: </b>  </p></label>
					<input type="text" name="email" id="email" value=<?php echo $customer['email']?>>
					<br>


					<label for="number"><p><b>number: </b>  </p></label>
					<input type="text" name="number" value=<?php echo $customer['number'] ?> id="number">
					<br>

					<label for="password"><p><b>password: </b>  </p></label>
					<input type="text" name="password" value=<?php echo $customer['password'] ?> id="password">
					<br>
					<div class="container">
					  <div class="row">
					    <div class="col">
								<button type="submit"class="btn btn-success"><small><b>save changes</b></small></a></button>
					    </div>
					    <div class="col">
								<button class="btn btn-warning" ><a href="start-shopping.php"><small><b>cancel</b></small></a></button>
					    </div>
					  </div>
							</div>
						</form>

		</div>
	</div>


<?php } ?>
