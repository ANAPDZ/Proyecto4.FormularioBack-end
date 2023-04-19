<?php

function consultarDatos(String $tipo): array{
    try{
        require 'database.php';

        if($tipo === 'ems_plant'){
            $sql = "SELECT * FROM ems_planteles";
        } else{
            $sql = "SELECT * FROM uatam_ofed";
        }

        $consult = mysqli_query($db, $sql);

        $i=0;
        $datos = [];
        while ($row = mysqli_fetch_assoc($consult)) {
            $datos[$i]['id']= $row['ID'];
            $datos[$i]['nombre']= $row['NOMBRE'];
            $i++;
        }

        //var_dump($datos);
        return $datos;
    } catch (\Throwable $th) {
        var_dump($th);
    }
}