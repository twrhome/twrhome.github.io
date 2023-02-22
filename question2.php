<?php 

interface costDesign {
    public function getCost();
}

class shippingFee implements costDesign {

    function __construct($freight,$location,$weight) {
    	$this->freight  = $freight;
    	$this->location = $location;
        $this->weight = $weight;
    }

    public function getCost() {

        if ($this->freight == "Dog"){
        	$unitWeight = ceil($this->weight);
        	$unitCost = 60 ;
        	return 0 + $unitWeight*$unitCost ;
        }

        if ($this->freight == "Falcon"){
        	$unitWeight = ceil($this->weight);
        	$unitCost = 20 ;
        	if($this->location == "大陸"){
        		return 200 + $unitWeight*$unitCost ;
        	}
        	if ($this->weight < 5)
        		$unitCost = 0 ;
        	if ($this->weight >= 5)
				$unitCost = 30 ;
        	if($this->location == "台灣"){
        		return 150 + $unitWeight*$unitCost ;
        	}
        }

        if ($this->freight == "Cat"){
        	$unitWeight = ceil($this->weight/3);
        	$unitCost = 10 ;
        	return 100 + $unitWeight*$unitCost ;
        }
    }

}

//傳遞參數貨運商(freight)、地區(location)及(weight)
$freight = "Falcon";
$location = "台灣";
$weight = 12;

$shippingFee = (new shippingFee($freight,$location,$weight))->getCost();

var_dump("Shipping Fee Price: ". $shippingFee . "\n");

?>