<?php

/**
*
* Definição das rotas e seus respectivos controllers e actions
*
* @author wagner alexandre
*
**/

// rotas normais
$commonRoutes = array(
	'/'               => 'SiteController/index',
    'ajuda'			  => 'SiteController/ajuda',
    'sobre'			  => 'SiteController/sobre',
    'contato'         => 'SiteController/contato',
    'jogos'			  => 'SiteController/jogos',
    'jogo/load'		  => 'SiteController/jogo',

    'adm'			  => 'Admcontroller/login',
    'adm/listarjogos' => 'Admcontroller/listarjogos',
    'amd/mensagens'   => 'Admcontroller/,mensagens'

);

// rotas POST
$commonPost = array();

$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;