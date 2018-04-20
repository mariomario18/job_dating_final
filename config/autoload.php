<?php

function autoload_defaut($className) {
  /**
   * extraire le répertoire à partir du nom de la classe
   */

    $file = LIB.'/'.$className.".php";

  	if (is_file($file)){
      		require_once($file);
  	}
} // fin de l'autoload

spl_autoload_register('autoload_defaut');

?>