<?php

/**
 * Created by PhpStorm.
 * User: AlanNote
 * Date: 18/10/2015
 * Time: 18:37
 */
include_once("../Merge/Survey.php");
class DBData
{
    public $fileEmpleados = 'Survey1.csv';

    public function get(){
        /*este metodo obtiene los datos de los empleados desde un archivo csv y los guarda en un array de dos dimensiones
            donde cada fila tiene todos los datos del empleado*/
        $myfile = fopen($this->fileEmpleados, "r", 1) or die("No se puede abrir el archivo!");

        $arraydtoSurveys = new arraySurvey();

        while(!feof($myfile)) {
            $survey = new dtoSurvey();
            $survey->arraySurveyToDto(fgetcsv($myfile));
            $arraydtoSurveys->add_Survey($survey);
        }
        fclose($myfile);
        return $arraydtoSurveys;

    }
}

?>