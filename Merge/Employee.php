<?php

/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 18/10/2015
 * Time: 11:56 PM
 */

//This class stores an employee's data
class dtoEmployee
{
    private $Email;
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
    public function ArrayEmployeeToDto( $row, orderEmployee $orderEmployee ){
        //$orderEmployee = new orderEmployee();
        for($x=0; $x < $orderEmployee->getMax(); $x++ )
        {
            switch($x){
                case $orderEmployee->getEmail():
                    $this->setEmail($row[$x]);
                    break;
                case $orderEmployee->getName():
                    $this->setName($row[$x]);
                    break;
                case $orderEmployee->getID():
                    $this->setID($row[$x]);
                    break;
                case $orderEmployee->getCurrentSkill():
                    $this->setCurrentSkill($row[$x]);
                    break;
                case $orderEmployee->getCurrentSeniority():
                    $this->setCurrentSeniority($row[$x]);
                    break;
                case $orderEmployee->getClientTag():
                    $this->setClientTag($row[$x]);
                    break;
                case $orderEmployee->getClient():
                    $this->setClient($row[$x]);
                    break;
                case $orderEmployee->getProjectTag():
                    $this->setProjectTag($row[$x]);
                    break;
                case $orderEmployee->getProject():
                    $this->setProject($row[$x]);
                    break;
                case $orderEmployee->getstartingDate():
                    $this->setstartingDate($row[$x]);
                    break;
                case $orderEmployee->getendDate():
                    $this->setendDate($row[$x]);
                    break;
                case $orderEmployee->getpercentage():
                    $this->setPercentage($row[$x]);
                    break;
                case $orderEmployee->getcurrentLocation():
                    $this->setcurrentLocation($row[$x]);
                    break;
                case $orderEmployee->getcurrentTL():
                    $this->setcurrentTL($row[$x]);
                    break;
                case $orderEmployee->getallLocations():
                    $this->setallLocations($row[$x]);
                    break;
                case $orderEmployee->getcurrentPMs():
                    $this->setcurrentPMs($row[$x]);
                    break;
                case $orderEmployee->getcurrentPA():
                    $this->setcurrentPA($row[$x]);
                    break;
                case $orderEmployee->getpmsHistory():
                    $this->setpmsHistory($row[$x]);
                    break;
                case $orderEmployee->getcurrentDDs():
                    $this->setcurrentDDs($row[$x]);
                    break;
                case $orderEmployee->getassignmentType():
                    $this->setassignmentType($row[$x]);
                    break;
                case $orderEmployee->getcomments():
                    $this->setcomments($row[$x]);
                    break;
                case $orderEmployee->getProjectStudio():
                    $this->setProjectStudio($row[$x]);
                    break;
                case $orderEmployee->getStudio():
                    $this->setStudio($row[$x]);
                    break;
                case $orderEmployee->getOffice():
                    $this->setOffice($row[$x]);
                    break;
                case $orderEmployee->getddsHistory():
                    $this->setddsHistory($row[$x]);
                    break;
                case $orderEmployee->getbusinessUnitTag():
                    $this->setbusinessUnitTag($row[$x]);
                    break;
                case $orderEmployee->getbusinessUnitName():
                    $this->setbusinessUnitName($row[$x]);
                    break;
                case $orderEmployee->getreplacementreason():
                    $this->setreplacementreason($row[$x]);
                    break;
                case $orderEmployee->getorganizationalUnitType():
                    $this->setorganizationalUnitType($row[$x]);
                    break;
                case $orderEmployee->getbillable():
                    $this->setbillable($row[$x]);
                    break;
                case $orderEmployee->getOrganizationalUnitdeSAP():
                    $this->setOrganizationalUnitdeSAP($row[$x]);
                    break;
                case $orderEmployee->getOrganizationalUnitSAPlast():
                    $this->setOrganizationalUnitSAPlast($row[$x]);
                    break;
                case $orderEmployee->getEntryDate():
                    $this->setEntryDate($row[$x]);
                    break;
            }
        }
    }
}

class orderEmployee
{
    private $Email ;
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
    private $Max;

    /**
     * orderEmployee constructor.
     */
    public function __construct($row)
    {
        $x = 0;
        do{
            switch($row[$x]){
                case "Glober email";
                    $this->setEmail($x);
                    break;
                case "Glober";
                    $this->setName($x);
                    break;
                case "Legal ID";
                    $this->setID($x);
                    break;
                case "Current Skill";
                    $this->setCurrentSkill($x);
                    break;
                case "Current Seniority";
                    $this->setCurrentSeniority($x);
                    break;
                case "Client Tag";
                    $this->setClientTag($x);
                    break;
                case "Client";
                    $this->setClient($x);
                    break;
                case "Project Tag";
                    $this->setProjectTag($x);
                    break;
                case "Project";
                    $this->setProject($x);
                    break;
                case "Starting Date";
                    $this->setStartingDate($x);
                    break;
                case "End Date";
                    $this->setEndDate($x);
                    break;
                case "Percentage";
                    $this->setPercentage($x);
                    break;
                case "Current Location";
                    $this->setCurrentLocation($x);
                    break;
                case "Current TL";
                    $this->setCurrentTL($x);
                    break;
                case "All Locations";
                    $this->setAllLocations($x);
                    break;
                case "Current PMs";
                    $this->setCurrentPMs($x);
                    break;
                case "Current PA";
                    $this->setCurrentPA($x);
                    break;
                case "PMs History";
                    $this->setPmsHistory($x);
                    break;
                case "Current DDs";
                    $this->setCurrentDDs($x);
                    break;
                case "Assignment Type";
                    $this->setAssignmentType($x);
                    break;
                case "Comments";
                    $this->setComments($x);
                    break;
                case "Project Studio";
                    $this->setProjectStudio($x);
                    break;
                case "Glober Studio/BU";
                    $this->setStudio($x);
                    break;
                case "Glober Office";
                    $this->setOffice($x);
                    break;
                case "DDs History";
                    $this->setDdsHistory($x);
                    break;
                case "Business Unit Tag";
                    $this->setBusinessUnitTag($x);
                    break;
                case "Business Unit Name";
                    $this->setBusinessUnitName($x);
                    break;
                case "Replacement reason";
                    $this->setReplacementReason($x);
                    break;
                case "Organizational Unit Type";
                    $this->setOrganizationalUnitType($x);
                    break;
                case "Billable";
                    $this->setBillable($x);
                    break;
                case "Organizational Unit de SAP";
                    $this->setOrganizationalUnitDeSAP($x);
                    break;
                case "Organizational Unit SAP last";
                    $this->setOrganizationalUnitSAPLast($x);
                    break;
                case "Entry Date";
                    $this->setEntryDate($x);
                    break;
            }
            $x++;
        }while(isset($row[$x]));
        $this->setMax($x);
    }


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

class arrayEmployee
{
    private $Employees = array();

    public static function sort_id( dtoEmployee $a, dtoEmployee $b)
    {
        return strcmp($a->getID(), $b->getID());
    }
    public function saveObject()
    {
        array_push($this->Employees , $this->newEmployee);
    }

    public function getEmployee()
    {
        return $this->Employees;
    }
    public function addEmployee(dtoEmployee $employee)
    {
        $this->newEmployee = $employee;
        $this->saveObject();
    }
    public function Order_ID(){
        usort( $this->Employees, array('arrayEmployee' , 'sort_id'));
    }
}