<?php

namespace App\Actions;

/**
 * Class DivideAction
 * @package App\Actions
 * @extends AbstractAction
 */
class DivideAction extends AbstractAction
{
    /**
     * Method name to be called on Calculator component
     * @var string
     */
    private $method = 'divide';

    /**
     * @return string
     */
    protected function getActionMethod(): string
    {
        return $this->method;
    }

}