<?php

class Jogo
{
    private int $id;
    private string $jogo;
    private string $numero_integrantes;
    private string $regras;

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
     * Get the value of jogo
     */ 
    public function getJogo()
    {
        return $this->jogo;
    }

    /**
     * Set the value of jogo
     *
     * @return  self
     */ 
    public function setJogo($jogo)
    {
        $this->jogo = $jogo;

        return $this;
    }

    /**
     * Get the value of numero_integrantes
     */ 
    public function getNumero_integrantes()
    {
        return $this->numero_integrantes;
    }

    /**
     * Set the value of numero_integrantes
     *
     * @return  self
     */ 
    public function setNumero_integrantes($numero_integrantes)
    {
        $this->numero_integrantes = $numero_integrantes;

        return $this;
    }

    /**
     * Get the value of regras
     */ 
    public function getRegras()
    {
        return $this->regras;
    }

    /**
     * Set the value of regras
     *
     * @return  self
     */ 
    public function setRegras($regras)
    {
        $this->regras = $regras;

        return $this;
    }

    /**
     * Get the value of createds
     */ 
    public function getCreateds()
    {
        return $this->createds;
    }

    /**
     * Set the value of createds
     *
     * @return  self
     */ 
    public function setCreateds($createds)
    {
        $this->createds = $createds;

        return $this;
    }

    /**
     * Get the value of modified
     */ 
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set the value of modified
     *
     * @return  self
     */ 
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }
}
