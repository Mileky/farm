<?php

/**
 * Класс, описывающий животное
 */
abstract class AbstractAnimal
{
    /**
     * Уникальный идентификатор животного
     *
     * @var int
     */
    private int $id;

    /**
     * Производимый продукт
     *
     * @var AbstractProduct
     */
    private AbstractProduct $product;

    /**
     * @param int             $id      - Уникальный идентификатор животного
     * @param AbstractProduct $product - Производимый продукт
     */
    public function __construct(int $id, AbstractProduct $product)
    {
        $this->id = $id;
        $this->product = $product;
    }

    /**
     * Получение уникального иденитфикатора
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Получение производимого животным продукта
     *
     * @return AbstractProduct
     */
    public function getProduct(): AbstractProduct
    {
        return $this->product;
    }
}