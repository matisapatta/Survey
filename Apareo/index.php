<?php
/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 19/10/2015
 * Time: 1:01 AM
 */
?>

<html>
<body>
        <?php

        include_once("../ObtencionDatosPersonal/DatosPersonal.php");
        include_once("Empleados.php");
        $accesoDatosPersonal = new DatosPersonal();
        $arrayEmpleados = $accesoDatosPersonal->get();

        $encuesta = array(
            //    ID    Re1  Re2   Comentario
            array("58", "4", "5", "Sin Comentario"),
            array("69", "2", "1", "Todo Barbaro"),
            array("12", "3", "3", "Mucho trabajo")
        );

        $x = 0;
        $fh = fopen("datos_out.json", 'w')  or die("Error al abrir fichero de salida");
        foreach ($arrayEmpleados as $row){
            $empleado = new dtoEmpleados();
            $empleado->EmpleadosArrayToDto( $row );
            fwrite($fh, json_encode($empleado,JSON_UNESCAPED_UNICODE));
        }
        fclose($fh);

        ?>

</body>
</html>
