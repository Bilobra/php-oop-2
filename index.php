<?php
include_once __DIR__ . '/app/products/PetFood.php';
include_once __DIR__ . '/app/products/PetAccessories.php';
include_once __DIR__ . '/app/products/PetToy.php';

$FoodData = [
    'name' => "Crocchtte al pesce",
    'poster' => 'https://tcdn.storeden.com/gallery/5f0ef8e6be7ea0bc6baecb17',
    'description' => 'Crocchette alpesce per cani di taglia media',
    'brand' => 'Forza 10',
    'categories' => 'alimento secco per cani',
    'weight' => 1.5 . ' kg',
    'deadline' => '20/10/2023',
    'price' => 13.99 ,
];

$CollarData = [
    'name' => "Collare",
    'poster' => 'https://www.addestramentocaniblog.it/wp-content/uploads/2017/01/collare-hunter.jpg',
    'description' => 'Collare in pelle colorata per cani da caccia',
    'brand' => 'Hunter',
    'categories' => 'accessori per cani',
    'size' => 'M',
    'material' => 'leather',
    'price' => 25.50 ,

];

$BibData = [
    'name' => "Pettorina H",
    'poster' => 'https://www.aquazoomaniashop.it/35087/haqihana-pettorina-addestramento.jpg',
    'description' => 'Pettorina H multicolor',
    'brand' => 'Haqihana',
    'categories' => 'accessori per cani',
    'size' => 'M',
    'material' => 'cotton',
    'price' => 39.99 ,

];

$KongData = [
    'name' => "Kong",
    'poster' => 'http://egress.storeden.net/jpg/6024339a5fb8e09ecd8b863d/file.jpg',
    'description' => 'Gioco educativo per cani',
    'brand' => 'Kong',
    'categories' => 'giochi per cani',
    'price' => 17.99 ,

];

// food
$crocchette = new Food($FoodData);
// var_dump($crocchette);

// accessories
$collare = new Accessories($CollarData);
// var_dump($collare);
$pettorina = new Accessories($BibData);
// var_dump($pettorina);

// toys
$kong = new Toy($KongData);
// var_dump($kong);

$TotalProducts =[
    $crocchette,
    $collare,
    $pettorina,
    $kong,
];

var_dump($TotalProducts);

echo 'Prodotti nel carrello: ' . count($TotalProducts) . '<br>';
$tot = 0;
foreach($TotalProducts as $value){
    $tot += $value->price;
}

echo '<br>' . 'Prezzo finale : ' . $tot . 'euro';