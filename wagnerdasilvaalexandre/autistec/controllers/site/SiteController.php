<?php

/**
*
* Controller do site.
*
* @author wagner alexandre
*
**/
class SiteController extends Controller
{

	public function index(){

		$this->view('site/index.php');
	}

	public function ajuda(){

		$this->view('site/ajuda.php');	
	}

	public function sobre(){

		$this->view('site/sobre.php');
	}

	public function contato(){

		$this->view('site/contato.php');
	}

	public function jogos(){

		$this->view('site/jogos.php');
	}

	public function jogo(){

		$this->view('site/jogo.php');
	}

}