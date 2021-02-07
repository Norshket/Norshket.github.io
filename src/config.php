<?php

define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT']);
define('PATH_SRC', ROOT_PATH . '/src/' );
define('PATH_TPL', ROOT_PATH . '/templates/' );


$base_file=[];//Массив файлов ядра которые нужно подключить к программе 

$base_file[] = PATH_SRC .'database.php';    // в этом файле хранятся конкретные данные для страниц сайта
$base_file[] = PATH_SRC .'model.php'; // в этом файле хранятся функции для поиска нужной информации в database
$base_file[] = PATH_SRC .'controller.php'; // этот файл отвечает за логику, связывает данные и шаблоны

foreach ($base_file as $key => $value){
  include_once ($value);
}



?>