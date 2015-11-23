<?php

/**
 * Created by PhpStorm.
 * User: AlanNote
 * Date: 18/10/2015
 * Time: 18:37
 */
include_once("../Merge/Survey.php");

//This class obtains the survey results from a csv dump of the survey results database
class DBData
{
    //This is the location of the csv file that contains the survey results database's dump
    private $fileSurvey = "http://212.47.226.113/Survey.csv";

    //This function obtains the survey results data from a csv file and stores it in a dtoSurvey objects array.
    public function get(){
        $myfile = fopen($this->fileSurvey, "r", 1) or die("File could not open!");
        $arraySurveys = new arraySurvey();
        $SequenceSurvey = new SequenceSurvey(fgetcsv($myfile));

        while(!feof($myfile)) {
            $survey = new dtoSurvey();
            $survey->arraySurveyToDto(fgetcsv($myfile),$SequenceSurvey);
            $arraySurveys->add_Survey($survey);
        }
        fclose($myfile);
        return $arraySurveys;

    }
}

?>