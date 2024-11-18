<?php

require_once "Conexao.php";
require_once "Jogo.php";

class JogoModel
{

    public $tabela = "jogos";

    public function create(Jogo $c)
    {
        try {
            $sql = "insert into $this->tabela (jogo, numero_integrantes, regras) values (?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getJogo());
            $stmt->bindValue(2, $c->getnumero_integrantes());
            $stmt->bindValue(3, $c->getRegras());


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
        $stmt->setfetchMode(PDO::FETCH_CLASS, 'Jogo');
        $stmt->execute();
        return $stmt->fetchALL();
    }

    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id = ?");
        $stmt->bindValue(1, $id);
        $stmt->setfetchMode(PDO::FETCH_CLASS, 'Jogo');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Jogo $c)
    {
        try {
            $sql = "update $this->tabela set jogo =?, numero_integrantes=?, regras=? where id=?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getJogo());
            $stmt->bindValue(2, $c->getnumero_integrantes());
            $stmt->bindValue(3, $c->getRegras());
            $stmt->bindValue(4, $c->getId());


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
