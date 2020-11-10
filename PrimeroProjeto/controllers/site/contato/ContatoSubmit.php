<?php 

class ContatoSubmit extends Controller{

	public function enviar(){

		//$id         =1;
		$nome 		= $_POST["nome"];
		$email 		= $_POST["email"];
		$fone 		= $_POST["fone"];
		$descricao 	= $_POST["mensagem"];

		// $cotatoUpdate = new contatoCrud;
		// $cotatoUpdate->upsate($nome, $email, $fone, $descricao);

		$listaDeContato

		$listaDeContato = new ContatoData;
		$listaDeContato = $listaDeContato->listar();



		// $contatorud = new contatoCrud;

		// $contato_id = $contatoCrud->save($nome, $email, $fone, $descricao);

		// if ($contato_id) {
		// 	echo json_encode(array(
		// 		'resultado' => true,
		// 		'id'		=> $contato_id,
		// 		'msg'  		=> "contato salvo ccom sucesso!",
		// 		'status'	=> "success"
		// 	));

		// }else{
		// 	echo json_encode(array(
		// 		'resultado' => false,
		// 		'msg'  		=> "Erro ao adicionar contato!",
		// 		'status'	=> "error"
		// 	));

		// }

		
	}

}