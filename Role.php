<?php

class Role{
    private string $_RoleNom;

    private array $_castings;
// On utilise array pour dresser une liste des acteurs qui ont joué le rôle en question ($_RoleNom)

    public function __construct(string $roleNom){
        $this->_RoleNom = $roleNom;
        $this->_castings = [];
    }

    public function getRoleNom(){
        return $this->_RoleNom;
    }
    public function setRoleNom(string $roleNom){
        $this->_RoleNom = $roleNom;
    }
   
    public function addCasting(Casting $casting){
    $this->_castings[] = $casting;
}
    //Fonction pour afficher les acteurs ayant incarné le même rôle
    public function listerActeursRole(){
     $result = "<br>Les acteurs ayant joué le rôle de " . $this->_RoleNom . " :<br>";
        foreach($this->_castings as $casting){
        $result .= "- " . $casting->getActeur(). "<br>";
    }
    return $result;
}
public function __toString(){
    return $this->_RoleNom;
}
}
