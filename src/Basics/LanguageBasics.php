<?php

/**
	* General Notes:
	* - within double quotes will result in their represented values printed, not their literal values.
	* - PHP has four functions for incorporating external files: include(), include_once(), require(), and require_once()
	* - include_once('filename.php'); require('/path/to/filename.html');
	* - If an include() function doesn’t work (it cannot include the file for some reason), a warning will be printed to the Web browser A,
	* 		but the script will CONTINUE TO RUN (include). If require() FAILES, an error is printed and the script is halted B
	* 		Both functions also have a *_once() version, which guarantees that the file in question is included only once regardless of how many times a script may (presumably inadvertently) attempt to include it.
	*
	* 		Because require_once() and include_ once() require extra work from the PHP module (i.e., PHP must first check that the file has not already been included), it’s best
					not to use these two functions unless a redundant include is likely to occur
	*
	* 		Since require() has more impact on a script when it fails, it’s recommended for mission-critical includes (like those that con- nect to a database).
	* 		The include( ) function would be used for less important inclusions.
	*
	* - Variable Scope
	* 		For starters, variables have the scope of the page in which they reside.
	* 		Since included files act as if they were part of the original (including) script,
	* 		variables defined before an include() line are available to the included file
	*
	*/
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

		/**
			* A constant can only be assigned a scalar value, like a string or a number:
			*/
		static function constants()
		{
			define('CONST1','A constant');
			define('CONST2',3.14);
			echo "constant 1 ".CONST1.
				"\n Constant 2 ".CONST2.
				"\n NATIVE CONSANT PHP_VERSION: ". PHP_VERSION.
				"\n NATIVE CONSANT PHP_OS: ". PHP_OS;
		}

		/**
			* == is equal to
			* != is not equal to
			* < less than
			* > greater than
			* <= less than or equal to
			* >= greater than or equal to
			* ! not
			* && and
			* AND and
			* || or
			* OR or
			* XOR and not
			*/
		static function conditionals_operators()
		{
			$var = null;
			/**
				* if
				* $var, if $var has a value other than 0, an empty string, FALSE, or NULL
				*
				* isset( ), is introduced. This function checks if a variable is “set,” meaning that
						it has a value other than NULL
				* if(isset($_REQUEST['variable']))
				*
				*/
				if($var)
				{
					//do something
				}

			if($var)
			{
				//do something
			}else if($var)
			{
				//try something else
			}
			else{
				// do something else
			}

			switch($var)
			{
				case 'value':
					//do something
					break;
				default :
					//just in case do this
					break;
			}
		}

		/**
			* PHP supports two kinds of arrays: indexed,
			* which use numbers as the keys (as in Table 2.3),
			* and associative, which use strings as keys
			*
			* Superglobal Arrays
			* PHP includes several predefined arrays called the superglobal variables.
			* They are: $_GET, $_POST, $_REQUEST, $_SERVER, $_ENV, $_SESSION, and $_COOKIE.
			*
			* Or, if you set the first numeric key value, the added values will be keyed incrementally thereafter:
					$days = array (1 => 'Sun', 'Mon', 'Tue');
					echo $days[3]; // Tue
			*
			* if you want to create an array of sequential numbers, you can use the range() function:
					$ten = range (1, 10);
			*/
		static public function arrays()
		{
				$index = array(100,2,3,4,5);
				$associative = array('a'=>1,'b'=>2);

//			php has 2 internal methods to work with strings and arrays:
//			to break up a string on a particular character, the character is ignored
			$string_arr = explode(' ','hello world'); //[hello,world]
			$string_arr[] = 121323;
//			to put back together the array with a particular seperator
			$string_arr = implode('-',$string_arr); //hello-world-121323

//			Using the sort methods, uses quicksort
			$names = array('Moe','Larry','Curly');
			sort($names);
			sort($index);

			// Second, you can sort an array by value while maintaining the keys, using asort().
			// Third, you can sort an array by key, using ksort(). Each of these can sort in
			// reverse order if you change them to rsort(), arsort(), and krsort() respectively.

//			$names = array()
		}

		/**
			* Traversing an array, no matter if multi dimensional
			* using recursion
			* @param $arr
			*/
		static public function travers_array($arr)
		{
				foreach($arr as $key => $value)
				{
					if(is_array($value))
						static::traversArray($value);
					else
						echo "<br> ".$key . ' : ' . $value;
				}
		}

		static public function working_with_strings()
		{

		}


	}
}
