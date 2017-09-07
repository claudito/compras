<?php 

include'../../autoload.php';
include'../../session.php';

$message     =  new Message();
$funciones   =  new Funciones();


	$numero      	   =  $funciones->validar_xss($_POST['numero']);
	$id_usuario 	   =  $funciones->validar_xss($_POST['id_usuario']);
	$id_proveedor 	   =  $funciones->validar_xss($_POST['id_proveedor']);
	$fecha_inicio 	   =  $funciones->validar_xss($_POST['fecha_inicio']);
	$fecha_fin 		   =  $funciones->validar_xss($_POST['fecha_fin']);
	$comentario 	   =  $funciones->validar_xss($_POST['comentario']);
    $centro_costo 	   =  $funciones->validar_xss($_POST['centro_costo']);
	$ot 			   =  $funciones->validar_xss($_POST['ot']);
	$area 			   =  $funciones->validar_xss($_POST['area']);
	$tipo 			   =  $funciones->validar_xss($_POST['tipo']);
	$estado 		   =  $funciones->validar_xss($_POST['estado']);
	$prioridad 		   =  $funciones->validar_xss($_POST['prioridad']);
	$cotizacion        =  $funciones->validar_xss($_POST['cotizacion']);
	$condiciones_pago  =  $funciones->validar_xss($_POST['condiciones_pago']);
	$lugar_entrega 	   =  $funciones->validar_xss($_POST['lugar_entrega']);
	$modo_entrega 	   =  $funciones->validar_xss($_POST['modo_entrega']);


$objeto      =  new Comovc($numero,$id_usuario,$id_proveedor,$fecha_inicio,$fecha_fin,$comentario,$centro_costo,$ot,$area,$tipo,$estado,$prioridad,'',$cotizacion,$condiciones_pago,$lugar_entrega,$modo_entrega);
$valor       =  $objeto->actualizar();

if($valor=='ok')
{
  echo  $message->mensaje("Buen Trabajo","success","Registro Actualizado",2);
}
else
{
  echo  $message->mensaje("Error de Actualización","error","Consulte al área de Soporte",2);
}



 ?>