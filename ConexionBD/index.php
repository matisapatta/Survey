<!DOCTYPE html>
<html>

<head><title>Values Read</title></head>
<body>

<!-- HTML Code is only to visualize data-->
<div>
    <table border="1">
        <tbody>

        <!--this is to test DBData Class-->

        <?php

        include_once('db.php');
        $DBAccess = new DatosDB();

        $surveyData = $DBAccess->get();

        /*This is to visualize data in an HTML table*/
        foreach ($surveyData as $row){
            echo'<tr>';
            foreach ($row as $item){
                echo '<td>'.$item."</td>";
            }
            echo'</tr>';
        }

        ?>
        </tbody>
    </table>
</div>

</body>
</html>
