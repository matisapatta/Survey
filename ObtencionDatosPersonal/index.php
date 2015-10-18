<!DOCTYPE html>
<html>

<head><title>Reading values into a table</title></head>
<body>

<!-- todo el código html sirve para visualizar en una tabla html los datos obtenidos-->
<div>
<table border="1">
    <tbody>

    <!--esto se utilioza de prueba de la clase DatosPersonal-->

        <?php

        include_once("DatosPersonal.php");
        $accesoDatosPersonal = new DatosPersonal();

        $datosEmpleados = $accesoDatosPersonal->get();

        /*OPCIONAL: esto se utiliza para visualizar en una tabla html los datos obtenidos*/
        foreach ($datosEmpleados as $row){
            echo'<tr>';
            foreach ($row as $item){
                echo '<td>'.$item."</td>";
            }
            echo'</tr>';
        }

        ?>
    </tbody>
</table>
</div>

</body>
</html>