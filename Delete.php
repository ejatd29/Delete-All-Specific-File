<?php
///SCANDIR INCULDE SUBFOLDER AND HIDDEN FOLDER
function Delete($dir, $filename){
  $ffs = glob($dir . '/{,.}*' , GLOB_ONLYDIR|GLOB_BRACE);
  foreach($ffs as $ff){
    if($ff != $dir . '/.' && $ff != $dir . '/..'){
      array_map('unlink', glob($ff .'/' . $filename));
      if(is_dir($ff)) Delete($ff, $filename);
    }
  }
}

///CALLING FUNCTION
///USE FULL PATH. 
Delete('PATH', 'FILENAME');
?>
