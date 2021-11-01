<?php
// CalculatorTest.php
use Patterns\Test\Calculator;
use PHPUnit\Framework\TestCase;

//include_once("Calculator.php");


class CalculatorTest extends TestCase
{
    public function testDivideByPositiveNumber2(): void
    {
        $calcMock = $this->createMock(Calculator::class);
        $calcMock->expects($this->once())
            ->method('getNumberFromUserInput')
            ->willReturn(10);

        $calcMock->getNumberFromUserInput();

        $this->assertEquals(5, $calcMock->divideBy(2));
    }

    public function testDivideByPositiveNumber(): void
    {
        $calcMock = $this->createMock(\Calculator::class);
        $calcMock->expects($this->once())
            ->method('getNumberFromUserInput')
            ->willReturn(10);
        $this->assertEquals(5, $calcMock->divideBy(2));
    }


    public function testDivideByZero()
    {
        $calcMock = $this->getMockClass('\Calculator', ['getNumberFromUserInput']);
        $calcMock->expects($this->never())
            ->method('getNumberFromUserInput')
            ->will($this->returnValue(10));
        $this->assertEquals(NAN, $calcMock->divideBy(0));
    }

    public function testDivideByNegativeNumber()
    {
        $calcMock = $this->getMockClass('\Calculator', ['getNumberFromUserInput']);
        $calcMock->expects($this->once())
            ->method('getNumberFromUserInput')
            ->will($this->returnValue(10));
        $this->assertEquals(-2, $calcMock->divideBy(-5));
    }

    public function testDivideByPositiveNumberAndPrint(): void
    {
        $calcMock = $this->createMock(Calculator::class);
        $calcMock->expects($this->any())
            ->method('getNumberFromUserInput')
            ->willReturn(10);

        $calcMock->expects($this->any())
            ->method('printToScreen')
            ->with($this->equalTo('5'));

        $calcMock->divideByAndPrint(2);
    }
}