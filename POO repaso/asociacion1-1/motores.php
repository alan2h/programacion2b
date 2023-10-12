<?php

class Motor{
    private float $cilindrada;
    private int $power_horse;

    public function __construct($cilindrada, $power_horse) {
        $this->setCilindrada($cilindrada);
        $this->setPower_horse($power_horse);
    }

    /**
     * Get the value of cilindrada
     */ 
    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    /**
     * Set the value of cilindrada
     *
     * @return  self
     */ 
    public function setCilindrada($cilindrada)
    {
        $this->cilindrada = $cilindrada;

        return $this;
    }

    /**
     * Get the value of power_horse
     */ 
    public function getPower_horse()
    {
        return $this->power_horse;
    }

    /**
     * Set the value of power_horse
     *
     * @return  self
     */ 
    public function setPower_horse($power_horse)
    {
        $this->power_horse = $power_horse;

        return $this;
    }
}

?>