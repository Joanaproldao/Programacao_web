<?php 


require_once $_SERVER['DOCUMENT_ROOT'] . '/aula03/model/Database.php';

class EstudanteModel{
    
    private int $idade;

    private string $nome;

    private $database;

    //getters and setters

    public function __construct() 
    {
        $this->database = new Database();
    }

    public function salvarModel(string $nome, int $idade)
    {
        $sql = "INSERT INTO estudante (nome, idade) values ('$nome', '$idade')";
        $this->database->insert($sql);
        //salvar no BD
        echo "Usuário salvo com sucesso";
    }

    public function listar(): array
    {
        //Obter e retornar os dados do BD

         $dadosArray = $this->database->executeSelect("SELECT * FROM estudante");
         

        return $dadosArray; 
    }
}