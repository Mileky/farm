<?php

/**
 * Продукт
 */
abstract class AbstractProduct
{
    /**
     * Ед. измерения продукта (литры/штуки)
     *
     * @var string
     */
    private string $unit;

    /**
     * Количество продукта
     *
     * @var int
     */
    private int $amount;

    /**
     * @param string $unit
     * @param int    $amount
     */
    public function __construct(string $unit, int $amount)
    {
        $this->unit = $unit;
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}