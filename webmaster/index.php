<?php 
require_once('model/Conexion.php');
require_once('controller/Query.php');
include_once ('model/Book.php');

$action='index';
if(isset($_POST['action'])){
	$action=$_POST['action'];
}

$view= new stdClass();  
$view->disableLayout=false; 

switch ($action){
        
        case 'index':
    //echo "<script>alert('En index');</script>";
        $view->label='&nbsp;';
        $view->book=Book::getAllBook();
        $view->contentTemplate="view/book/frmList.php";
        break;
    
        case 'addBook':
       // echo "<script>alert('En frm');</script>";
        $view->book=new Book();
        $view->label='<p id="tituloAgregar">Nuevo usuario, para completar la operación llene el formulario.</p>';
        $view->disableLayout=true;
        $view->contentTemplate="view/book/frmAddBook.php";
        break;
}

if ($view->disableLayout==true){
	include_once($view->contentTemplate);
}else{
	include_once ('view/main.php');
}
?>