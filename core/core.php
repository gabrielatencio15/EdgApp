<?php


//DB Connection
require_once './models/db_connection.php';
$businessInfo = queryParamsByCategory("Business_Info");

foreach($businessInfo as $bs_info)
{
    $GLOBALS[$bs_info->paramName] = $bs_info->value;
}

