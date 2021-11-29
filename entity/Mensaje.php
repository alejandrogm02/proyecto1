<?php 
require_once __DIR__ .'/Entity.php';
class Mensaje extends Entity
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellidos;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $asunto;
    /**
     * @var string
     */
    private $texto;

    /**
     * @var int
     */
    private $id;
    
    /**
     * @param string $nombre
     * @param string $apellidos
     * @param string $email
     * @param string $asunto
     * @param string $texto
     */
    public function __construct(string $nombre, string $apellidos, string $email, string $asunto, string $texto){
        $this->id = null;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->asunto = $asunto;
        $this->texto = $texto;
    }

    /**
     * Get the value of nombre
     *
     * @return  string
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  string  $nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     *
     * @return  string
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @param  string  $apellidos
     *
     * @return  self
     */ 
    public function setApellidos(string $apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of asunto
     *
     * @return  string
     */ 
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set the value of asunto
     *
     * @param  string  $asunto
     *
     * @return  self
     */ 
    public function setAsunto(string $asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get the value of texto
     *
     * @return  string
     */ 
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set the value of texto
     *
     * @param  string  $texto
     *
     * @return  self
     */ 
    public function setTexto(string $texto)
    {
        $this->texto = $texto;

        return $this;
    }
    
    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    public function toArray(): array
    {
    return [
            'id' => $this->getId(),
            'nombre' => $this->getNombre(),
            'apellidos' => $this->getApellidos(),
            'email' => $this->getEmail(),
            'asunto' => $this->getAsunto(),
            'texto' => $this->getTexto()
        ];
    }

}