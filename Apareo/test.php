<?php
/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 17/10/2015
 * Time: 12:45 AM
 */
?>
<!DOCTYPE html>
<html>

<head><title>Reading values into a table</title></head>
<body>
<div>
    <table border="1">
        <?php

        include_once("../ObtencionDatosPersonal/DatosPersonal.php");


        $accesoDatosPersonal = new DatosPersonal();

        $datosEmpleados = $accesoDatosPersonal->get();

        $encuesta = array(
            //    ID    Re1  Re2   Comentario
            array("58", "4", "5", "Sin Comentario"),
            array("69", "2", "1", "Todo Barbaro"),
            array("12", "3", "3", "Mucho trabajo")
        );


        /*$empleados = array(
            //    ID    Re1  Re2   Comentario
            array(  "user1@mail" , "2" , "2" , "xxxxxxxxxxxxx" , "User1" , "1" , "Web Mobile Developer" , "SSr" , "CLI1" , "clien1" , "CLA055" , "project1" , "06/08/2015" , "12/31/2020" , "100" , "AR/CB1" , "Pepe Sanchez1" , "AR/CB1" , "Pepa Gomez1" , "Pepo Alberto1" , "Pato Alberti1" , "Pepo Grosso1" , "ASSIGNED" , "" , "Studio1" , "Studio1" , "AR/CBA/oficina1" , "Pepe gomez1" , "BUSST1" , "Bussiness1" , "Position closed" , "Unit1" , "No" , "Dev123" , "Development" , "08/25/2014" ),
            array( "user2@mail" , "4" , "5" , "xxxxxxxxxxxxx" , "User2" , "2" , "SQL Developer" , "Jr" , "CLI2" , "clien2" , "CLA056" , "project2" , "06/08/2015" , "12/31/2020" , "100" , "AR/CB2" , "Pepe Sanchez2" , "AR/CB2" , "Pepa Gomez2" , "Pepo Alberto2" , "Pato Alberti2" , "Pepo Grosso2" , "ASSIGNED" , "" , "Studio2" , "Studio2" , "AR/CBA/oficina2" , "Pepe gomez2" , "BUSST2" , "Bussiness2" , "Position closed" , "Unit2" , "No" , "Dev124" , "Development" , "08/25/2014" ),
            array( "user3@mail" , "5" , "5" , "xxxxxxxxxxxxx" , "User3" , "3" , "Business Analyst" , "Sr" , "CLI3" , "clien3" , "CLA057" , "project3" , "06/08/2015" , "12/31/2020" , "45" , "AR/CB3" , "Pepe Sanchez3" , "AR/CB3" , "Pepa Gomez3" , "Pepo Alberto3" , "Pato Alberti3" , "Pepo Grosso3" , "ASSIGNED" , "" , "Studio3" , "Studio2" , "AR/CBA/oficina3" , "Pepe gomez3" , "BUSST3" , "Bussiness3" , "Position closed" , "Unit3" , "No" , "Dev125" , "Development" , "08/25/2014" ),
            array( "user4@mail" , "5" , "2" , "xxxxxxxxxxxxx" , "User4" , "4" , "UX" , "Arq" , "CLI4" , "clien4" , "CLA058" , "project4" , "06/08/2015" , "12/31/2020" , "100" , "AR/CB4" , "Pepe Sanchez4" , "AR/CB4" , "Pepa Gomez4" , "Pepo Alberto4" , "Pato Alberti4" , "Pepo Grosso4" , "ASSIGNED" , "" , "Studio4" , "Studio4" , "AR/CBA/oficina4" , "Pepe gomez4" , "BUSST4" , "Bussiness4" , "Position closed" , "Unit4" , "No" , "Dev126" , "Development" , "08/25/2014" ),
            array( "user5@mail" , "1" , "3" , "xxxxxxxxxxxxx" , "User5" , "5" , "Java Developer" , "Jr. adv" , "CLI5" , "clien5" , "CLA059" , "project5" , "06/08/2015" , "12/31/2020" , "50" , "AR/CB5" , "Pepe Sanchez5" , "AR/CB5" , "Pepa Gomez5" , "Pepo Alberto5" , "Pato Alberti5" , "Pepo Grosso5" , "ASSIGNED" , "" , "Studio5" , "Studio3" , "AR/CBA/oficina5" , "Pepe gomez5" , "BUSST5" , "Bussiness5" , "Position closed" , "Unit5" , "No" , "Dev127" , "Development" , "08/25/2014"  ),

        );*/

        //print_r(array_values($empleados));

        foreach ($datosEmpleados as $row){
            echo'<tr>';
            foreach ($row as $item){
                echo '<td>'.$item."</td>";
            }
            echo'</tr>';
        }


        ?>

    </table>
</div>

</body>
</html>
