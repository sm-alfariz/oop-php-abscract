<?php
/**
 * Created by PhpStorm.
 * User: fendi
 * Date: 05/01/17
 * Time: 17:10
 */

include "vendor/autoload.php";
include "class/PolitikusBaik.php";
$politikus = new PolitikusBaik() ;
$politikus->setNama('si Politikus Baik');
printf('%s',$politikus->DetailPolitikus()) ;
?>