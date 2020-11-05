<?php

class Personnage
{
    private $_force;
    private $_locatisation = 'lyon';
    //private $_experience = 50;
    private $_experience;
    private $_degats;
    //private $_degats;

   /* public function afficherExperience()
    {
        echo $this->_experience;
    }
*/
    public function frapper ($persoAFrapper)
    {
        $persoAFrapper->_degats += $this->_force;
    }

    public function gagnerExperience()
    {
        //$this->_experience = $this->_experience +1;
        $this->_experience++;
    }

    public function setForce($force)
    {
       
        $this->_force = $force;
    }
    public function getForce()
    {
       
        return $this->_force;

    }

    public function setExperience($experience)
    {
        
        $this->_experience = $experience;
    }

    public function degats()
    {
        return $this->_degats;
    }
    public function force()
    {
        return $this->_force;
    }
    public function experience()
    {
        return $this->_experience;
    }
}
function chargerClasse($classe)
{
    require $classe. '.php';

}

$perso = new Personnage;




?>