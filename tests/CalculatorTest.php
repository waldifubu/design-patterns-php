<?php
// CalculatorTest.php
use PHPUnit\Framework\TestCase;

include_once("Calculator.php");


class CalculatorTest extends TestCase {
    public function testDivideByPositiveNumber() {
        $calcMock=$this->getMockClass('\Calculator',array('getNumberFromUserInput'));
        $calcMock->expects($this->once())
            ->method('getNumberFromUserInput')
            ->will($this->returnValue(10));
        $this->assertEquals(5,$calcMock->divideBy(2));
    }


    public function testDivideByZero() {
        $calcMock=$this->getMock('\Calculator',array('getNumberFromUserInput'));
        $calcMock->expects($this->never())
            ->method('getNumberFromUserInput')
            ->will($this->returnValue(10));
        $this->assertEquals(NAN, $calcMock->divideBy(0));

    }

    public function testDivideByNegativeNumber() {
        $calcMock=$this->getMock('\Calculator',array('getNumberFromUserInput'));
        $calcMock->expects($this->once())
            ->method('getNumberFromUserInput')
            ->will($this->returnValue(10));
        $this->assertEquals(-2,$calcMock->divideBy(-5));

    }

    public function testDivideByPositiveNumberAndPrint() {
        $calcMock=$this->getMock('\Calculator',array('getNumberFromUserInput', 'printToScreen'));
        $calcMock->expects($this->once())
            ->method('getNumberFromUserInput')
            ->will($this->returnValue(10));
        $calcMock->expects($this->once())
            ->method('printToScreen')
            ->with($this->equalTo('5'));
        $calcMock->divideByAndPrint(2);
    }
}