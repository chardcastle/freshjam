<?php

namespace App\Actions;

/**
 * Class SubtractAction
 * @package App\Actions
 * @extends AbstractAction
 */
class SubtractAction extends AbstractAction
{
    /**
     * Method name to be called on Calculator component
     * @var string
     */
    private $method = 'subtract';

    /**
     * @return string
     */
    protected function getActionMethod(): string
    {
        return $this->method;
    }

}