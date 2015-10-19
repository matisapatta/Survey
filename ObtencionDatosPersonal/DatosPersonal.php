<?php

/**
 * Created by PhpStorm.
 * User: AlanNote
 * Date: 18/10/2015
 * Time: 18:37
 */
class DatosPersonal
{
    public $fileEmpleados = "example_data.csv";

    public function get(){
    /*este metodo obtiene los datos de los empleados desde un archivo csv y los guarda en un array de dos dimensiones
        donde cada fila tiene todos los datos del empleado*/
        $myfile = fopen($this->fileEmpleados, "r", 1) or die("No se puede abrir el archivo!");
        $datosEmpleados = [];
        while(!feof($myfile)) {
            $datosEmpleados[] = fgetcsv($myfile);
        }
        fclose($myfile);

        return $datosEmpleados;
    }

}

?>