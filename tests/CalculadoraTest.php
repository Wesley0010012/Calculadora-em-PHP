<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Src\Classes\Calculadora;

final class CalculadoraTest extends TestCase
{
    private Calculadora $sut;

    public function setUp(): void {
      $this->sut = new \Src\Classes\Calculadora();

      $this->sut->setNum1(1);
      $this->sut->setNum2(2);
    }

    public function testShouldThrowExceptionIfNotANumber1IsProvided(): void {
      $this->expectException(\InvalidArgumentException::class);
      $this->expectExceptionMessage("Not a Number was Provided");
      $this->sut->setNum1(NAN);
    }

    public function testShouldThrowExceptionIfNotANumber2IsProvided(): void {
      $this->expectException(\InvalidArgumentException::class);
      $this->expectExceptionMessage("Not a Number was Provided");
      $this->sut->setNum2(NAN);
    }

    public function testShouldAcceptAndReturnTheCorrectNumber1(): void {
      $this->sut->setNum1(1);

      $this->assertEquals(1, $this->sut->getNum1());
    }

    public function testShouldAcceptAndReturnTheCorrectNumber2(): void {
      $this->sut->setNum2(2);

      $this->assertEquals(2, $this->sut->getNum2());
    }

    public function testShouldReturnTheSumOfTwoNumbers(): void {
      $soma = $this->sut->getNum1() + $this->sut->getNum2();

      $this->sut->soma();
      $this->assertEquals($soma, $this->sut->mostrarResult());
    }

    public function testShouldReturnTheSubtractOfTwoNumbers(): void {
      $subt = $this->sut->getNum1() - $this->sut->getNum2();

      $this->sut->subtract();

      $this->assertEquals($subt, $this->sut->mostrarResult());
    }

    public function testShouldReturnTheMultiplyOfTwoNumbers(): void {
      $mult = $this->sut->getNum1() * $this->sut->getNum2();

      $this->sut->multiply();

      $this->assertEquals($mult, $this->sut->mostrarResult());
    }

    public function testShouldReturnTheDivisionOfTwoNumbers(): void {
      $div = $this->sut->getNum1() / $this->sut->getNum2();

      $this->sut->divide();

      $this->assertEquals($div, $this->sut->mostrarResult());
    }

    public function testShouldReturnExceptionIfHaveADivisionByZero(): void {
      $this->sut->setNum2(0);

      $this->expectException(\LogicException::class);
      $this->expectExceptionMessage("Division by Zero");

      $this->sut->divide();
    }
}