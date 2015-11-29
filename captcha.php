<?php

class Captcha
{
	private $pattern;
	private $right_operand;
	private $left_operand;

	public function getTextNumber($number_key)
	{
		$text_number = [
			0 => 'zero',
			1 => 'one',
			2 => 'two',
			3 => 'three',
			4 => 'four',
			5 => 'five',
			6 => 'six',
			7 => 'seven',
			8 => 'eight',
			9 => 'nine',
			10 => 'ten',
		];
		return $text_number[$number_key];
	}
	
	public function setPattern($pattern)
	{
		$this->pattern = $pattern;
	}

	public function setRightOperand($number)
	{
		$this->right_operand = $number;
	}

	public function getRightOperand()
	{
		if ($this->pattern == 1) {
			$text_number = $this->getTextNumber($this->right_operand);
			return $text_number;
		}
		return $this->right_operand;
	}

	public function setOperator($type)
	{
		$this->operator_type = $type;
	}

	public function getOperator()
	{
		$operator = [
			1 => '+',
			2 => '-',
		];
		return $operator[$this->operator_type];
	}

	public function setLeftOperand($number)
	{
		$this->left_operand = $number;
	} 

	public function getLeftOperand()
	{
		if ($this->pattern == 2) {
			$text_number = $this->getTextNumber($this->left_operand);
			return $text_number;
		}
		return $this->left_operand;
	}
}