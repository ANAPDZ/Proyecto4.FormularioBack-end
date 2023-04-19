<?php
require 'include/consult_serv.php';

$obtener_datos = consultarDatos('carreras');

echo json_encode($obtener_datos);