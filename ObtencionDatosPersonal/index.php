<!DOCTYPE html>
<html>

<head><title>Reading values into a table</title></head>
<body>

<!-- todo el código html sirve para visualizar en una tabla html los datos obtenidos-->
<div>
<table border="1">
    <tbody>

    <!--aca comienza el codigo PHP donde se obtienen los datos desde el archivo-->

        <?php
        /*este modulo obtiene los datos de los empleados desde un archivo csv y los guarda en un array de dos dimensiones
        donde cada fila tiene todos los datos del empleado*/
        $myfile = fopen("example_data.csv", "r") or die("No se puede abrir el archivo!");

        while(!feof($myfile)) {
            $datosEmpleados[] = fgetcsv($myfile);
        }
        fclose($myfile);

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