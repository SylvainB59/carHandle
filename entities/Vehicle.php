<?php

abstract class Vehicle
{
	protected $id;
	protected $model;
	protected $color;
	protected $mileage;
	protected $year;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * @param mixed $mileage
     *
     * @return self
     */
    public function setMileage($mileage)
    {
        $this->mileage = $mileage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     *
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    public function __construct($data)
    {
    	$this->hydrate($data);
    }

    public function hydrate($data)
    {
    	foreach($data as $key => $value)
    	{
    		$method = 'set'.ucfirst($key);
    		// echo $method;
    		if(method_exists($this, $method))
    		{
				$this->$method($value);
    		}
    	}
    }

    public function afficherTableau()
    {
    	foreach($this as $key => $value)
    	{
    		echo
    		'<tr class="col-12 row tableLigne">
				<td class="col-6">'.$key.'</td>
				<td class="col-6">'.$value.'</td>
			</tr>';
	  	}
    }
}

?>
