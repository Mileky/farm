<?php

/**
 * Хлев
 */
class Farm implements FarmInterface
{
    /**
     * Свойство для выдачи уникального идентификатора
     *
     * @var int
     */
    private int $idNumber = 1;

    /**
     * Животные, которые находятся в хлеву
     *
     * @var array|AbstractAnimal
     */
    private array $animals;

    /**
     * Продукты, полученные с животных
     *
     * @var array|AbstractProduct
     */
    private array $products;

    /**
     * Добавляет новое животное в хлев
     *
     * @param AbstractAnimal $animal
     *
     * @return void
     */
    public function addAnimal(AbstractAnimal $animal): void
    {
        $this->animals[] = $animal;
    }

    /**
     * Сбор продукта
     *
     * @return void
     */
    public function collectionProduct(): void
    {
        /** @var AbstractAnimal $animal */
        foreach ($this->animals as $animal) {
            $this->products[] = $animal->getProduct();
        }
    }

    /**
     * Выдает новый ID для животного
     *
     * @return int
     */
    public function getIdForAnimal(): int
    {
        return $this->idNumber++;
    }

    /**
     * Получение информации о количестве каждого типа животных
     *
     * @return array
     */
    public function getAmountAnimals(): array
    {
        $result = [];
        foreach ($this->animals as $animal) {
            if (array_key_exists(get_class($animal), $result)) {
                $result[get_class($animal)]++;
            } else {
                $result[get_class($animal)] = 1;
            }

        }

        return $result;
    }

    /**
     * Получение информации о собранных продуктах
     *
     * @return array
     */
    public function getAmountProducts(): array
    {
        $result = [];
        /** @var AbstractProduct $product */
        foreach ($this->products as $product) {
            if (array_key_exists(get_class($product), $result)) {
                $result[get_class($product)] += $product->getAmount();
            } else {
                $result[get_class($product)] = $product->getAmount();
            }
        }

        return $result;
    }
}