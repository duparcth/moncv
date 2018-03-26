<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="experiences")
 **/
class Experiences
{
    /** @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     **/
    protected $id;
    
    /** 
     * @ORM\Column(type="string")
    **/
    private $name;
    
    /** 
     * @ORM\Column(type="date")
    **/
    private $duree; 
    
    /** 
     * @ORM\Column(type="string")
    **/
    private $lieu;

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getId() {
        return $this -> id;
    }
    public function getduree(){
        return $this->duree;
    }
    public function setduree($duree){
        $this->duree = $duree;
    }
    public function getlieu(){
        $this->lieu;
    }
    public function setlieu($lieu) {
        return $this->lieu = $lieu;
    }
}
    