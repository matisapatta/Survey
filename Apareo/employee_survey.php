<?php

/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 23/10/2015
 * Time: 11:46 PM
 */
include_once("Empleados.php");
include_once("Encuesta.php");

class dtoEmployee_Survey
{
    private $resp1;
    private $resp2;
    private $token;
    private $Email;
    private $Q1;
    private $Q2;
    private $Observation;
    private $Name;
    private $Current_Skill;
    private $Current_Seniority;
    private $Client_Tag;
    private $Client;
    private $Project_Tag;
    private $Project;
    private $starting_Date;
    private $end_Date;
    private $percentage;
    private $current_Location;
    private $current_TL;
    private $all_Locations;
    private $current_PMs;
    private $current_PA;
    private $pms_History;
    private $current_DDs;
    private $assignment_Type;
    private $comments;
    private $Project_Studio;
    private $Studio;
    private $Office;
    private $dds_History;
    private $business_Unit_Tag;
    private $business_Unit_Name;
    private $replacement_reason;
    private $organizational_Unit_Type;
    private $billable;
    private $Organizational_Unit_de_SAP;
    private $Organizational_Unit_SAP_last;
    private $Entry_Date;

    function __construct(dtoEncuesta $survey, dtoEmpleados $employee) {
        $this->setResp1( $survey->getresp1() );
        $this->setresp2($survey->getresp2());
        $this->settoken($survey->gettoken());
        $this->setEmail($employee->getEmail());
        $this->setQ1($employee->getQ1());
        $this->setQ2($employee->getQ2());
        $this->setObservation($employee->getObservation());
        $this->setName($employee->getName());
        $this->setCurrentSkill($employee->getCurrentSkill());
        $this->setCurrentSeniority($employee->getCurrentSeniority());
        $this->setClientTag($employee->getClientTag());
        $this->setClient($employee->getClient());
        $this->setProjectTag($employee->getProjectTag());
        $this->setProject($employee->getProject());
        $this->setstartingDate($employee->getstartingDate());
        $this->setendDate($employee->getendDate());
        $this->setpercentage($employee->getpercentage());
        $this->setcurrentLocation($employee->getcurrentLocation());
        $this->setcurrentTL($employee->getcurrentTL());
        $this->setallLocations($employee->getallLocations());
        $this->setcurrentPMs($employee->getcurrentPMs());
        $this->setcurrentPA($employee->getcurrentPA());
        $this->setpmsHistory($employee->getpmsHistory());
        $this->setcurrentDDs($employee->getcurrentDDs());
        $this->setassignmentType($employee->getassignmentType());
        $this->setcomments($employee->getcomments());
        $this->setProjectStudio($employee->getProjectStudio());
        $this->setStudio($employee->getStudio());
        $this->setOffice($employee->getOffice());
        $this->setddsHistory($employee->getddsHistory());
        $this->setbusinessUnitTag($employee->getbusinessUnitTag());
        $this->setbusinessUnitName($employee->getbusinessUnitName());
        $this->setreplacementreason($employee->getreplacementreason());
        $this->setorganizationalUnitType($employee->getorganizationalUnitType());
        $this->setbillable($employee->getbillable());
        $this->setOrganizationalUnitdeSAP($employee->getOrganizationalUnitdeSAP());
        $this->setOrganizationalUnitSAPlast($employee->getOrganizationalUnitSAPlast());
        $this->setEntryDate($employee->getEntryDate());

    }

