<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="loisirs")
 **/
class Loisir
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
    private $frequence; 
    
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
    public function getfrequence(){
        return $this->frequence;
    }
    public function setfrequence($frequence){
        $this->frequence = $frequence;
    }
    public function getlieu(){
        $this->lieu;
    }
    public function setlieu($lieu) {
        return $this->lieu = $lieu;
    }
}
    
