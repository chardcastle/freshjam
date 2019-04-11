<?php

namespace App\Actions;

use App\Components\Calculator;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use InvalidArgumentException;
use Throwable;

/**
 * Class AbstractAction
 * @package App\Actions
 */
abstract class AbstractAction
{
    /**
     * @var Calculator
     */
    private $calculator;

    /**
     * AbstractAction constructor.
     * @param Calculator $Calculator
     */
    public function __construct(Calculator $Calculator)
    {
        $this->calculator = $Calculator;
    }

    /**
     * @return string
     */
    abstract protected function getActionMethod(): string;

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function __invoke(Request $request, Response $response): Response
    {
        $output = [];
        try {
            if ($this->validOperands($request->getParsedBody())) {
                [$operand1, $operand2] = array_values($request->getParsedBody());
                $output['result'] = $this->calculator->{$this->getActionMethod()}($operand1, $operand2);
                $statusCode = 200;
            }
        } catch (InvalidArgumentException $e) {
            $output['error'] = $e->getMessage();
            $statusCode = 400;
        } catch (Throwable $t) {
            $output['error'] = "Internal Server Error";
            $statusCode = 500;
        }
        return $response->withStatus($statusCode)->withJson($output);
    }

    /**
     * @param array $operands
     * @return bool
     * @throws InvalidArgumentException
     */
    private function validOperands(array $operands): bool
    {
        foreach ($operands as $field => $value) {
            if (!is_numeric($value) || (filter_var($value, FILTER_VALIDATE_FLOAT) === false)) {
                throw new InvalidArgumentException($field . " is not a valid number");
            }
        }
        return true;
    }

}