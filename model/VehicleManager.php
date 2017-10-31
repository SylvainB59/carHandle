<?php

class VehicleManager
{
	public function getBdd()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=carHandle;charset=utf8', 'root', '');
		return $bdd;
	}

	public function addVehicle($vehicle)
	{
		$req = $this->getBdd()->prepare('INSERT INTO vehicle(type, model, color, mileage, year) VALUES(:type, :model, :color, :mileage, :year)');
		$req->execute(array(
			'type' => $vehicle->getType(),
			'model' => $vehicle->getModel(),
			'color' => $vehicle->getColor(),
			'mileage' => $vehicle->getMileage(),
			'year' => $vehicle->getYear()
		));
	}

	public function delVehicle($vehicleId)
	{
		$req = $this->getBdd()->prepare('DELETE FROM vehicle WHERE id = :id');
		$req->execute(array(
			'id' => $vehicleId
		));
		header('refresh:0');
	}

	public function updateVehicle()
	{

	}

	public function getAllVehicles()
	{
		$vehicles = $this->getBdd()->query('SELECT * FROM vehicle')->fetchAll(PDO::FETCH_ASSOC);
		foreach($vehicles as $key => $vehicle)
		{
			$vehicles[$key] = arrayToObj($vehicle);
		}
		return $vehicles;
	}

	public function getVehicleDetail($vehicleId)
	{
		$req = $this->getBdd()->prepare('SELECT * FROM vehicle WHERE id = :id');
		$req->execute(array(
			'id' => $vehicleId
		));
		$vehicle = $req->fetch(PDO::FETCH_ASSOC);
		$vehicle = arrayToObj($vehicle);
		return $vehicle;
	}
}

?>
