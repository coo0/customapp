<?php
/**
 * Created by PhpStorm.
 * User: coo08
 * Date: 2016/4/5
 * Time: 22:06
 */

$mysql = new mysqli("localhost", "root");
echo "MySQL Server info: ".$mysql->host_info;