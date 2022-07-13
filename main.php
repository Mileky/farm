<?php

require_once __DIR__ . '/Entity/FarmInterface.php';
require_once __DIR__ . '/Entity/AbstractAnimal.php';
require_once __DIR__ . '/Entity/AbstractProduct.php';
require_once __DIR__ . '/Entity/Farm.php';
require_once __DIR__ . '/Entity/Cow.php';
require_once __DIR__ . '/Entity/Chicken.php';
require_once __DIR__ . '/Entity/Egg.php';
require_once __DIR__ . '/Entity/Milk.php';

$farm = new Farm();

/**
 * Добавление коров
 */
for ($i = 0; $i < 10; $i++) {
    $farm->addAnimal(
        Cow::create($farm->getIdForAnimal())
    );
}

/**
 * Добавление куриц
 */
for ($i = 0; $i < 20; $i++) {
    $farm->addAnimal(
        Chicken::create($farm->getIdForAnimal())
    );
}

/**
 * Посчет животных в хлеву
 */
$resultAnimals = $farm->getAmountAnimals();

/**
 * Вывод информации о животных на экран
 */
foreach ($resultAnimals as $key => $value) {
    echo "$key: $value\n";
}

/**
 * Сбор продукции
 */
$farm->collectionProduct();

/**
 * Получение информации о собранных продуктах
 */
$resultProducts = $farm->getAmountProducts();

/**
 * Вывод информации о продуктах на экран
 */
foreach ($resultProducts as $key => $value) {
    echo "$key: $value\n";
}

$farm->addAnimal(
    Cow::create($farm->getIdForAnimal())
);


for ($i = 0; $i < 5; $i++) {
    $farm->addAnimal(
        Chicken::create($farm->getIdForAnimal())
    );
}

$resultAnimals = $farm->getAmountAnimals();

foreach ($resultAnimals as $key => $value) {
    echo "$key: $value\n";
}

$farm->collectionProduct();

$resultProducts = $farm->getAmountProducts();

foreach ($resultProducts as $key => $value) {
    echo "$key: $value\n";
}
