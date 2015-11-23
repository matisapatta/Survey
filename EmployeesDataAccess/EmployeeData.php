<?php

/**
 * Created by PhpStorm.
 * User: AlanNote
 * Date: 18/10/2015
 * Time: 18:37
 */
include_once("../Merge/Employee.php");

//This class obtains the employees data from a csv dump of the employees database
class EmployeeData
{
    //This is the location of the csv file that contains the employees database's dump
    public $fileEmployees = "example_data.csv";

    //This function obtains the employees data from a csv file and stores it in a dtoEmployee objects array.
    public function get(){
        $myfile = fopen($this->fileEmployees, "r", 1) or die("No se puede abrir el archivo!");
        $arrayEmployees = new arrayEmployee();
        $orderEmployee = new orderEmployee(fgetcsv($myfile));

        while(!feof($myfile)) {
            $employee = new dtoEmployee();
            $employee->ArrayEmployeeToDto(fgetcsv($myfile), $orderEmployee);
            $arrayEmployees->addEmployee($employee);
        }
        fclose($myfile);
        return $arrayEmployees;
    }

}

?>