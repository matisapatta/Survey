<?php

//funcion para leer archivos, no sirve a futuro
function read($file){
	return file_get_contents($file, true);
}
//guarda en i lo que envian por GET a flt1
if (isset($_GET['flt1'])) {

//switch por opcion
//en realidad lo que hace es guardar en una variable los datos segun como debe leerlos
    switch ($_GET['flt1']) {
        case 1:
            $hint = read("archivo1.json");
            break;
        case 2:
            $hint = read("archivo2.json");
            break;
        case 3:
            $hint = read("archivo3.json");
            break;
        case 4:
            $hint = read("archivo4.json");
            break;
        default:
            $hint = "SIN FILTRO";
            break;
    }
}

// muestra por pantalla el resultado
// esto es muy importante porque lo que recibe el ajax es lo que mostraria por pantalla el php
echo $hint ;
?>