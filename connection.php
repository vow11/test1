<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$db = test1;
$user = test1;
$pass = test1;

$dbconnect = mysql_connect (localhost, $user, $pass);
  if (!mysql_select_db($db)) {
    die("Не могу подключиться к базе данных test1!");
  }