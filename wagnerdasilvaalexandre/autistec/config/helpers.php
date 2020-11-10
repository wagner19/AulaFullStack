<?php

/**
*
* Arquivo onde são definidos os helpers
*
* @author wagner alexandre
*
**/

define('LOCAL_URL', '/wagnerdasilvaalexandre/autistec');

if($env == "dev"){
	define('LOCAL_URL', '/wagnerdasilvaalexandre/autistec');
}
elseif($env == "prod"){
	define('LOCAL_URL', 'https://wwww.google.com.br/');
}


return array(
	'URLHelper' 	=> new URLHelper(),
);