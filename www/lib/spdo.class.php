<?php
	/**
	 * Class SPDO (Singleton PDO)
	 *
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 * @description
	 *		Singleton pattern implemented into PDO
	 *
	 */

	class SPDO {
		private $_PDOInstance = null;
		const DEFAULT_SQL_HOST = 'localhost';
<<<<<<< HEAD
		const DEFAULT_SQL_USER = 'netprod-beta';
		const DEFAULT_SQL_PASSWORD = 'akiMxfKum6iis7t3My6QUkGX';
		const DEFAULT_SQL_DATABASE = 'netprod-beta';
=======
		const DEFAULT_SQL_USER = 'root';
		const DEFAULT_SQL_PASSWORD = '';
		const DEFAULT_SQL_DATABASE = 'netprod';
>>>>>>> ca1d3b3c5dc146ee20c4d700662a20021dbcf432

		private static $_instance = null;

		private function __construct() {
			$this->_PDOInstance = new PDO(
				'mysql:dbname='.self::DEFAULT_SQL_DATABASE.
				';host='.self::DEFAULT_SQL_HOST,
				self::DEFAULT_SQL_USER,
                self::DEFAULT_SQL_PASSWORD,
                Array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		}

		public static function getInstance() {
			if (is_null(self::$_instance))
				self::$_instance = new SPDO();
			return self::$_instance;
		}

		public function query($query) {
			return $this->_PDOInstance->query($query);
		}

		public function exec($query) {
			return $this->_PDOInstance->exec($query);
		}

		public function prepare($query) {
			return $this->_PDOInstance->prepare($query);
		}

		public function lastInsertId() {
			return $this->_PDOInstance->lastInsertId();
		}
	}
