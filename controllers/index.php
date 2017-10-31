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

if(isset($_POST['vehicleDelete']))
{
	$vehicleToDelete = $VehicleManager->getVehicleDetail($_POST['vehicleId']);
	$VehicleManager->delVehicle($vehicleToDelete->getId());
}


include "views/indexView.php";



?>
