<?php
/**
 * Created by PhpStorm.
 * User: Dilyan
 * Date: 20/01/2019
 * Time: 10:12
 */

require_once  "Indicator.php";
require_once  "Product.php";
require_once   "Utils.php";

class productManager
{
    //Calculated result of the indicators
    public $arithmeticalCoef = 0;

    public function getPost(){
        if(isset($_POST) && !empty($_POST)){
            return $_POST;
        }else{
            return array();
        }
    }

    public function createProducts(){
        $formData = $this->getPost();
        $products = array();
        $weights = (isset($formData['weight']))?$formData['weight']:array();
        $heighest = $this->getHighestIndicator();
        $displayResult = array();

        for($i = 1; $i < count($formData);$i++){
            $keys = array_keys($formData);
            $currentProduct = $formData[$keys[$i]];
            $indicators = array();

            for($j = 1; $j < count($currentProduct); $j++){
                $currentIndicator = new Indicator();
                $currentIndicator->value = round($currentProduct[$j]/$heighest[$j-1], 2);
                $currentIndicator->weight = $weights[$j-1];
                array_push($indicators, $currentIndicator);
            }
            $productObj = new Product($currentProduct[0], $indicators);
            array_push($products, $productObj);
        }

        foreach ($products as $product){
            echo $product->name;
            print_r($product->getScore());
            echo "<br>";
        }


    }

    private function getHighestIndicator(){
        $formData = $this->getPost();
        $heighestScore = array();

        for($i = 1; $i < count($formData);$i++){
            $keys = array_keys($formData);
            $currentProduct = $formData[$keys[$i]];

            for($j = 1; $j < count($currentProduct); $j++){
                if(count($heighestScore) >= $j){
                    if($heighestScore[$j-1] < $currentProduct[$j]){
                        $heighestScore[$j-1] = $currentProduct[$j];
                    }
                }else{
                    array_push($heighestScore, $currentProduct[$j]);
                }
            }
        }
        return $heighestScore;
    }
}

$test = new productManager();
$test->createProducts();

