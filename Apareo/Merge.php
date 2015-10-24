<?php

/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 22/10/2015
 * Time: 8:51 PM
 */
class Merge
{
    public function Aparear(){
        include_once("../ObtencionDatosPersonal/DatosPersonal.php");
        include_once("../ConexionBD/db.php");
        include_once("Empleados.php");
        include_once("Encuesta.php");
        include_once("employee_survey.php");

        $accesoDatosPersonal = new DatosPersonal();
        $objEmployees = $accesoDatosPersonal->get();
        $objEmployees->Ordenar_ID();
        $employees = $objEmployees->getEmpleados();

        $accesoDatosDB = new DatosDB();
        $objPolls = $accesoDatosDB->get();
        $polls = $objPolls->getPolls();
        $objPolls->Order_Token();

        $employees_survey = new arrayEmployee_Survey();

        foreach ($employees as $employee){
            foreach ($polls as $survey){
                if ($employee->getID() == $survey->getToken()) {
                    $employee_survey = new dtoEmployee_Survey($survey , $employee);
                    $employees_survey->add_Employee_Survey($employee_survey);
                    $employees_survey->guardarObjeto();
                    break;
                }
            }
        }
        return $employees_survey;

    }

}