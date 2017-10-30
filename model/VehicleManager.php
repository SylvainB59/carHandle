<?php

class VehicleManager
{
	public function getBdd()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=carHandle;charset=utf8', 'root', 'Neosyl59');
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

	public function getAllVehicles()
	{
		$vehicles = $this->getBdd()->query('SELECT * FROM vehicle')->fetchAll(PDO::FETCH_ASSOC);
		return $vehicles;
	}
}

?>
