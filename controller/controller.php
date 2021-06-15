<?php

require ("model/model.php");

$instance = new Sentencias();
$result = $instance->getEmpleados();

 



require ("view/view.php");



?>
