<?php

require "functions.php";

$data = new dbexec();
$array = array();
$disp = $data::display();

while($row = $disp->fetch_assoc())
{
    $array[] = $row;
}
echo json_encode($array);
?>