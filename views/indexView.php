<?php
	include("template/header.php");
?>
<div class="container">
<section class="row justify-content-around">


	<article class="car <?php  ?> col-12 col-md-12 col-lg-5 m-2">
		<h3 class="py-3">model vehicle<?php  ?></h3>
		<div>
			<form action="" method="POST" class="row">
				<input type="hidden" value="1<?php ?>" name="vehicleId">
				<input type="submit" value="More Info" name="vehicleDetail" class="col-12">
				<input type="submit" value="Edit" name="vehicleEdit" class="col-6 col-md-12 col-lg-6">
				<input type="submit" value="Delete" name="vehicleDelete" class="col-6 col-md-12 col-lg-6">
			</form>
		</div>
	</article>
	<article class="car <?php  ?> col-12 col-md-12 col-lg-5 m-2">
		<h3 class="py-3">model vehicle<?php  ?></h3>
		<div>
			<form action="" method="POST" class="row">
				<input type="hidden" value="2<?php ?>" name="vehicleId">
				<input type="submit" value="More Info" name="vehicleDetail" class="col-12">
				<input type="submit" value="Edit" name="vehicleEdit" class="col-6 col-md-12 col-lg-6">
				<input type="submit" value="Delete" name="vehicleDelete" class="col-6 col-md-12 col-lg-6">
			</form>
		</div>
	</article>


</section>
</div>

<?php
	include("template/footer.php");
?>
