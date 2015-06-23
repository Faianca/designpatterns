<?php
/**
 * @package    designpatterns
 * @category   designpatterns
 * @author     Jorge Meireles
 * @copyright  (c) 2015
 */
class Automobile
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

/**
 * Class AutomobileFactory
 */
class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}
