<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula03/model/EstudanteModel.php';

class EstudanteController{

    public function listar(){
        //Instanciar a model
        //Chamar o metodo listar na model
        $estudanteModel = new EstudanteModel();
        $listaEstudantes = $estudanteModel->listar();
        $_REQUEST["estudante"] = $listaEstudantes;
        //Renderizar a view
        //AQUI
        require_once $_SERVER ['DOCUMENT_ROOT'] . '/aula03/view/listarEstudanteView.php';
    }

    public function salvar()
    {
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];

        $estudanteModel = new EstudanteModel ();
        $estudanteModel->salvarModel($nome, $idade);

    }



}
