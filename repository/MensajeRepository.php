<?php
require_once __DIR__ . '/../entity/Mensaje.php';
require_once __DIR__ . '/../database/QueryBuilder.php';
class MensajeRepository extends QueryBuilder
{
    public function __construct(){
        parent::__construct('mensajes', 'Mensaje');
    }

    /**
     * @param Entity $contacto
     * @throws QueryException
     */
    public function save(Entity $contacto)
    {
        $fnGuardaMensaje = function () use ($contacto){
            parent::save($contacto);
        };
        $this->executeTransaction($fnGuardaMensaje);
    }
}