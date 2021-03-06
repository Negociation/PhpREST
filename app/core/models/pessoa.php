<?php

namespace Models;

use Annotations\MER as MER;
use Annotations\Json as JSON;

/**
 * @MER\Tabela(nome="person")
 */
class Pessoa extends ModelTemplate
{

    /**
     * @MER\Coluna(nome="name",tipo="text")
     * @JSON\jsonDeclare(nome="name")
     */
    protected $completeName;

    /**
     * @MER\Coluna(nome="id", tipo="integer")
     * @JSON\jsonDeclare(nome="id");
     * @MER\Id
     */
    protected $id;

    public function getCompleteName()
    {
        return $this->completeName;
    }

    public function setCompleteName($name)
    {
        $this->completeName = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}
