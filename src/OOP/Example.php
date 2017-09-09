<?php

namespace EdgarSaavedra\OOP
{
	/**
		* Class Example
		* An example class
		* @package EdgarSaavedra\OOP
		*/
	class Example
	{
			private $name;
			function __construct($name) {
				$this->name = $name;
			}
			public function getName()
			{
				return $this->name;
			}
	}
}