<?php declare(strict_types=1);

namespace Src\Classes;

use Exception;
use LogicException;
use \Src\Classes\CalculadoraBase;

class Calculadora extends CalculadoraBase
{
    public function soma(): void {
      $this->result = $this->num1 + $this->num2;
    }

    public function subtract(): void {
      $this->result = $this->num1 - $this->num2;
    }

    public function multiply(): void {
      $this->result = $this->num1 * $this->num2;
    }

    public function divide(): void {
      if($this->num2 == 0)
        throw new LogicException("Division by Zero");

      $this->result = $this->num1 / $this->num2;
    }
    
    public function mostrarResult(): float {
      return $this->result;
    }
}