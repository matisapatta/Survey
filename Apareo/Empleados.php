<?php

/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 18/10/2015
 * Time: 11:56 PM
 */
class dtoEmpleados
{
    private $Email;
    private $Q1;
    private $Q2;
    private $Observation;
    private $Name;
    private $ID;
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
    public function EmpleadosArrayToDto( $row ){
        $ordenEmpleado = new ordenEmpleado();
        for($x=0; $x < $ordenEmpleado->getMax(); $x++ )
        {
            switch($x){
                case $ordenEmpleado->getEmail():
                    $this->setEmail($row[$x]);
                    break;
                case $ordenEmpleado->getQ1():
                    $this->setQ1($row[$x]);
                    break;
                case $ordenEmpleado->getQ2():
                    $this->setQ2($row[$x]);
                    break;
                case $ordenEmpleado->getObservation();
                    $this->setObservation($row[$x]);
                    break;
                case $ordenEmpleado->getName():
                    $this->setName($row[$x]);
                    break;
                case $ordenEmpleado->getID():
                    $this->setID($row[$x]);
                    break;
                case $ordenEmpleado->getCurrentSkill():
                    $this->setCurrentSkill($row[$x]);
                    break;
                case $ordenEmpleado->getCurrentSeniority():
                    $this->setCurrentSeniority($row[$x]);
                    break;
                case $ordenEmpleado->getClientTag():
                    $this->setClientTag($row[$x]);
                    break;
                case $ordenEmpleado->getClient():
                    $this->setClient($row[$x]);
                    break;
                case $ordenEmpleado->getProjectTag():
                    $this->setProjectTag($row[$x]);
                    break;
                case $ordenEmpleado->getProject():
                    $this->setProject($row[$x]);
                    break;
                case $ordenEmpleado->getstartingDate():
                    $this->setstartingDate($row[$x]);
                    break;
                case $ordenEmpleado->getendDate():
                    $this->setendDate($row[$x]);
                    break;
                case $ordenEmpleado->getpercentage():
                    $this->setPercentage($row[$x]);
                    break;
                case $ordenEmpleado->getcurrentLocation():
                    $this->setcurrentLocation($row[$x]);
                    break;
                case $ordenEmpleado->getcurrentTL():
                    $this->setcurrentTL($row[$x]);
                    break;
                case $ordenEmpleado->getallLocations():
                    $this->setallLocations($row[$x]);
                    break;
                case $ordenEmpleado->getcurrentPMs():
                    $this->setcurrentPMs($row[$x]);
                    break;
                case $ordenEmpleado->getcurrentPA():
                    $this->setcurrentPA($row[$x]);
                    break;
                case $ordenEmpleado->getpmsHistory():
                    $this->setpmsHistory($row[$x]);
                    break;
                case $ordenEmpleado->getcurrentDDs():
                    $this->setcurrentDDs($row[$x]);
                    break;
                case $ordenEmpleado->getassignmentType():
                    $this->setassignmentType($row[$x]);
                    break;
                case $ordenEmpleado->getcomments():
                    $this->setcomments($row[$x]);
                    break;
                case $ordenEmpleado->getProjectStudio():
                    $this->setProjectStudio($row[$x]);
                    break;
                case $ordenEmpleado->getStudio():
                    $this->setStudio($row[$x]);
                    break;
                case $ordenEmpleado->getOffice():
                    $this->setOffice($row[$x]);
                    break;
                case $ordenEmpleado->getddsHistory():
                    $this->setddsHistory($row[$x]);
                    break;
                case $ordenEmpleado->getbusinessUnitTag():
                    $this->setbusinessUnitTag($row[$x]);
                    break;
                case $ordenEmpleado->getbusinessUnitName():
                    $this->setbusinessUnitName($row[$x]);
                    break;
                case $ordenEmpleado->getreplacementreason():
                    $this->setreplacementreason($row[$x]);
                    break;
                case $ordenEmpleado->getorganizationalUnitType():
                    $this->setorganizationalUnitType($row[$x]);
                    break;
                case $ordenEmpleado->getbillable():
                    $this->setbillable($row[$x]);
                    break;
                case $ordenEmpleado->getOrganizationalUnitdeSAP():
                    $this->setOrganizationalUnitdeSAP($row[$x]);
                    break;
                case $ordenEmpleado->getOrganizationalUnitSAPlast():
                    $this->setOrganizationalUnitSAPlast($row[$x]);
                    break;
                case $ordenEmpleado->getEntryDate():
                    $this->setEntryDate($row[$x]);
                    break;
            }
        }
    }
}

