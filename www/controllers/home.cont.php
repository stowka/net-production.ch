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
    require_once "controllers/partner.cont.php";

    $homes = Home::getAll($lang);
    $menu = Vocabulary::getAll($lang);

    $homes = Home::getAll($lang);
    $h = Vocabulary::getMenu("home", $lang);
    $com = Vocabulary::getMenu("commitments", $lang);
    $pro = Vocabulary::getMenu("projects", $lang); 
    $t = Vocabulary::getMenu("team", $lang);
    $co = Vocabulary::getMenu("contact", $lang);

    require_once "views/home.view.php";


