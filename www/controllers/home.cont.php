<?php
	/**
	 * Default home front controller
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */
	displayAuthor();

    require_once "controllers/mail.cont.php";
    require_once "controllers/team.cont.php";
    require_once "controllers/commitments.cont.php";
    require_once "controllers/projects.cont.php";
    require_once "controllers/vocabulary.cont.php";

    require_once "views/home.view.php";
