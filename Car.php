<?php
class Car{
    private $hasParkBrake;

    //public function __construct($color)
    //{
    //  parent::__construct($color);
    //}


    public function start()
    {

        if($this->hasParkBrake){
            throw new Exception("Le freinà main est mis");
        }

        return "I'm start !";
    }

    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }
    
    
    public function setHasParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }



}
