<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Role\Role;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
#[UniqueEntity(fields: ['username'], message: 'nom deja utilise')]
class User implements UserInterface, \Serializable
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

    public function upCoins(User $user)
    { 
            // la table en base de données correspondant à l'entité liée au repository en cours
    $table = $this->getClassMetadata()->table["coins"];

    // Dans mon cas je voulais trier mes résultats avec un ordre bien particulier
    $sql =  "UPDATE user "
            ."SET ".$table.""
            ."WHERE  "
            ."ORDER BY m.status = :status_available DESC, m.status = :status_unknown DESC, m.status = :status_unavailable DESC, m.priority ASC";

    $rsm = new ResultSetMappingBuilder($this->getEntityManager());
    $rsm->addEntityResult(MyClass::class, "m");

    // On mappe le nom de chaque colonne en base de données sur les attributs de nos entités
    foreach ($this->getClassMetadata()->fieldMappings as $obj) {
        $rsm->addFieldResult("m", $obj["columnName"], $obj["fieldName"]);
    }

    $stmt = $this->getEntityManager()->createNativeQuery($sql, $rsm);

    $stmt->setParameter(":current_time", new \DateTime("now"));
    $stmt->setParameter(":status_available", MyClass::STATUS_AVAILABLE);
    $stmt->setParameter(":status_unknown", MyClass::STATUS_UNKNOWN);
    $stmt->setParameter(":status_unavailable", MyClass::STATUS_UNAVAILABLE);

    $stmt->execute();

    return $stmt->getResult();
}
    }

/*
    public function upCoins(User $user)
    { 
        $span = 1;//a modifier

        if( $span >= 1.65 ){
            
            $coins = $this->getCoins();
            $coins = $coins + 10;
            $requet_sql = "UPDATE user SET coins = ".$coins" WHERE username=".$user;

            $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
            $stmt->execute([]);

            return $stmt->fetchAll();
        }
    }
*/
/*
     public function findAllNull()//:array
    {
    $entityManager = $this->getEntityManager();
    $query = $entityManager->createQuery(
        "SELECT COUNT (p) AS retenu
         FROM App\Entity\Proposition p
         LEFT JOIN App\Entity\Reponse r 
         WITH p.id=r.idProposition   
         WHERE p.vrai = '1' AND  r.idProposition IS NULL");

  
    $result= $query->execute();
    
    return $result[0]['retenu'];













    public function buy(ObjectManager $manager, ?UserInterface $user)
    {
        $coins = $this ->getCoins;
        if($coins>=50){
        $newcoins = $coins-50;
        $user = $this->getUsername();
        $user->setCoins($newcoins);

        $manager->persist($user);
        $manager->flush();
        } else {
            printf('tu n\'a pas asser de coins');
        }
    }
*/    
}
?>