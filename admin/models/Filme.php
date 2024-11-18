<?php

class Filme {
    private int $id;
    private string $genero;
    private string $filme;
    private string $descricao;
    private string $diretor;
    private string $duracao;
    private string $estudante;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of filme
     */ 
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * Set the value of filme
     *
     * @return  self
     */ 
    public function setFilme($filme)
    {
        $this->filme = $filme;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of diretor
     */ 
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     *
     * @return  self
     */ 
    public function setDiretor($diretor)
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Get the value of duracao
     */ 
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * Set the value of duracao
     *
     * @return  self
     */ 
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;

        return $this;
    }

    /**
     * Get the value of estudante
     */ 
    public function getEstudante()
    {
        return $this->estudante;
    }

    /**
     * Set the value of estudante
     *
     * @return  self
     */ 
    public function setEstudante($estudante)
    {
        $this->estudante = $estudante;

        return $this;
    }
}