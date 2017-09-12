<?php

/**
	* General notes
	* In terms of PHP, the most important attribute of your form tag is action
	*  but post is the value you’ll use most frequently.
	* give your form inputs, as they’ll be of critical importance
	*
	* The two options—get and post— refer to the HTTP
	* The GET method sends the submitted data to the receiving page as a series of name-value pairs appended to the URL. For example, http://www.example.com/script.php? ➝ name=Homer&gender=M&age=35
	* The POST method is used when an action is expected: the updating of a database record or the sending of an email. For these reasons I will primarily use POST throughout this book, with noted exceptions.
	*/
namespace EdgarSaavedra\Basics
{
	class Forms
	{
		public function checkGender()
		{
			$gender = null;
			if(isset($_REQUEST['gender']))
			{
					$gender = $_REQUEST['gender'];
			}else{
				$gender = null;
			}

			if ($gender == 'M') {
				echo '<p><b>Good day, Sir!</b></p>';
				} elseif ($gender == 'F') {
				echo '<p><b>Good day, Madam!</b></p>';
				} else { // No gender selected.
				echo '<p><b>You forgot to enteryour gender!</b></p>';
			}

		}
		public function getReqVars()
		{
			$re = "";
			foreach($_REQUEST as $key=>$value)
			{
					$re .= $key . " : ".$value ." <br/>";
			}
			return $re;
		}
	}
}