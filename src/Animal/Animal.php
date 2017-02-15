<?php

/*
 * This file is part of the Animalize package.
 *
 * (c) Tiago Perrelli <tiagoyg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Animalize\Animal;

abstract class Animal
{
	/**
	* @var string $specie
	*/
	protected $specie;

	/**
	* @var string $breed
	*/
	protected $breed;

	/**
	* Set animal specie
	*
	* @param string $specie
	* @return void
	*/
	public function setSpecie($specie)
	{
		$this->specie = $specie;
	}

	/**
	* Set animal breed
	*
	* @param string $breed
	* @return void
	*/
	public function setBreed($breed)
	{
		$this->breed = $breed;
	}	

	/**
	* Define animal breed
	*
	* @return void
	*/
	abstract public function defineBreed();
}