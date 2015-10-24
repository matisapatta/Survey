<?php
/**
 * Created by PhpStorm.
 * User: dgagl_000
 * Date: 19/10/2015
 * Time: 1:01 AM
 */
?>

<html>
<body>
        <?php
            include_once("Merge.php");
            include_once("employee_survey.php");
            $merge = new Merge();
            $employees_survey = $merge->Merge_Data();
            $array = $employees_survey->getEmployees_Survey();
            echo "Token";
            echo "Name";
            echo "<br>";
            foreach ($array as $row){
                echo $row->getToken();
                echo $row->getName();
                echo "<br>";
            }
            $employees_survey->generar_Json();
        ?>
</body>
</html>
