<?php

/*
 * This file is part of the Animalize package.
 *
 * (c) Tiago Perrelli <tiagoyg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Animalize\Exceptions;

class InvalidAnimalException extends \Exception
{
	/**
	* InvalidAnimalException class instance
	*/
	public function __construct()
	{
		parent::__construct("Invalid animal provided", 402);
	}
}