<?php

namespace App\Actions;

/**
 * Class MultiplyAction
 * @package App\Actions
 * @extends AbstractAction
 */
class MultiplyAction extends AbstractAction
{
    /**
     * Method name to be called on Calculator component
     * @var string
     */
    private $method = 'multiply';

    /**
     * @return string
     */
    protected function getActionMethod(): string
    {
        return $this->method;
    }

}