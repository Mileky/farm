<?php

/**
 * Корова
 */
class Cow extends AbstractAnimal
{
    /**
     * Фабрика для создания экземпляра
     *
     * @param int $id - id
     *
     * @return Cow
     * @throws Exception
     */
    public static function create(int $id): Cow
    {
        return new Cow(
            $id,
            new Milk(
                'литры',
                random_int(8, 12)
            )
        );
    }
}