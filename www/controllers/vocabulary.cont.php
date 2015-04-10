<?php
	/**
     * @author Arnaud Colin
     * @copyright Net-Production Köbe & Co
     */

	$words = Vocabulary::getAll($lang);
	$voc = Array();
	foreach ($words as $word):
		$voc[$word->getKeyword()] = $word->getValue();
	endforeach;

	$reasons = Reason::getAll($lang);