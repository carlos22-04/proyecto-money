
<?php
/**
 * [__autoload Archivo para cargar las clases]
 * @param  [type] $className [recibe nombre de la clase]
 * @return [type]            []
 */
function __autoload($className){
    require_once(ROOT."libs".DS.$className.".PHP");
}