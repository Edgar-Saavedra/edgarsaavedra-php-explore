<?php

namespace EdgarSaavedra\Network
{
		final class WorkingWithPredifined
		{
			 public static $instance;
				private function __construct() {
				}
				public static function getinstance()
				{
					if(!isset(static::$instance))
					{
						static::$instance = new static();
					}
					return static::$instance;
				}
				public static function getGlobals()
				{
					$globals = new \stdclass;
					$globals->post = $_POST;
					$globals->get = $_GET;
					return $globals;
				}
		}
}