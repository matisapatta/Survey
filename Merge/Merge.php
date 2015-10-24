<?php

/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 22/10/2015
 * Time: 8:51 PM
 */
class Merge
{
    public function Merge_Data(){
        include_once("../ObtencionDatosPersonal/DatosPersonal.php");
        include_once("../ConexionBD/db.php");
        include_once("Employee.php");
        include_once("Survey.php");
        include_once("employee_survey.php");

        $accesoDatosPersonal = new DatosPersonal();
        $objEmployees = $accesoDatosPersonal->get();
        $objEmployees->Order_ID();
        $employees = $objEmployees->getEmployee();

        $accesoDatosDB = new DatosDB();
        $objSurveys = $accesoDatosDB->get();
        $objSurveys->Order_Token();
        $surveys = $objSurveys->getSurveys();

        $employees_survey = new arrayEmployee_Survey();

        foreach ($employees as $employee){
            foreach ($surveys as $survey){
                if ($employee->getID() == $survey->getToken()) {
                    $employee_survey = new dtoEmployee_Survey($survey , $employee);
                    $employees_survey->add_Employee_Survey($employee_survey);
                    break;
                }
            }
        }
        return $employees_survey;

    }

}