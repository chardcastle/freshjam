<?php

namespace App\Actions;

/**
 * Class AddAction
 * @package App\Actions
 * @extends AbstractAction
 */
class AddAction extends AbstractAction
{
    /**
     * Method name to be called on Calculator component
     * @var string
     */
    private $method = 'add';

    /**
     * @return string
     */
    protected function getActionMethod(): string
    {
        return $this->method;
    }

}