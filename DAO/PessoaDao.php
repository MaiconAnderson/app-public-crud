<?php

class PessoaDAO
{
    private $conexao;
    
    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=db_mvc";
       $this-> $conexao = new PDO($dns, 'root', '#MySQL_dev_2023@');
    }
    public function isnsert(PessoaModel $model)
    {
        $sql = "INSERT INTO pessoa (nome, cpf, data_nascimento) VALUES (?,?,?)";

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        
        $stmt->execute();

    }
    public function update(PessoaModel $model)
    {

    }
    public function select()
    {
$sql = "SELECT * FROM pessoa"
$stmt = $this->conexao->prepare($sql);
$stmt->execute();
    }
}