class ordenEmpleado
{
    private $Email = 0 ;
    private $Q1 = 1 ;
    private $Q2 = 2 ;
    private $Observation = 3 ;
    private $Name = 4 ;
    private $ID = 5 ;
    private $Current_Skill = 6 ;
    private $Current_Seniority = 7 ;
    private $Client_Tag = 8 ;
    private $Client = 9 ;
    private $Project_Tag = 10 ;
    private $Project = 11 ;
    private $starting_Date = 12 ;
    private $end_Date = 13 ;
    private $percentage = 14 ;
    private $current_Location = 15 ;
    private $current_TL = 16 ;
    private $all_Locations = 17 ;
    private $current_PMs = 18 ;
    private $current_PA = 19 ;
    private $pms_History = 20 ;
    private $current_DDs = 21 ;
    private $assignment_Type = 22 ;
    private $comments = 23 ;
    private $Project_Studio = 24 ;
    private $Studio = 25 ;
    private $Office = 26 ;
    private $dds_History = 27 ;
    private $business_Unit_Tag = 28 ;
    private $business_Unit_Name = 29 ;
    private $replacement_reason = 30 ;
    private $organizational_Unit_Type = 31 ;
    private $billable = 32 ;
    private $Organizational_Unit_de_SAP = 33 ;
    private $Organizational_Unit_SAP_last = 34 ;
    private $Entry_Date = 35 ;
    private $Max = 36;

    /**
     * @return int
     */
    public function getAllLocations()
    {
        return $this->all_Locations;
    }

    /**
     * @param int $all_Locations
     */
    public function setAllLocations($all_Locations)
    {
        $this->all_Locations = $all_Locations;
    }

    /**
     * @return int
     */
    public function getAssignmentType()
    {
        return $this->assignment_Type;
    }

    /**
     * @param int $assignment_Type
     */
    public function setAssignmentType($assignment_Type)
    {
        $this->assignment_Type = $assignment_Type;
    }

    /**
     * @return int
     */
    public function getBillable()
    {
        return $this->billable;
    }

    /**
     * @param int $billable
     */
    public function setBillable($billable)
    {
        $this->billable = $billable;
    }

    /**
     * @return int
     */
    public function getBusinessUnitName()
    {
        return $this->business_Unit_Name;
    }

    /**
     * @param int $business_Unit_Name
     */
    public function setBusinessUnitName($business_Unit_Name)
    {
        $this->business_Unit_Name = $business_Unit_Name;
    }

    /**
     * @return int
     */
    public function getBusinessUnitTag()
    {
        return $this->business_Unit_Tag;
    }

    /**
     * @param int $business_Unit_Tag
     */
    public function setBusinessUnitTag($business_Unit_Tag)
    {
        $this->business_Unit_Tag = $business_Unit_Tag;
    }

    /**
     * @return int
     */
    public function getClient()
    {
        return $this->Client;
    }

    /**
     * @param int $Client
     */
    public function setClient($Client)
    {
        $this->Client = $Client;
    }

    /**
     * @return int
     */
    public function getClientTag()
    {
        return $this->Client_Tag;
    }

    /**
     * @param int $Client_Tag
     */
    public function setClientTag($Client_Tag)
    {
        $this->Client_Tag = $Client_Tag;
    }

    /**
     * @return int
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param int $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return int
     */
    public function getCurrentDDs()
    {
        return $this->current_DDs;
    }

    /**
     * @param int $current_DDs
     */
    public function setCurrentDDs($current_DDs)
    {
        $this->current_DDs = $current_DDs;
    }

    /**
     * @return int
     */
    public function getCurrentLocation()
    {
        return $this->current_Location;
    }

    /**
     * @param int $current_Location
     */
    public function setCurrentLocation($current_Location)
    {
        $this->current_Location = $current_Location;
    }

    /**
     * @return int
     */
    public function getCurrentPA()
    {
        return $this->current_PA;
    }

    /**
     * @param int $current_PA
     */
    public function setCurrentPA($current_PA)
    {
        $this->current_PA = $current_PA;
    }

    /**
     * @return int
     */
    public function getCurrentPMs()
    {
        return $this->current_PMs;
    }

    /**
     * @param int $current_PMs
     */
    public function setCurrentPMs($current_PMs)
    {
        $this->current_PMs = $current_PMs;
    }

    /**
     * @return int
     */
    public function getCurrentSeniority()
    {
        return $this->Current_Seniority;
    }

    /**
     * @param int $Current_Seniority
     */
    public function setCurrentSeniority($Current_Seniority)
    {
        $this->Current_Seniority = $Current_Seniority;
    }

    /**
     * @return int
     */
    public function getCurrentSkill()
    {
        return $this->Current_Skill;
    }

    /**
     * @param int $Current_Skill
     */
    public function setCurrentSkill($Current_Skill)
    {
        $this->Current_Skill = $Current_Skill;
    }

    /**
     * @return int
     */
    public function getCurrentTL()
    {
        return $this->current_TL;
    }

    /**
     * @param int $current_TL
     */
    public function setCurrentTL($current_TL)
    {
        $this->current_TL = $current_TL;
    }

    /**
     * @return int
     */
    public function getDdsHistory()
    {
        return $this->dds_History;
    }

    /**
     * @param int $dds_History
     */
    public function setDdsHistory($dds_History)
    {
        $this->dds_History = $dds_History;
    }

    /**
     * @return int
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param int $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return int
     */
    public function getEndDate()
    {
        return $this->end_Date;
    }

