<?php 
    /** 
     * Class project
     * @author Arnaud Colin, Fran&ccedil;ois-Xavier B&eacute;ligat
     * @copyright Net-Production
     */

    class Project {
        private $id;
        private $title;
        private $description;
        private $public;
        private $picture;
        private $url;
        private $type;
        private $language;

        public function __construct() {
            $this->id = 0;
            $this->title = "";
            $this->description = "";
            $this->public = False;
            $this->picture = "";
            $this->url = "";
            $this->type = 0;
            $this->language = "";
        }

        public static function initWithId($id) {
            $instance = new self();
            $instance->setId($id);
            $dbh = SPDO::getInstance();
            $stmt = $dbh->prepare("SELECT * FROM project WHERE id = :id;");
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            $instance->setTitle($row['title']);
            $instance->setDescription($row['description']);
            $instance->setPublic($row['public']);
            $instance->setPicture($row['picture']);
            $instance->setUrl($row['url']);
            $instance->setType($row['type']);
            $instance->setLanguage($row['language']);
            return $instance;
        }

        public static function initWithData($title, $description, $public, $picture, $url,
            $type, $language) {

            $instance = new self();
            $instance->setTitle($title);
            $instance->setDescription($description);
            $instance->setPublic($public);
            $instance->setPicture($picture);
            $instance->setUrl($url);
            $instance->setType($type);
            $instance->setLanguage($language);
            return $instance;
        }

        public function store() {
            if (!empty($this->title) &&  !empty($this->description) &&
                !empty($this->language)) {
                $dbh = SPDO::getInstance();
                $stmt = $dbh->prepare("INSERT INTO project(title, description,
                    public, picture, url, type, language) VALUES(:title, :description,
                    :public, :picture, :url, :type, :language);");
                $stmt->bindParam(":title", $this->title, PDO::PARAM_STR);
                $stmt->bindParam(":description", $this->description, PDO::PARAM_STR);
                $stmt->bindParam(":public", $this->public, PDO::PARAM_BOOL);
                $stmt->bindParam(":picture", $this->picture, PDO::PARAM_STR);
                $stmt->bindParam(":url", $this->url, PDO::PARAM_STR);
                $stmt->bindParam(":type", $this->type, PDO::PARAM_INT);
                $stmt->bindParam(":language", $this->language, PDO::PARAM_STR);
                $stmt->execute();
                $this->id = $dbh->lastInsertId();
                $stmt->closeCursor();
            } else
                echo "Error : check fields title or description or language.";
        }

        public function delete() {
            $dbh = SPDO::getInstance();
            $stmt = $dbh->prepare("DELETE FROM project WHERE id = :id;");
            $stmt->bindParam(":id", $this->id, PDO::PARAM_INT);
            $stmt->execute();
            $stmt->closeCursor();
        }

        public static function getAllByTypeAndLanguage($typeId, $language) {
            $dbh = SPDO::getInstance();
            $stmt = $dbh->prepare("SELECT id FROM project WHERE type = :type and language = :language and public = 1;");
            $stmt->bindParam(":type", $typeId , PDO::PARAM_INT);
            $stmt->bindParam(":language", $language, PDO::PARAM_STR);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            $projects = Array();
            foreach ($rows as $row)
                $projects[] = Project::initWithId($row['id']);
            return $projects;
        }

        public static function getAll($lang = "fr_CH") {
            $dbh = SPDO::getInstance();
            $stmt = $dbh->prepare("SELECT id FROM project WHERE language = :lang;");
            $stmt->bindParam(":lang", $lang, PDO::PARAM_STR);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            $projects = Array();
            foreach ($rows as $row)
                $projects[] = Project::initWithId($row['id']);
            return $projects;
        }

        public static function getAllSortedByType($lang = "fr_CH") {
            $types = Type::getAll($lang);
            $projects = Array();

            $dbh = SPDO::getInstance();
            foreach ($types as $type) {
                $projects[$type->getKeyword()] = Project::getAllByTypeAndLanguage($type->getId(), $lang);
            }
            return $projects;
        }

        public static function deleteAll() {
            $dbh = SPDO::getInstance();
            $stmt = $dbh->prepare("DELETE FROM project;");
            $stmt->execute();
            $stmt->closeCursor();
        }


        /*
         * Getters
         */

        public function getId() {
            return $this->id;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getType() {
            return $this->type;
        }

        public function isPublic() {
            return $this->public;
        }

        public function getLanguage() {
            return $this->language;
        }

        public function getPicture() {
            return $this->picture;
        }

        public function getUrl() {
            return $this->url;
        }

        /*
         * Setters
         */

        public function setId($id) {
            $this->id = $id;
        }
        
        public function setTitle($title) {
            $this->title = $title;
        }

        public function setDescription($description) {
            $this->description = $description;
        }

        public function setType($type) {
            $this->type = $type;
        }

        public function setPublic($public) {
            $this->public = $public;
        }

        public function setLanguage($language) {
            $this->language = $language;
        }

        public function setPicture($picture) {
            $this->picture = $picture;
        }

        public function setUrl($url) {
            $this->url = $url;
        }

    }
