<!DOCTYPE html>
<html>


<head><title>Reading values into a table</title></head>
<body>



<div>

<table border="1">
    <tbody>

<?php
$myfile = fopen("example_data.csv", "r") or die("Unable to open file!");
// Output one line until end-of-file

while(!feof($myfile)) {
    $array[] = fgetcsv($myfile);
}

foreach ($array as $row){
    echo'<tr>';
    foreach ($row as $item){
        echo '<td>'.$item."</td>";
    }
    echo'</tr>';
}

fclose($myfile);


?>
    </tbody>

    </table>

</div>

</body>
</html>