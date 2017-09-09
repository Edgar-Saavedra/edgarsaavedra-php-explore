<?php

namespace EdgarSaavedra\Basics
{
	/**
		* Class Example
		* An example class
		* @package EdgarSaavedra\OOP
		*/
	final class LanguageBasics
	{
		public static $instance;
		private function __construct() {
		}
		public static function instance()
		{
			if(!isset(static::$instance))
			{
				static::$instance = new static();
			}
			return static::$instance;
		}
		/**
			* Example comments supported in php
			*/
		static function comments()
		{
			// C++ style comment

			/*
			 * C style comment
			 * */

			# Shell style

		}

		/**
			* A literal is a data value that appears directly in a program. The following are all liter- als in PHP:
			* @return \stdClass
			*/
		static function literals()
		{
			$var = 'test';
			$literals = new \stdClass();
			$literals->number = 2001;
			$literals->hex = 0xFE;
			$literals->floating = 1.03;
			$literals->doubleQuoteString = "double quote: will display a host of escaped characters (including some regexes), and variables in the strings will be evaluated. An important point here is that you can use curly braces to isolate the name of the variable you want evaluated. {\$type}s ";
			$literals->singleQuoteString = 'single quote: will display things almost completely "as is." Variables and most escape sequences will not be interpreted. The exception is that to display a literal single quote, you can escape it with a back slash \/\/\', and to display a back slash, you can escape it with another backslash \\ (So yes, even single quoted strings are parsed).';
			$literals->heredoc = <<<EOD
HereDoc
works like double quoted strings. It starts with <<<. After this operator, an identifier is provided, then a newline. The string itself follows, and then the same identifier again to close the quotation. You don't need to escape quotes in this syntax.

'hi 'again' '
"hello"
multiple lines all spaces used
$var
		a another line;
		This should print a capital 'A': \x41
EOD;
			$literals->nowdoc = <<<'EOT'
NowDoc
No parsing is done in nowdoc.
This should not print a capital 'A': \x41
EOT;

			return $literals;
		}

	}
}
