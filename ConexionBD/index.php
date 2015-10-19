<!DOCTYPE html>
<html>

<head><title>Leer valores</title></head>
<body>

<!-- todo el codigo html sirve para visualizar en una tabla html los datos obtenidos-->
<div>
    <table border="1">
        <tbody>

        <!--esto se utilioza de prueba de la clase DatosBD-->

        <?php

        include_once('db.php');
        $accesoDB = new DatosDB();

        $datosEncuesta = $accesoDB->get();

        /*OPCIONAL: esto se utiliza para visualizar en una tabla html los datos obtenidos*/
        foreach ($datosEncuesta as $row){
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
