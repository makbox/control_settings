<?php

/*
 * Copyright (c) 2016-2017 Barchampas Gerasimos <http://makbox.co.nf/>
 * Makbox is a personal (staas) cloud.
 *
 * Makbox is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 *
 * Makbox is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */


$allow= ip2long("127.0.0.1"); // for mozilla browser

$allow2 = ip2long("::1"); // for chrome browser

$ip = ip2long($_SERVER['REMOTE_ADDR']); // ip tou client

$location = '/error'; // edw stelnw ton spam xrhsth


if ($ip!=$allow && $ip!=$allow2)
 {
//stelnw se allo url
header ('HTTP/1.1 301 Moved Permanently');
header ('Location: '.$location);
}


else
{

ini_set('display_errors', true);
error_reporting(E_ALL);



 shell_exec('sudo /etc/init.d/mysql restart');

 header("refresh:2;url=index.php"); 

 echo 'Database Server Restart. . .';

 exit;

}

?>


