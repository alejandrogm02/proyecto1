<?php
require_once __DIR__ . '/../entity/Usuario.php';
require_once __DIR__ . '/../database/QueryBuilder.php';
class UsuarioRepository extends QueryBuilder
{
    /**
    * Generador de password
    *
    * @var IPasswordGenerator
    */
    protected $passwordGenerator;

public function __construct(IPasswordGenerator $passwordGenerator){

    $this->passwordGenerator = $passwordGenerator;

    parent::__construct('users', 'Usuario');

}
/**
 * @param Entity $entity
 * @throws QueryException
 */
public function save(Entity $entity)
{
    
    $parameters = $entity->toArray();
    $entity->setPassword($this->passwordGenerator::encrypt($parameters['password']));
    parent::save($entity);   
} 
}
