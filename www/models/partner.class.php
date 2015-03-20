<?php

	/**
	 * @author Arnaud Colin
	 * @copyright Net-Production
	 */

	class Partner {
		private $id;
		private $name;
		private $url;

		function __construct() {
			$this->id = 0;
			$this->name = "";
			$this->url = "";
		}

		public static function initWithId($id) {
			$instance = new self();
			$instance->setId($id);
			$dbh = SPDO::getInstance();
			$stmt = $dbh->prepare("SELECT * FROM partner WHERE id = :id;");
			$stmt->bindParam(":id", $id, PDO::PARAM_INT);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$stmt->closeCursor();
			$instance->setName($row['name']);
			$instance->setUrl($row['url']);
			return $instance;
		}

		public static function initWithData($name, $url) {
			$instance = new self();
			$instance->setName($name);
			$instance->setUrl($url);
			return $instance;
		}

		public function store() {
			if (!empty($this->name) && !empty($this->url)) {
				$dbh = SPDO::getInstance();
				$stmt = $dbh->prepare("INSERT INTO partner(name, url)
					VALUES (:name, :url);");
				$stmt->bindParam(":name", $this->name, PDO::PARAM_STR);
				$stmt->bindParam(":url", $this->url, PDO::PARAM_STR);
				$stmt->execute();
				$this->id = $dbh->lastInsertId();
				$stmt->closeCursor();
			}
			else
				echo "Error : Incorrect name or url.";
		}

		public function delete() {
			$dbh = SPDO::getInstance();
			$stmt = $dbh->prepare("DELETE FROM partner WHERE id = :id;");
			$stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
			$stmt->execute();
			$stmt->closeCursor();
		}

		public static function getAll() {
			$dbh = SPDO::getInstance();
			$stmt = $dbh->prepare("SELECT id FROM partner;");
			$stmt->execute();
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$stmt->closeCursor();
			$partners = array();
			foreach ($rows as $row)
				$partners[] = Partner::initWithId($row['id']);
			return $partners;
		}

		public static function deleteAll() {
			$dbh = SPDO::getInstance();
			$stmt = $dbh->prepare("DELETE FROM partner;");
			$stmt->execute();
			$stmt->closeCursor();
		}

		/**
		 * Getters
		 */

		function getId() {
			return $this->id;
		}

		function getName() {
			return $this->name;
		}

		function getUrl() {
			return $this->url;
		}

		/**
		 * Setters
		 */

		function setId($id) {
			$this->id = $id;
		}

		function setName($name) {
			$this->name = $name;
		}

		function seturl($url) {
			$this->url = $url;
		}

	}