    public function getResp1()
    {
        return $this->resp1;
    }
    public function setResp1($resp1)
    {
        $this->resp1 = $resp1;
    }
    public function getResp2()
    {
        return $this->resp2;
    }
    public function setResp2($resp2)
    {
        $this->resp2 = $resp2;
    }
    public function getToken()
    {
        return $this->token;
    }
    public function setToken($token)
    {
        $this->token = $token;
    }
    public function getAllLocations()
    {
        return $this->all_Locations;
    }
    public function setAllLocations($all_Locations)
    {
        $this->all_Locations = $all_Locations;
    }
    public function getAssignmentType()
    {
        return $this->assignment_Type;
    }/**
 * @param mixed $assignment_Type
 */
    public function setAssignmentType($assignment_Type)
    {
        $this->assignment_Type = $assignment_Type;
    }
    public function getBillable()
    {
        return $this->billable;
    }/**
 * @param mixed $billable
 */
    public function setBillable($billable)
    {
        $this->billable = $billable;
    }
    public function getBusinessUnitName()
    {
        return $this->business_Unit_Name;
    }/**
 * @param mixed $business_Unit_Name
 */
    public function setBusinessUnitName($business_Unit_Name)
    {
        $this->business_Unit_Name = $business_Unit_Name;
    }
    public function getBusinessUnitTag()
    {
        return $this->business_Unit_Tag;
    }/**
 * @param mixed $business_Unit_Tag
 */
    public function setBusinessUnitTag($business_Unit_Tag)
    {
        $this->business_Unit_Tag = $business_Unit_Tag;
    }
    public function getClient()
    {
        return $this->Client;
    }/**
 * @param mixed $Client
 */
    public function setClient($Client)
    {
        $this->Client = $Client;
    }
    public function getClientTag()
    {
        return $this->Client_Tag;
    }/**
 * @param mixed $Client_Tag
 */
    public function setClientTag($Client_Tag)
    {
        $this->Client_Tag = $Client_Tag;
    }
    public function getComments()
    {
        return $this->comments;
    }/**
 * @param mixed $comments
 */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }
    public function getCurrentDDs()
    {
        return $this->current_DDs;
    }/**
 * @param mixed $current_DDs
 */
    public function setCurrentDDs($current_DDs)
    {
        $this->current_DDs = $current_DDs;
    }
    public function getCurrentLocation()
    {
        return $this->current_Location;
    }/**
 * @param mixed $current_Location
 */
    public function setCurrentLocation($current_Location)
    {
        $this->current_Location = $current_Location;
    }
    public function getCurrentPA()
    {
        return $this->current_PA;
    }/**
 * @param mixed $current_PA
 */
    public function setCurrentPA($current_PA)
    {
        $this->current_PA = $current_PA;
    }
    public function getCurrentPMs()
    {
        return $this->current_PMs;
    }/**
 * @param mixed $current_PMs
 */
    public function setCurrentPMs($current_PMs)
    {
        $this->current_PMs = $current_PMs;
    }
    public function getCurrentSeniority()
    {
        return $this->Current_Seniority;
    }/**
 * @param mixed $Current_Seniority
 */
    public function setCurrentSeniority($Current_Seniority)
    {
        $this->Current_Seniority = $Current_Seniority;
    }
    public function getCurrentSkill()
    {
        return $this->Current_Skill;
    }/**
 * @param mixed $Current_Skill
 */
    public function setCurrentSkill($Current_Skill)
    {
        $this->Current_Skill = $Current_Skill;
    }
    public function getCurrentTL()
    {
        return $this->current_TL;
    }/**
 * @param mixed $current_TL
 */
    public function setCurrentTL($current_TL)
    {
        $this->current_TL = $current_TL;
    }
    public function getDdsHistory()
    {
        return $this->dds_History;
    }/**
 * @param mixed $dds_History
 */
    public function setDdsHistory($dds_History)
    {
        $this->dds_History = $dds_History;
    }
    public function getEmail()
    {
        return $this->Email;
    }/**
 * @param mixed $Email
 */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }
    public function getEndDate()
    {
        return $this->end_Date;
    }/**
 * @param mixed $end_Date
 */
    public function setEndDate($end_Date)
    {
        $this->end_Date = $end_Date;
    }
    public function getEntryDate()
    {
        return $this->Entry_Date;
    }/**
 * @param mixed $Entry_Date
 */
    public function setEntryDate($Entry_Date)
    {
        $this->Entry_Date = $Entry_Date;
    }
    public function getID()
    {
        return $this->ID;
    }/**
 * @param mixed $ID
 */
    public function setID($ID)
    {
        $this->ID = $ID;
    }
    public function getName()
    {
        return $this->Name;
    }/**
 * @param mixed $Name
 */
    public function setName($Name)
    {
        $this->Name = $Name;
    }
    public function getObservation()
    {
        return $this->Observation;
    }/**
 * @param mixed $Observation
 */
    public function setObservation($Observation)
    {
        $this->Observation = $Observation;
    }
    public function getOffice()
    {
        return $this->Office;
    }/**
 * @param mixed $Office
 */
    public function setOffice($Office)
    {
        $this->Office = $Office;
    }
    public function getOrganizationalUnitDeSAP()
    {
        return $this->Organizational_Unit_de_SAP;
    }/**
 * @param mixed $Organizational_Unit_de_SAP
 */
    public function setOrganizationalUnitDeSAP($Organizational_Unit_de_SAP)
    {
        $this->Organizational_Unit_de_SAP = $Organizational_Unit_de_SAP;
    }
    public function getOrganizationalUnitSAPLast()
    {
        return $this->Organizational_Unit_SAP_last;
    }/**
 * @param mixed $Organizational_Unit_SAP_last
 */
    public function setOrganizationalUnitSAPLast($Organizational_Unit_SAP_last)
    {
        $this->Organizational_Unit_SAP_last = $Organizational_Unit_SAP_last;
    }
    public function getOrganizationalUnitType()
    {
        return $this->organizational_Unit_Type;
    }/**
 * @param mixed $organizational_Unit_Type
 */
    public function setOrganizationalUnitType($organizational_Unit_Type)
    {
        $this->organizational_Unit_Type = $organizational_Unit_Type;
    }
    public function getPercentage()
    {
        return $this->percentage;
    }/**
 * @param mixed $percentage
 */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
    }
    public function getPmsHistory()
    {
        return $this->pms_History;
    }/**
 * @param mixed $pms_History
 */
    public function setPmsHistory($pms_History)
    {
        $this->pms_History = $pms_History;
    }
    public function getProject()
    {
        return $this->Project;
    }/**
 * @param mixed $Project
 */
    public function setProject($Project)
    {
        $this->Project = $Project;
    }
    public function getProjectStudio()
    {
        return $this->Project_Studio;
    }/**
 * @param mixed $Project_Studio
 */
    public function setProjectStudio($Project_Studio)
    {
        $this->Project_Studio = $Project_Studio;
    }
    public function getProjectTag()
    {
        return $this->Project_Tag;
    }/**
 * @param mixed $Project_Tag
 */
    public function setProjectTag($Project_Tag)
    {
        $this->Project_Tag = $Project_Tag;
    }
    public function getQ1()
    {
        return $this->Q1;
    }/**
 * @param mixed $Q1
 */
    public function setQ1($Q1)
    {
        $this->Q1 = $Q1;
    }
    public function getQ2()
    {
        return $this->Q2;
    }/**
 * @param mixed $Q2
 */
    public function setQ2($Q2)
    {
        $this->Q2 = $Q2;
    }
    public function getReplacementReason()
    {
        return $this->replacement_reason;
    }/**
 * @param mixed $replacement_reason
 */
    public function setReplacementReason($replacement_reason)
    {
        $this->replacement_reason = $replacement_reason;
    }
    public function getStartingDate()
    {
        return $this->starting_Date;
    }/**
 * @param mixed $starting_Date
 */
    public function setStartingDate($starting_Date)
    {
        $this->starting_Date = $starting_Date;
    }
    public function getStudio()
    {
        return $this->Studio;
    }/**
 * @param mixed $Studio
 */
    public function setStudio($Studio)
    {
        $this->Studio = $Studio;
    }
}

class arrayEmployee_Survey
{
    private $Employees_Survey = array();

    public function guardarObjeto()
    {
        array_push($this->Employees_Survey , $this->newEmployee_Survey);
    }

    public function getEmployees_Survey()
    {
        return $this->Employees_Survey;
    }
    public function add_Employee_Survey(dtoEmployee_Survey $employee_survey)
    {
        $this->newEmployee_Survey = $employee_survey;
    }
    public function generar_Json(){
        $fh = fopen("datos_out.json", 'w')  or die("Error al abrir fichero de salida");
        // PARA GENERAR JSON BIEN LAS PROPIEDADES DEBEN SER PUBLICAS!!!
        foreach($this->Employees_Survey as $employee_survey)
        {
            fwrite($fh, json_encode($employee_survey,JSON_UNESCAPED_UNICODE));
        }
        fclose($fh);
    }
}