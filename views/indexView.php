<?php
	include("template/header.php");
?>
<div class="container">
<section class="row justify-content-around">

<?php
foreach($vehicles as $vehicle)
{
?>
	<article class="vehicle <?php echo $vehicle->getType(); ?> col-12 col-md-12 col-lg-5 m-2">
		<p>Type : <?php echo $vehicle->getType(); ?></p>
		<h3 class="mx-auto"><?php echo $vehicle->getModel(); ?></h3>
		<div>
			<form action="" method="POST" class="row">
				<input type="hidden" value="<?php echo $vehicle->getId(); ?>" name="vehicleId">
				<input type="submit" value="More Info" name="vehicleDetail" class="col-12">
				<input type="submit" value="Edit" name="vehicleEdit" class="col-6 col-md-12 col-lg-6">
				<input type="submit" value="Delete" name="vehicleDelete" class="col-6 col-md-12 col-lg-6">
			</form>
		</div>
	</article>
<?php
}
?>
</section>
</div>

<?php
	include("template/footer.php");
?>
