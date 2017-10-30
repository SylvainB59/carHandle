<?php

class Bike extends Vehicle
{
	protected $type;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function __construct($data)
    {
    	parent::hydrate($data);
    }
}

?>
