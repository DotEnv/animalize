<?php

/*
 * This file is part of the Animalize package.
 *
 * (c) Tiago Perrelli <tiagoyg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Animalize;

use Animalize\Exceptions\InvalidAnimalException;
use Animalize\Contracts\Generator as GeneratorContract;

class Generator implements GeneratorContract
{
	/**
	* Generate an animal
	*
	* @param  string $specie
	* @return array  $animal
	*/
	public function animal($specie = 'dog')
	{
		$class = "\\Animalize\\Animal\\" . ucfirst($specie) . "\\" . ucfirst($specie);

		if (class_exists($class) == false)
		{
			throw new InvalidAnimalException;
		}

		$animal = new $class;

		dd($animal);

		dd('pass', $class);
	}
}