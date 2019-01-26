<?php
/**
 * Created by PhpStorm.
 * User: dilya
 * Date: 20/01/2019
 * Time: 10:57
 */

require_once "Utils.php";
require_once "Indicator.php";

class Product
{
    public $name;
    private $indicators = array();

    public function __construct($name, $indicators){
        $this->name = $name;
        $this->indicators = $indicators;
    }

    public function getScore(){
        $divisible= 0;
        $devisor = 0;

        Utils::pre($this->indicators);
        foreach ($this->indicators as $indicator){
            $divisible += $indicator->weight * $indicator->value;
            $devisor += $indicator->weight;
        }

        return $divisible/$devisor;
    }
}