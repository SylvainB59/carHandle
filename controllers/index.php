<?php


if(isset($_POST['validNewVehicle']))
{
	$newVehicle = arrayToObj($_POST);
	
	if(!empty($newVehicle))
	{
		$VehicleManager->addVehicle($newVehicle);
		header('refresh: 0');
	}
}


include "views/indexView.php";



?>
