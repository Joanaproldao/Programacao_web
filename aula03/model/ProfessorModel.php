<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER .'/DataBase/Database.php';

class ProfessorModel
{

    private int $idade;

    private string $nome;

    private $database;

    //getters and setters

    public function __construct()
    {
        $this->database = new Database();
    }


    public function listarModel(): array
    {
        //Obter e retornar os dados do BD

        $dadosArray = $this->database->executeSelect("SELECT * FROM professor");


        return $dadosArray;
    }
    public function salvarModel(string $nome, int $idade)
    {
        $sql = "INSERT INTO professor (nome, idade) values ('$nome', '$idade')";
        $this->database->insert($sql);
        //salvar no BD
    }


}