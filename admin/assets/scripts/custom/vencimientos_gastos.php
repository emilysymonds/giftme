<?php
require_once '../../../core/init.php';

$gastos = DB::getInstance()->query("SELECT * FROM gasto WHERE estado_gasto<>2 AND cliente=".Session::get('empresa'))->results();

$arr = array();
foreach($gastos as $gasto){
   array_push($arr, array( 
         'title'=>$gasto->concepto,
         'start'=>$gasto->vto,  
         'end'=>$gasto->vto
      ));
}
echo json_encode($arr);
?>