<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection; //Necesario para retornar un Array de objetos (Las tareas del usuario).
use Doctrine\Common\Collections\Collection; //Necesario para retornar un Array de objetos (Las tareas del usuario).
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rol", type="string", length=45, nullable=true)
     * @Assert\NotBlank
     * @Assert\Regex(pattern="/[a-zA-Z ]+/")
     */
    private $rol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     * @Assert\NotBlank
     * @Assert\Regex(pattern="/[a-zA-Z ]+/")
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apellido", type="string", length=45, nullable=true)
     * @Assert\NotBlank
     * @Assert\Regex(pattern="/[a-zA-Z ]+/")
     */
    private $apellido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="correo", type="string", length=45, nullable=true)
     * @Assert\NotBlank
     * @Assert\Email
     */
    private $correo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="clave", type="string", length=255, nullable=true)
     * @Assert\NotBlank
     */
    private $clave;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     * @Assert\NotBlank
     */
    private $createdAt;
    
    /** Relación "Uno a Muchos" (La entidad "Tarea", se relaciona con el atributo "usuario" de la entidad "Usuario").
     * 
     * @ORM\OneToMany(targetEntity="App\Entity\Tarea", mappedBy="usuario");
     */
    private $allTarea; //Este atributo almacena un Array con todas las tareas del usuario.
    
    public function __construct() 
    {
        $this->allTarea = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRol(): ?string
    {
        return $this->rol;
    }

    public function setRol(?string $rol): self
    {
        $this->rol = $rol;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(?string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(?string $correo): self
    {
        $this->correo = $correo;

        return $this;
    }

    public function getClave(): ?string
    {
        return $this->clave;
    }

    public function setClave(?string $clave): self
    {
        $this->clave = $clave;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
    
    /**
     * @return Collection|Tarea[]
     */
    public function getAllTarea(): Collection //Este método retorna en un Array todas las tareas vinculadas al usuario.
    {    
        return $this->allTarea;
    }
    
    //Métodos de la interface (UserInterface).
    public function getUsername() //1. Indica el identificador.
    {
        return $this->correo;
    }
    
    public function getUserIdentifier() //1. Indica el identificador.
    {
        return $this->correo;
    }
    
    public function getPassword() //2. Indica la clave de acceso.
    {
        return $this->clave;
    }
    
    public function getSalt()
    {
        return null;
    }
    
    public function getRoles()
    {
        return array("ROLE_" . $this->getRol());
    }
    
    public function eraseCredentials()
    {

    }
    
}
