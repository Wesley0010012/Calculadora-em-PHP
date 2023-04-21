<?php

namespace Src\Classes;

use \InvalidArgumentException;

abstract class CalculadoraBase {
  protected float $num1;
  protected float $num2;
  protected float $result;

  public function setNum1(float $num1): void {
    if(is_nan($num1))
      throw new InvalidArgumentException("Not a Number was Provided");

    $this->num1 = $num1;
  }

  public function getNum1(): float {
    return $this->num1;
  }

  public function setNum2(float $num2): void {
    if(is_nan($num2))
      throw new InvalidArgumentException("Not a Number was Provided");
    
    $this->num2 = $num2;
  }

  public function getNum2(): float {
    return $this->num2;
  }
}