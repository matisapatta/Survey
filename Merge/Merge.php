<?php

/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 22/10/2015
 * Time: 8:51 PM
 */

//This class obtains the employees data and the survey results data and merges it in a single array of dtoEmployeeSurvey objects
class Merge
{
    public function Merge_Data(){
        include_once("../EmployeesDataAccess/EmployeeData.php");
        include_once("../DBConnection/db.php");
        include_once("Employee.php");
        include_once("Survey.php");
        include_once("employee_survey.php");

        //Employees data
        $employeesDataAccess = new EmployeeData();
        $objEmployees = $employeesDataAccess->get();
        $objEmployees->Order_ID();
        $employees = $objEmployees->getEmployee();

        //Survey data
        $surveyDataAccess = new DBData();
        $objSurveys = $surveyDataAccess->get();
        $objSurveys->Order_Token();
        $surveys = $objSurveys->getSurveys();

        $employees_survey = new arrayEmployee_Survey();

        //Employees-Survey merging
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