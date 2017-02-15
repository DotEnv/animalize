<?php

/*
 * This file is part of the Animalize package.
 *
 * (c) Tiago Perrelli <tiagoyg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Animalize\Contracts;

interface Generator
{
	/**
	* Generate an animal
	*
	* @param  string $specie
	* @return array  $animal
	*/
	public function animal($specie = 'dog');
}