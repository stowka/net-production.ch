<?php
	/**
	 * Class type
	 * @author Arnaud Colin
	 * @copyright Net-Production
	 */

	class Type {
		private $id;
		private $keyword;
		private $label;
		private $image;
		private $language;

		function __construct(){
			$this->id = 0;
			$this->keyword = "";
			$this->label = "";
			
			$this->language = "";
		}

		public static function initWithId($id) {
			$instance = new self();
			$instance->setId($id);
			$dbh = SPDO::getInstance();
			$stmt = $dbh->prepare("SELECT * FROM type WHERE id = :id;");
			$stmt->bindParam(":id", $id, PDO::PARAM_INT);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$stmt->closeCursor();
			$instance->setKeyword($row['keyword']);
			$instance->setLabel($row['label']);
			
			$instance->setLanguage($row['language']);
			return $instance;
		}

		public static function initWithData($keyword, $label, $image, $language) {
			$instance = new self();
			$instance->setKeyword($keyword);
			$instance->setLabel($label);
			
			$instance->setLanguage($language);
			return $instance;
		}

		public function store() {
			if (!empty($this->label)) {
				$dbh = SPDO::getInstance();
				$stmt = $dbh->prepare("INSERT INTO type 
										VALUES (null, :keyword, :label, :image, :language);");
				$stmt->bindParam(":keyword", $this->label, PDO::PARAM_STR);
				$stmt->bindParam(":label", $this->label, PDO::PARAM_STR);
				
				$stmt->bindParam(":language", $this->label, PDO::PARAM_STR);
				$stmt->execute();
				$this->id = $dbh->lastInsertId();
				$stmt->closeCursor();
			}
			else
				echo "Error : Incorrect label, image, keyword or language.";
		}

		public function delete() {
			$dbh = SPDO::getInstance();
			$stmt = $dbh->prepare("DELETE FROM type WHERE id = :id;");
			$stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
			$stmt->execute();
			$stmt->closeCursor();
		}

		public static function getAll($lang = "fr_CH") {
			$dbh = SPDO::getInstance();
			$stmt = $dbh->prepare("SELECT id FROM type WHERE language = :lang;");
			$stmt->bindParam(":lang", $lang, PDO::PARAM_STR);
			$stmt->execute();
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$stmt->closeCursor();
			$types = array();
			foreach ($rows as $row) {
				$types[] = Type::initWithId($row['id']);
			}
			return $types;
		}

		public static function deleteAll() {
			$dbh = SPDO::getInstance();
			$stmt = $dbh->prepare("DELETE FROM type;");
			$stmt->execute();
			$stmt->closeCursor();
		}

		/**
		 * Getters
		 */

		public function getId() {
			return $this->id;
		}

		public function getKeyword() {
			return $this->keyword;
		}

		public function getLabel() {
			return $this->label;
		}

		public function getImage() {
			return $this->image;
		}

		public function getLanguage() {
			return $this->language;
		}

		/**
		 * Setters
		 */

		public function setId($id) {
			$this->id = $id;
		}

		public function setKeyword($keyword) {
			$this->keyword = $keyword;
		}

		public function setLabel($label) {
			$this->label = $label;
		}

		public function setImage($image) {
			$this->image = $image;
		}

		public function setLanguage($language) {
			$this->language = $language;
		}
	}
