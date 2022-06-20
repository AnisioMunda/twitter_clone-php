<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=twitter_clone;charset=utf8",
				"anisio",
				"1017769anisio" 
			);

			return $conn;

		} catch (\PDOException $e) {
			
		}
	}
}

?>