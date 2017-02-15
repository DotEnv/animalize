<?php

/*
 * This file is part of the Animalize package.
 *
 * (c) Tiago Perrelli <tiagoyg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Animalize\Animal\Dog;

use Animalize\Animal\Animal;

class Dog extends Animal
{
	//do crawler
	//href='http://portaldodog.com.br/cachorros/racas-cachorros

	/**
	* Dog breeds
	*
	* @var array $breeds
	*/
	private $breeds = [

	
	];

	/**
	* Dog class instance
	*/
	public function __construct()
	{
		$this->setSpecie('dog');
		$this->defineBreed();
	}

	/**
	* Define animal breed
	*
	* @return void
	*/	
	public function defineBreed()
	{
		require_once __DIR__ . '/config.php';

		dd('ok');

		$config = file_get_contents(__DIR__ .'/config.php');

		dd($f);

		dd(__DIR__);

		$key = array_rand($this->breeds);

		$this->setBreed($this->breeds[$key]);
	}
}