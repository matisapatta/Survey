<?php

/**
 * Created by PhpStorm.
 * User: AlanNote
 * Date: 18/10/2015
 * Time: 18:37
 */
class DatosDB
{
    public $fileEmpleados = 'tt.csv';

    public function get(){
        echo 'hola';
        /*este metodo obtiene los datos de los empleados desde un archivo csv y los guarda en un array de dos dimensiones
            donde cada fila tiene todos los datos del empleado*/
        $myfile = fopen($this->fileEmpleados, "r") or die("No se puede abrir el archivo!");
        $datosEmpleados = [];
        while(!feof($myfile)) {
            $datosEmpleados[] = fgetcsv($myfile);
        }
        fclose($myfile);
        echo $datosEmpleados;
        return $datosEmpleados;

    }
}

?>