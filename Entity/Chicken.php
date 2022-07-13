<?php

/**
 * Курица
 */
class Chicken extends AbstractAnimal
{
    /**
     * Фабрика для создания экземпляра
     *
     * @param $id - id
     *
     * @return Chicken
     * @throws Exception
     */
    public static function create($id): Chicken
    {
        return new Chicken(
            $id,
            new Egg(
                'шт',
                random_int(0, 1)
            )
        );
    }
}