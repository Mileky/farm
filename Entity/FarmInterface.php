<?php

interface FarmInterface
{
    /**
     * Добавление нового животного в хлев
     *
     * @param AbstractAnimal $animal
     *
     * @return void
     */
    public function addAnimal(AbstractAnimal $animal): void;

    /**
     * Сбор продукта
     *
     * @return void
     */
    public function collectionProduct(): void;

    /**
     * Выдача нового ID для животного
     *
     * @return int
     */
    public function getIdForAnimal(): int;

    /**
     * Получение информации о количестве каждого типа животных
     *
     * @return array
     */
    public function getAmountAnimals(): array;

    /**
     * Получение информации о собранных продуктах
     *
     * @return array
     */
    public function getAmountProducts(): array;
}