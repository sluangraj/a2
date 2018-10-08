<?php
function autoloadApplication($className) {
  $fileName = 'application/'.$className.'.class.php';
  //puttingis_readable instead of file_exists
  //and is_readable also sees if file exists
  if(is_readable($fileName)) {
    require $fileName;
  }
}
function autoloadModel($className) {
  $fileName = 'application/models/' . $className . '.class.php';
  if(is_readable($fileName)) {
    require $fileName;
  }
}
function autoloadController($className) {
  $fileName = 'application/controllers/'.$className .'.class.php';
  if(is_readable($fileName)) {
    require $fileName;
  }
}
spl_autoload_register('autoloadApplication');
spl_autoload_register('autoloadModel');
spl_autoload_register('autoloadController');
new controller();
