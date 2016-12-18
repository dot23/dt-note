<?php
require '../config.ini.php';
$temp=new Admin();
echo $temp->checkUserAndPass('dot23', 123);