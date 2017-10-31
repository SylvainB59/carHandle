<?php
	include("template/header.php");
// foreach($vehicle as $key => $value)
// {
	// echo '<pre>';
	// var_dump($vehicle);
	// echo '</pre>';
	// echo $vehicle;
// }


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
	</div>
</section>

<?php
	include("template/footer.php");
?>
