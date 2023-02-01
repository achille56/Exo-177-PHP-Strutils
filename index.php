<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.
include "./classes/StrUtils.php";

$myStr = new StrUtils("php is awesome !", "bold", "italic", "underline", "capitalize");

echo $myStr->getBold(). "\n";
echo $myStr->getItalic(). "\n";
echo $myStr->getUnderline(). "\n";
echo $myStr->getCapitalize(). "\n";
echo $myStr->uglify(). "\n";

