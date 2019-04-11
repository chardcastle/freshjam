<?php

namespace App\Components;
/**
 * Class Calculator
 * @package App\Components
 */
class Calculator
{

    /**
     * Sum two operands
     *
     * @param float $operand1
     * @param float $operand2
     * @return float
     */
    public function add(float $operand1, float $operand2): float
    {
        return $operand1 + $operand2;
    }

    /**
     * Subtract operand2 from operand1
     *
     * @param float $operand1
     * @param float $operand2
     * @return float
     */
    public function subtract(float $operand1, float $operand2): float
    {
        return $operand1 - $operand2;
    }

    /**
     * Divide operand1 by operand2
     *
     * @param float $operand1
     * @param float $operand2
     * @return float
     */
    public function divide(float $operand1, float $operand2): float
    {
        return $operand1 / $operand2;
    }

    /**
     * Multiply operand1 by operand2
     *
     * @param float $operand1
     * @param float $operand2
     * @return float
     */
    public function multiply(float $operand1, float $operand2): float
    {
        return $operand1 * $operand2;
    }
}
