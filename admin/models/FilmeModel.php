<?php

require_once "Conexao.php";
require_once "Filme.php";

class FilmeModel
{

    public $tabela = "filmes";

    public function create(Filme $c)
    {
        try {
            $sql = "insert into $this->tabela (genero, filme, descricao, diretor, duracao, estudante) values (?,?,?,?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getGenero());
            $stmt->bindValue(2, $c->getFilme());
            $stmt->bindValue(3, $c->getDescricao());
            $stmt->bindValue(4, $c->getDiretor());
            $stmt->bindValue(5, $c->getDuracao());
            $stmt->bindValue(6, $c->getEstudante());

            return $stmt->execute();

        }
        catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela");
        $stmt->setfetchMode(PDO::FETCH_CLASS, 'Filme');
        $stmt->execute();
        return $stmt->fetchALL();
    }

    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id = ?");
        $stmt->bindValue(1, $id);
        $stmt->setfetchMode(PDO::FETCH_CLASS, 'Filme');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Filme $c)
    {
        try {
            $sql = "update $this->tabela set genero=?, filme=?, descricao=?, diretor=?, duracao=?, estudante=? where id=?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getGenero());
            $stmt->bindValue(2, $c->getFilme());
            $stmt->bindValue(3, $c->getDescricao());
            $stmt->bindValue(4, $c->getDiretor());
            $stmt->bindValue(5, $c->getDuracao());
            $stmt->bindValue(6, $c->getEstudante());
            $stmt->bindValue(7, $c->getId());


            return $stmt->execute();

        }
        catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function delete($id)
    {
        try {
            $sql = "delete  from $this->tabela where id=?";
            $stmt = Conexao::getConn()->prepare($sql);

            $stmt->bindValue(1, $c->getId());


            return $stmt->execute();

        }
        catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
