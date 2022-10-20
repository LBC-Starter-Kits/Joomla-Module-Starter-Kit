
<?php 
/*Este archivo puede considerarse el modelo (MVC) del módulo*/

defined("_JEXEC") or die; 

require_once __DIR__ . DIRECTORY_SEPARATOR ."vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use Dickinsonjl\Lorum\Lorum;

class modBase{

    public static function lorem(){
        $lorum = new Lorum();
        $lorum->buildCache();

        return $lorum->giveMeParagraph();
    }
}
?>