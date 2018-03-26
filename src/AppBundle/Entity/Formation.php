<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="formation")
 **/
class Formation
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
    private $datedebut; 
    
    /** 
     * @ORM\Column(type="date")
    **/
    private $datefin;
    
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
    public function getdatedebut(){
        return $this->datedebut;
    }
    public function setdatedebut($datedebut){
        $this->datedebut = $datedebut;
    }
    public function getdatefin(){
        return $this->datefin;
    }
    public function setdatefin($datefin){
        $this->datefin = $datefin;
    }
    public function getlieu(){
        $this->lieu;
    }
    public function setlieu($lieu) {
        return $this->lieu = $lieu;
    }
}
    
