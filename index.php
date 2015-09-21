<?php

id = $_POST[id];

$field1 = $_POST[field1];
$field2 = $_POST[field2];
$field3 = $_POST[field3];

$whereArr = array();
if($id != "") $whereArr[] = "id = {$id}";
if($field1 != "") $whereArr[] = "field1 = {$field1}";
if($field2 != "") $whereArr[] = "field2 = {$field2}";
if($field3 != "") $whereArr[] = "field3 = {$field3}";

$whereStr = implode(" AND ", $whereArr);

$query = "Select * from assignments WHERE {$whereStr}";
