<?php
class CaptchaTest extends PHPUnit_Framework_TestCase
{
	// Captcha

	// Pattern 1
	// 1 + two = ?
	// 3 - seven = ?

	// Pattern 2
	// seven - 4 = ?
	// five + 1 = ?

	public function testGetTextNumberWith6ReturnSix()
	{
		$captcha = new Captcha();
		$this->assertEquals('six', $captcha->getTextNumber(6));
	}

	public function testGetTextNumberWith10ReturnTen()
	{
		$captcha = new Captcha();
		$this->assertEquals('ten', $captcha->getTextNumber(10));
	}

	public function testSetRightOperandPattern1With5ReturnFive()
	{
		$captcha = new Captcha();
		$captcha->setPattern(1);
		$captcha->setRightOperand(5);
		$this->assertEquals('five', $captcha->getRightOperand());
	}


	public function testSetLeftOperandPattern1With3Return3()
	{
		$captcha = new Captcha();
		$captcha->setPattern(1);
		$captcha->setLeftOperand(3);
		$this->assertEquals(3, $captcha->getLeftOperand());
	}

	public function testSetRightOperandPattern2With4Return4()
	{

	}

	public function testSetLeftOperandPattern2With7ReturnSeven()
	{

	}
	
	public function testGetOperator1ReturnPlusOperator()
	{
		$captcha = new Captcha();
		$captcha->setOperator(1);
		$this->assertEquals('+', $captcha->getOperator());
	}

	public function testGetOperator2ReturnMinusOperator()
	{
		$captcha = new Captcha();
		$captcha->setOperator(2);
		$this->assertEquals('-', $captcha->getOperator());
	}
}