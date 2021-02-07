<?php
if($_SERVER['SCRIPT_NAME'] =='/index.php'){
  print_page('/index.php',$database);  
}elseif($_SERVER['SCRIPT_NAME'] =='/bytovka.php'){
  print_page('/bytovka.php',$database);  
}elseif($_SERVER['SCRIPT_NAME'] =='/catalog.php'){
  print_page('/catalog.php',$database); 
}elseif($_SERVER['SCRIPT_NAME'] =='/delivery.php'){
  print_page('/delivery.php',$database); 
}elseif($_SERVER['SCRIPT_NAME'] =='/contacts.php'){
  print_page('/contacts.php',$database); 
}elseif($_SERVER['SCRIPT_NAME'] =='/price.php'){
  print_page('/price.php',$database); 
}elseif($_SERVER['SCRIPT_NAME'] =='/rent.php'){
  print_page('/rent.php',$database); 
}elseif($_SERVER['SCRIPT_NAME'] =='/photogallery.php'){
  print_page('/photogallery.php',$database); 
}

function print_page($url_key, &$database){
  $data = search_data($database , $url_key);
  if(!empty($data) && file_exists(PATH_TPL . $data['tpl'])){
    include_once(PATH_TPL . $data['tpl']);
  }else{
    die('В базе данных нет данных для вызываемой страницы');
  }
}
?>