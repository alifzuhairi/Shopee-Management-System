<?php
require "functions.php";

$func = new dbexec();

if(isset($_POST['add']))
{
    $func->id = $_POST['id'];
    $func->shopee = $_POST['shopee'];
    $func->name = $_POST['name'];
    $func->package = $_POST['package'];
    $func->quantity = $_POST['quantity'];
    $func->sleeve = $_POST['sleeve'];
    $func->size = $_POST['size'];
    $func->date = $_POST['date'];
    $func->customer();
}
