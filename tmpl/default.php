<?php 
defined("_JEXEC") or die;

$doc=JFactory::getDocument();
$doc->addStyleSheet(JURI::base() . "./modules/mod_moduloEjemplo/css/main.css");
$doc->addScript(JURI::base() . "./modules/mod_moduloEjemplo/js/main.js","text/javascript");

require_once __DIR__ . "/../helper.php";

/*
echo "< div class='tickets-outer-wrapper'>
          < h3 class='tickets-header'>" . $params["titulo"] . \"< /h3>
          < p class='tickets-text'>" . $params["texto"] . "< /p>
          < div class='tickets-tienda'>
             < p>Tienda< /p>
          < /div>        
       < /div>
    ";
*/
?>