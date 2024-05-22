<?php

namespace Eroslanov\Lab5Composer;

use PizzaStore\Pizza;

class SkilletPizza extends Pizza
{
    public function __construct(string $name, string $chocolate, array $toppings)
    {
        parent::__construct($name, $chocolate, $toppings);
    }
    public function cut(): void
    {
        echo "Эта пицца нарезана на кусочки" . PHP_EOL;
    }
}