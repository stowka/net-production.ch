<?php
    /**
     * @author Arnaud Colin
     * @copyright Net-Production
     */

    $types = Type::getAll($lang);
    $projects = Project::getAllSortedByType($lang);
    