<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'connection.php';
  echo '<div class="head">RED BOX</div><br>';
mysql_select_db(header_menu, $dbconnect);
mysql_query('SET NAMES utf8');
$query = mysql_query("SELECT * FROM header_menu WHERE id=3", $dbconnect);
while ($rows = mysql_fetch_array($query)){
 echo '<div>'.$rows['name'].'</div>';   
}


