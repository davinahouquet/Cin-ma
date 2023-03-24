<?php

class Role{
    private string $_RoleNom;
    private Acteur $_Acteur;
// On utilise array pour dresser une liste des acteurs qui ont joué le rôle en question ($_RoleNom)

    public function __construct(string $roleNom, Acteur $acteur){
        $this->_RoleNom = $roleNom;
        $this->_Acteur = $acteur;
    }

    public function getRoleNom(){
        return $this->_RoleNom;
    }
    public function setRoleNom(string $roleNom){
        $this->_RoleNom = $roleNom;
    }
    public function getActeurRole(){

        return $this->_Acteur;
    }
    public function setActeurRole(Acteur $acteur){
        $this->_Acteur = $acteur;
    }
}
    //Fonction qui permet de lister les acteurs qui ont joué le même rôle


?>