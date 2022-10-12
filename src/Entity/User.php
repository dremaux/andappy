<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Role\Role;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
#[UniqueEntity(fields: ['username'], message: 'nom déjà utilisé')]
class User extends AbstractController implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $coins=0;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role="User";

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lastPopupDate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $connectionDate;

    public function __construct()
    {
        $this->responses = new ArrayCollection();
        $this->reponses = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }
    public function getUsername(): ?string
    {
        return $this->username;
    }
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }
    public function getPassword(): ?string
    {
        return $this->password;
    }
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
    /**
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return ['ROLE_ADMIN'];
    }
    /**
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }
    public function eraseCredentials()
    {
    }
    /**
     * String representation of object
     * @link https://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password
        ]);
    }
    /**
     * Constructs the object
     * @link https://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the objet
     * </p>
     * @return void
     * @since 5.1.0     
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password
        ) = unserialize($serialized, ['allowed_classes' => false]); 
    }

    public function getCoins(): ?string
    {
        return $this->coins;
    }

    public function setCoins(string $coins): self
    {
        $this->coins = $coins;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getLastPopupDate(): ?int
    {
        return $this->lastPopupDate;
    }

    public function setLastPopupDate(?int $lastPopupDate): self
    {
        $this->lastPopupDate = $lastPopupDate;

        return $this;
    }

    public function getConnectionDate(): ?int
    {
        return $this->connectionDate;
    }

    public function setConnectionDate(?int $connectionDate): self
    {
        $this->connectionDate = $connectionDate;

        return $this;
    }

}
    
?>