<?php

	include("template/header.php");

?>

<section class="container">
	<div class="row">
		<table class="col-12 col-lg-8 mx-auto row" id="table">
			<thead class="col-12 row">
				<tr class="col-12 row">
					<th class="col-12"><?php echo $vehicle->getModel(); ?></th>
				</tr>
			</thead>
			<tbody class="col-12 row">
<?php
	$vehicle->afficherTableau();
/*
foreach($vehicle as $key => $value)
{
?>
				<tr class="col-12 row">
					<td class="col-6"><?php echo $key; ?></td>
					<td class="col-6"><?php echo $value; ?></td>
				</tr>
<?php
}
*/
?>
			</tbody>
		</table>
		<form action="" method="POST" class="col-12 col-lg-5 mx-auto mt-4 row">
			<input type="hidden" value="<?php echo $vehicle->getId(); ?>" name="vehicleId">
			<input type="submit" value="Edit" name="vehicleEdit" class="col-6 col-md-6 col-lg-6">
			<input type="submit" value="Delete" name="vehicleDelete" class="col-6 col-md-6 col-lg-6">
			<input type="submit" value="Back" name="index" class="col-12">
		</form>
	</div>
</section>

<?php

	include("template/footer.php");

?>
