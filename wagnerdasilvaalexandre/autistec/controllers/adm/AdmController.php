<?php

/**
*
* Controller do adm.
*
* @author wagner alexandre
*
**/
class AdmController extends Controller
{
	public function login(){

		$this->view('adm/login.php');	
	}

	public function listarjogos(){

		$this->view('adm/listarjogos.php');
	}

	public function mensagens(){

		$this->view('adm/mensagens.php');
	}

}