    /**
     * @param int $end_Date
     */
    public function setEndDate($end_Date)
    {
        $this->end_Date = $end_Date;
    }

    /**
     * @return int
     */
    public function getEntryDate()
    {
        return $this->Entry_Date;
    }

    /**
     * @param int $Entry_Date
     */
    public function setEntryDate($Entry_Date)
    {
        $this->Entry_Date = $Entry_Date;
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return int
     */
    public function getMax()
    {
        return $this->Max;
    }

    /**
     * @param int $Max
     */
    public function setMax($Max)
    {
        $this->Max = $Max;
    }

    /**
     * @return int
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param int $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return int
     */
    public function getObservation()
    {
        return $this->Observation;
    }

    /**
     * @param int $Observation
     */
    public function setObservation($Observation)
    {
        $this->Observation = $Observation;
    }

    /**
     * @return int
     */
    public function getOffice()
    {
        return $this->Office;
    }

    /**
     * @param int $Office
     */
    public function setOffice($Office)
    {
        $this->Office = $Office;
    }

    /**
     * @return int
     */
    public function getOrganizationalUnitDeSAP()
    {
        return $this->Organizational_Unit_de_SAP;
    }

    /**
     * @param int $Organizational_Unit_de_SAP
     */
    public function setOrganizationalUnitDeSAP($Organizational_Unit_de_SAP)
    {
        $this->Organizational_Unit_de_SAP = $Organizational_Unit_de_SAP;
    }

    /**
     * @return int
     */
    public function getOrganizationalUnitSAPLast()
    {
        return $this->Organizational_Unit_SAP_last;
    }

    /**
     * @param int $Organizational_Unit_SAP_last
     */
    public function setOrganizationalUnitSAPLast($Organizational_Unit_SAP_last)
    {
        $this->Organizational_Unit_SAP_last = $Organizational_Unit_SAP_last;
    }

    /**
     * @return int
     */
    public function getOrganizationalUnitType()
    {
        return $this->organizational_Unit_Type;
    }

    /**
     * @param int $organizational_Unit_Type
     */
    public function setOrganizationalUnitType($organizational_Unit_Type)
    {
        $this->organizational_Unit_Type = $organizational_Unit_Type;
    }

    /**
     * @return int
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @param int $percentage
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
    }

    /**
     * @return int
     */
    public function getPmsHistory()
    {
        return $this->pms_History;
    }

    /**
     * @param int $pms_History
     */
    public function setPmsHistory($pms_History)
    {
        $this->pms_History = $pms_History;
    }

    /**
     * @return int
     */
    public function getProject()
    {
        return $this->Project;
    }

    /**
     * @param int $Project
     */
    public function setProject($Project)
    {
        $this->Project = $Project;
    }

    /**
     * @return int
     */
    public function getProjectStudio()
    {
        return $this->Project_Studio;
    }

    /**
     * @param int $Project_Studio
     */
    public function setProjectStudio($Project_Studio)
    {
        $this->Project_Studio = $Project_Studio;
    }

    /**
     * @return int
     */
    public function getProjectTag()
    {
        return $this->Project_Tag;
    }

    /**
     * @param int $Project_Tag
     */
    public function setProjectTag($Project_Tag)
    {
        $this->Project_Tag = $Project_Tag;
    }

    /**
     * @return int
     */
    public function getQ1()
    {
        return $this->Q1;
    }

    /**
     * @param int $Q1
     */
    public function setQ1($Q1)
    {
        $this->Q1 = $Q1;
    }

    /**
     * @return int
     */
    public function getQ2()
    {
        return $this->Q2;
    }

    /**
     * @param int $Q2
     */
    public function setQ2($Q2)
    {
        $this->Q2 = $Q2;
    }

    /**
     * @return int
     */
    public function getReplacementReason()
    {
        return $this->replacement_reason;
    }

    /**
     * @param int $replacement_reason
     */
    public function setReplacementReason($replacement_reason)
    {
        $this->replacement_reason = $replacement_reason;
    }

    /**
     * @return int
     */
    public function getStartingDate()
    {
        return $this->starting_Date;
    }

    /**
     * @param int $starting_Date
     */
    public function setStartingDate($starting_Date)
    {
        $this->starting_Date = $starting_Date;
    }

    /**
     * @return int
     */
    public function getStudio()
    {
        return $this->Studio;
    }

    /**
     * @param int $Studio
     */
    public function setStudio($Studio)
    {
        $this->Studio = $Studio;
    }
}

class arrayEmpleado
{
    private $Empleados = array();

    public static function sort_id( dtoEmpleados $a,dtoEmpleados $b)
    {
        return strcmp($a->getID(), $b->getID());
    }
    public function guardarObjeto()
    {
        array_push($this->Empleados , $this->nuevoEmpleado);
    }

    public function getEmpleados()
    {
        return $this->Empleados;
    }
    public function agregar_empleado(dtoEmpleados $empleado)
    {
        $this->nuevoEmpleado = $empleado;
    }
    public function Ordenar_ID(){
        usort( $this->Empleados, array('arrayEmpleado' , 'sort_id'));
    }
}