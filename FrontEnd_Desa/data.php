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
            /// aca crearia el archivo$hint = read("archivo1.json");
            $hint = 0;
            // se podria hacer con try y carch para captar el error
            break;
        case 2:
            /// aca crearia el archivo$hint = read("archivo2.json");
            $hint = 0;
           // se podria hacer con try y carch para captar el error            break;
        case 3:
            /// aca crearia el archivo$hint = read("archivo3.json");
            $hint = 0;
            // se podria hacer con try y carch para captar el error            break;
        case 4:
            /// aca crearia el archivo$hint = read("archivo4.json");
            $hint = 0;
            // se podria hacer con try y carch para captar el error            break;
        default:
            // Este seria un error
            $hint = "1";
            break;
    }
}

// muestra por pantalla el resultado
// esto es muy importante porque lo que recibe el ajax es lo que mostraria por pantalla el php
echo $hint ;
?>