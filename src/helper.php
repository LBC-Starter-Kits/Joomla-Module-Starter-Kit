
<?php 
/*Este archivo puede considerarse el modelo (MVC) del módulo*/

defined("_JEXEC") or die; 

class modBase{
   /* 
   public static function getURLImagenes($params){
       $res=array();
       //solo funciona con ruta relativa(empieza por ./)
       $aux="./images/" . $params['dir'];
       $files=scandir($aux); 
       foreach($files as $f){
           if($f!="." && $f!=".."){
               array_push($res,JURI::base() . "images/" . $params['dir'] . "/" . $f);
           }            
       } 
        return $res;
    }
    */
}
?>