<?php
// Classe, instance, encapsulation, méthode, propriété, portée, constructeur, $this, exception, abstraction, classe abstraite, interface, polymorphisme

require_once 'classes/Product.php';
require_once 'classes/User.php';

$product = new Product("Beurre");
$otherProduct = new Product("Télé");
// $product->name = "Beurre";
// $product->setName("Beurre");
// $product->price = 2.23;
$product->setPrice(2.23);
$otherProduct->setPrice(65.1);


var_dump($product);

echo "Prix du produit : " . $product->getFullPrice(1.2) . "<br />";
echo "Prix de l'autre produit : " . $otherProduct->getFullPrice(1.2) . "<br />";

$user = new User();

$user->setLastname("Williams");
$user->setFirstname("George");

echo $user->getFullName();

echo $user->getIntroduction();
