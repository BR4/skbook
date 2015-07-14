<?php 
require_once('model/Conexion.php');
require_once('controller/Query.php');
include_once ('model/Book.php');

$actionActive='index';
if(isset($_POST['actionActive'])){
	$actionActive=$_POST['actionActive'];
}

$view= new stdClass();  
$view->disableLayout=false; 

switch ($actionActive){
        
        case 'index':
        $view->label='&nbsp;';
        $view->book=Book::getAllBook();
        $view->contentTemplate="view/book/frmList.php";
        break;
}

if ($view->disableLayout==true){
	include_once($view->contentTemplate);
}else{
	include_once ('view/main.php');
}
?>