<?php

/**
	* General notes:
	* 	- Columns types of data that can be stored in a table
	* 	- Rows are the individual pieces of information
	*  - Relation databases : data is broken up into tables, and relationships are created
	* 			-- Keys are used in ralational databases, there should be primary keys,
	* 						primary keys are needed to create databases
	*    -- Foreign key : use the primary keys of other tables to create the "link"
	* 	- DBMS : Uses server software and client software (client server databases)
	*
	*/
namespace EdgarSaavedra\SQL
{
	/**
		* Class Example
		* An example class
		* @package EdgarSaavedra\OOP
		*/
	class SQLBasics
	{
		private $mysql;


		public function selectStatement()
		{
			// -- this is a comment in sql
			// /* */ this is a multi line comment in sql
			//get everything, but don't use it and do specify column names
			$query = "SELECT * FROM Persons;";
			//to get 1 column
			$query = "SELECT LastName FROM Persons;";
			//to get multiple columns in order stated
			$query = "SELECT City,LastName,FirstName FROM Persons;";
			//to get distinct values, no duplicates else all rows returned
			$query = "SELECT DISTINCT FirstName FROM Persons;";
			//to limit:
			//in mysql :
			$query = "SELECT City,LastName,FirstName FROM Persons LIMIT 2;";
			try{
				$result = $this->mysql->query($query);
				if($result)
					$result = $result->fetchAll();
				\Kint::dump($result);
			}catch(\PDOException $e)
			{
				\Kint::dump($e);
			}
		}

		function __construct() {
			$this->mysql = $this->connectDB();
			$this->createCitiesTable();
			$this->addCities(
				array(
					array('San Francisco'),
					array('Chicago'),
					array('Fort Worth'),
				)
			);

			$this->createPersonsTable();
			$this->addPeople(
				array(
					array(
						'FirstName' => 'Edgar',
						'LastName' => 'Saavedra',
						'Address' => '123 1st',
						'City' => 'San Francisco',
					),
					array(
						'FirstName' => 'Edgar',
						'LastName' => 'Saavedra',
						'Address' => '123 21st',
						'City' => 'Fort Worth',
					),
					array(
						'FirstName' => 'Carlos',
						'LastName' => 'Saavedra',
						'Address' => '123 2nd',
						'City' => 'Chicago',
					),
					array(
						'FirstName' => 'Diana',
						'LastName' => 'Saavedra',
						'Address' => '123 31st',
						'City' => 'Fort Worth',
					),
				)
			);
			$this->selectStatement();
		}
		function __destruct() {
			$this->mysql = null;
		}

		function connectDB($host = "localhost", $dbname = "edgarsaavedra_php_explore", $user = "root", $pass = "root")
		{
			try {
				$mysql = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
				return $mysql;
			}catch(\PDOException $e) {
				return false;
			}
		}

		/**
			* Database where structured data is stored
			*/
		public function createPersonsTable()
		{

			$result = $this->mysql->query('DROP TABLE Persons');

			// SQL data types
			// @link http://www.cs.toronto.edu/~nn/csc309/guide/pointbase/docs/html/htmlfiles/dev_datatypesandconversionsFIN.html
			$query = <<<EOD
CREATE TABLE Persons (
    ID int NOT NULL AUTO_INCREMENT,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City INTEGER,
    PRIMARY KEY (ID)
);
EOD;

				$result = $this->mysql->query($query);
		}

		public function addPeople($persons = array())
		{
			if(sizeof($persons))
			{
				foreach($persons as $key => $person)
				{
					//if we are given a string name of city, query existing cities and return their ids
					if(!is_int($person['City']))
					{
						$query = sprintf("SELECT ID,City FROM Cities WHERE City='%s'",$person['City']);

						try{
							$result = $this->mysql->query($query);
							if($result)
								$result = $result->fetch();
							$person['City'] = $result['ID'];
						}catch(\PDOException $e)
						{
							\Kint::dump($e);
						}
					}

					$person = "'".implode("','",$person)."'";
					$query = "INSERT INTO Persons (FirstName,LastName,Address,City) values(".$person.")";
					try{
						$result = $this->mysql->exec($query);
					}catch(\PDOException $e)
					{
						\Kint::dump($e);
					}
				}
			}
		}

		public function createCitiesTable()
		{

			$result = $this->mysql->query('DROP TABLE Cities');

			// SQL data types
			// @link http://www.cs.toronto.edu/~nn/csc309/guide/pointbase/docs/html/htmlfiles/dev_datatypesandconversionsFIN.html
			$query = <<<EOD
CREATE TABLE Cities (
    ID int NOT NULL AUTO_INCREMENT UNIQUE,
    City varchar(255) NOT NULL UNIQUE,
    PRIMARY KEY (ID)
);
EOD;

			$result = $this->mysql->query($query);
		}


		public function addCities($cities = array())
		{
			if(sizeof($cities))
			{
				foreach($cities as $key => $city)
				{
					$city = "'".implode("','",$city)."'";
					$query = "INSERT INTO Cities (City) values(".$city.")";
					try{
						$result = $this->mysql->exec($query);
					}catch(\PDOException $e)
					{
						\Kint::dump($e);
					}
				}
			}
		}

	}
}