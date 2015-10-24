<?php

/**
 * Created by PhpStorm.
 * User: AlanNote
 * Date: 18/10/2015
 * Time: 18:37
 */
include_once("../Apareo/Encuesta.php");
class DatosDB
{
    public $fileEmpleados = 'tt.csv';

    public function get(){
        /*este metodo obtiene los datos de los empleados desde un archivo csv y los guarda en un array de dos dimensiones
            donde cada fila tiene todos los datos del empleado*/
        $myfile = fopen($this->fileEmpleados, "r", 1) or die("No se puede abrir el archivo!");

        $arraydtoPolls = new arrayPoll();

        while(!feof($myfile)) {
            $poll = new dtoEncuesta();
            $poll->arrayPollToDto(fgetcsv($myfile));
            $arraydtoPolls->agregar_poll($poll);
            $arraydtoPolls->guardarObjeto();
        }
        fclose($myfile);
        return $arraydtoPolls;

    }
}

?>