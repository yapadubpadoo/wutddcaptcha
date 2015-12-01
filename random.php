<?php

class Random 
{
	public function randomPattern()
	{
		return rand(1, 2);
	}

	public function randomOperator()
	{
		return rand(1, 2);
	}

	public function randomOperand()
	{
		return rand(0, 10);
	}
}