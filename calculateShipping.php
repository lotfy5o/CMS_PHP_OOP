<?php



class Product {
    private $price;
    private $weight;
    private $freeShipping = false;

    function __construct($price, $weight) {
        $this->weight = $weight;
        $this->price = $price;
    }
    function getWeight(){
        return $this->weight;
    }

    function setFreeShipping() {
        $this->freeShipping = true;
    }

    function getFreeShipping() {
        return $this->freeShipping;
    }


}

class Shipping {
    private $totalShipping;
    private $products;
    private $pricePerKilo;
    

    public function __construct($pricePerKilo){
        $this->pricePerKilo = $pricePerKilo;
    }

    public function addProducts(Product $product){
        // this will add the $product to the array products
        $this->products[] = $product;
    }
    
    // this function takes the object product and gets its weight and then multiply it with its dataMember pricePerKilo
    public function calculateTotalShipping(){
        // return $weight * $pricePerKilo;
        foreach ($this->products as $product){

            if (!$product->getFreeShipping()){

                $this->totalShipping += $product->getWeight() * $this->pricePerKilo;
            }
            
        }
    }

    public function getTotalShippingPrice(){
        return $this->totalShipping;
    }

} 

$pricePerKilo = 5; 

$product = new Product(5, 1);
$product2 = new Product(6, 2);
$product3 = new Product(4, 4);

$product3->setFreeShipping();

$shipping = new Shipping($pricePerKilo);

$shipping->addProducts($product); // passed the first product to the addProduct function
$shipping->addProducts($product2); // passed the second product to the addProduct function
$shipping->calculateTotalShipping(); // 



// $totalShippingPrice = $shipping->calculateTotalShipping($product->getWeight(), $pricePerKilo);
$totalShippingPrice = $shipping->getTotalShippingPrice();



var_dump($product);
echo "<br>";
var_dump($product->getWeight());
echo "<br>";
var_dump($totalShippingPrice); // 5










/*  
// Model

// include function.php
function calculateShipping($productWeight, $pricePerKilo, $freeShipping, $shippingProvider){
    if (!$freeShipping){
        
        return $productWeight * $pricePerKilo;
    }
}

// Controller

// $products = $_SESSION['products'];
$products[1]['weight'] = 1;
$products[1]['price'] = 6;
$products[1]['freeShipping'] = true;

$products[2]['weight'] = 2;
$products[2]['price'] = 3;
$products[2]['freeShipping'] = false;

/* 
this how the array looks like
       1 => array(
        'weight' => 1,
        'price' => 6,
        'freeShipping' => true,
        // ... other existing keys for product with ID '1'
    ),
    2 => array(
        'weight' => 2,
        'price' => 3,
        'freeShipping' => false,
        // ... other existing keys for product with ID '2'
    )
 */ 
/*  
$pricePerKilo = 5;

$totalShippingPrice = 0;

foreach($products as $product){
    $totalShippingPrice = calculateShipping($product['weight'], $pricePerKilo, $product['freeShipping'], $shippingProvider);
}

echo $totalShippingPrice;

// this next code will be duplicated in the recipt, pdf and email

// Recipt Controller
$totalShippingPrice = calculateShipping($product['weight'], $pricePerKilo, $product['freeShipping'], $shippingProvider);

// $products = $_SESSION['products'];
$products[1]['weight'] = 1;
$products[1]['price'] = 6;
$products[1]['freeShipping'] = true;

$products[2]['weight'] = 2;
$products[2]['price'] = 3;
$products[2]['freeShipping'] = false;

// PDF
$totalShippingPrice = calculateShipping($product['weight'], $pricePerKilo, $product['freeShipping'], $shippingProvider);

// email
$totalShippingPrice = calculateShipping($product['weight'], $pricePerKilo, $product['freeShipping'], $shippingProvider);
*/
