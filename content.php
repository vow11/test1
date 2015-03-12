<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'template/header.php';

include_once 'connection.php';

//переменная для вывода нужного контента из таблицы content
$cont_id = $_GET['cont_id'];

//переменная для вывода названия страницы из таблицы content
$cont_name = $_GET['cont_name'];

mysql_select_db(content, $dbconnect);
mysql_query('SET NAMES utf8');
$query = mysql_query("SELECT * FROM content WHERE id=$cont_id", $dbconnect);
while ($rows = mysql_fetch_array($query)){
 echo '<div align="center">'.$rows['field'].'</div>';   
}