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



?>






<!DOCTYPE html>
<html lang="en">
<head>

  <title> </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 



<style>


div.clear
{
    clear: both;
}

div.product-chooser{
    
}

    div.product-chooser.disabled div.product-chooser-item
	{
		zoom: 1;
		filter: alpha(opacity=60);
		opacity: 0.6;
		cursor: default;
	}

	div.product-chooser div.product-chooser-item{
		padding: 11px;
		border-radius: 6px;
		cursor: pointer;
		position: relative;
		border: 1px solid #efefef;
		margin-bottom: 10px;
        margin-left: 10px;
        margin-right: 10x;
	}
	
	div.product-chooser div.product-chooser-item.selected{
		border: 4px solid white;
		background: #efefef;
		padding: 8px;
		filter: alpha(opacity=100);
		opacity: 1;
	}
	
		div.product-chooser div.product-chooser-item img{
			padding: 0;
		}
		
		div.product-chooser div.product-chooser-item span.title{
			display: block;
			margin: 10px 0 5px 0;
			font-weight: bold;
			font-size: 12px;
		}
		
		div.product-chooser div.product-chooser-item span.description{
			font-size: 12px;
		}
		
		div.product-chooser div.product-chooser-item input{
			position: absolute;
			left: 0;
			top: 0;
			visibility:hidden;
		}

</style> 




<script>

$(function(){
	$('div.product-chooser').not('.disabled').find('div.product-chooser-item').on('click', function(){
		$(this).parent().parent().find('div.product-chooser-item').removeClass('selected');
		$(this).addClass('selected');
		$(this).find('input[type="radio"]').prop("checked", true);
		
	});
});

</script>



</head>




<body>



<div class="container">
    
    <h2 align="center">
     <img src="images/control_settings.png" width="150" height="150" alt="Control settings"> Control settings 
       </h2>
        <hr>
    <div class="row form-group product-chooser">
    

    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item selected">
                  <img src="images/server.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Https/s server">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">

    		<input type="radio" name="product" value="mobile_desktop" checked="checked">

                      <br>
                     <p align="center"> 
                      <font size="3"> <b> {Stop | Start | Restart} Http/s server </b> </font> 
                       </p>                    


 

                       <div class="input-group-btn">

                     <button class="btn btn-default btn-lg" type="submit" 
      onclick="if (confirm('If you quit the server, for enable again server, will must enabled from the terminal. Do you want to continue?')) window.location.href='stop_server.php';">
                       <i class="glyphicon glyphicon-stop"></i>
                         Stop
                      </button>
      
         
                    <button class="btn btn-default btn-lg" type="submit" onclick="window.location='start_server.php'">
                       <i class="glyphicon glyphicon-off"></i>
                       Start
                     </button>

                   <button class="btn btn-default btn-lg" type="submit" onclick="if (confirm('If you restart the server, for enable again to server, will must enabled from the terminal. Do you want to continue?')) window.location.href='restart_server.php';">
                     <i class="glyphicon glyphicon-repeat"></i>
                       Restart
                    </button>

                    </div>





    			</div>
    			<div class="clear"></div>
    		</div>
    	</div>
    	





    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item">
    			<img src="images/database.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Database">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
    		
    	           <input type="radio" name="product" value="desktop">

                      <br>

                    <p align="center"> 
                      <font size="3"> <b> {Stop | Start | Restart} Database server </b> </font> 
                       </p>                    



                     <div class="input-group-btn">

                     <button class="btn btn-default btn-lg" type="submit" onclick="window.location='stop_database.php'">
                       <i class="glyphicon glyphicon-stop"></i>
                         Stop
                      </button>
      
           
                    <button class="btn btn-default btn-lg" type="submit" onclick="window.location='start_database.php'">
                      <i class="glyphicon glyphicon-off"></i>
                       Start
                     </button>

                   <button class="btn btn-default btn-lg" type="submit" onclick="window.location='restart_database.php'">
                    <i class="glyphicon glyphicon-repeat"></i>
                       Restart
                    </button>

                    </div>



    			</div>
    			<div class="clear"></div>
    		</div>
    	</div>





    	
    	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    		<div class="product-chooser-item">
    			<img src="images/cloud_lock.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Cloud">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
    		
                      <input type="radio" name="product" value="mobile">
    
                         <br>

                    <p align="left"> 
                      <font size="3"> <b> {Enable | Disable} Makbox  </b> </font> 
                       </p>                    



                      <div class="input-group-btn">

                     <button class="btn btn-default btn-lg" type="submit" onclick="window.location='enable_makbox.php'">
                       <i class="glyphicon glyphicon-ok-circle"></i>
                         Enable
                      </button>
    
           
                    <button class="btn btn-default btn-lg" type="submit" onclick="if (confirm('If you disable the program, to turn it on again, it must do it from the terminal. Do you want to continue?')) window.location.href='disable_makbox.php';">
                      <i class="glyphicon glyphicon-ban-circle"></i>
                       Disable
                     </button>

                    </div>

                        
 
    			</div>
    			<div class="clear"></div>
    		</div>
    	</div>
    	
    </div>
</div>




</body>
<html>




<?php






?>
