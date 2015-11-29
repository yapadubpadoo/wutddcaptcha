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
	public function setUp()
	{
		$this->captcha = new Captcha();
	}

	public function testGetTextNumberWith6ReturnSix()
	{
		
		$this->assertEquals('six', $this->captcha->getTextNumber(6));
	}

	public function testGetTextNumberWith10ReturnTen()
	{
		$this->assertEquals('ten', $this->captcha->getTextNumber(10));
	}

	public function testSetRightOperandPattern1With5ReturnFive()
	{
		$this->captcha->setPattern(1);
		$this->captcha->setRightOperand(5);
		$this->assertEquals('five', $this->captcha->getRightOperand());
	}


	public function testSetLeftOperandPattern1With3Return3()
	{
		$this->captcha->setPattern(1);
		$this->captcha->setLeftOperand(3);
		$this->assertEquals(3, $this->captcha->getLeftOperand());
	}

	public function testSetRightOperandPattern2With4Return4()
	{

	}

	public function testSetLeftOperandPattern2With7ReturnSeven()
	{

	}
	
	public function testGetOperator1ReturnPlusOperator()
	{
		$this->captcha->setOperator(1);
		$this->assertEquals('+', $this->captcha->getOperator());
	}

	public function testGetOperator2ReturnMinusOperator()
	{
		$this->captcha->setOperator(2);
		$this->assertEquals('-', $this->captcha->getOperator());
	}

	public function testGetQuestionPattern1()
	{
		$this->captcha->setPattern(1);
		$this->captcha->setLeftOperand(1);
		$this->captcha->setOperator(1);
		$this->captcha->setRightOperand(5);
		$this->assertEquals('1 + five = ?', $this->captcha->getQuestion());
	}

	public function testGetQuestionPattern2()
	{
		$this->captcha->setPattern(2);
		$this->captcha->setLeftOperand(7);
		$this->captcha->setOperator(2);
		$this->captcha->setRightOperand(3);
		$this->assertEquals('seven - 3 = ?', $this->captcha->getQuestion());
	}


}