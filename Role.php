<?php

class Role{
    private string $_RoleNom;
    private array $_ActeurRole;
// On utilise array pour dresser une liste des acteurs qui ont joué le rôle en question ($_RoleNom)
}
    public function __construct(string $roleNom, array $acteurRole){
        $this->_RoleNom = $roleNom;
        $this->_ActeurRole = [];
    }

    public function getRoleNom(){
        return $this->_RoleNom;
    }
    public function setRoleNom(string $roleNom){
        $this->_RoleNom = $roleNom;
    }
    public function getActeurRole(){
        return $this->_ActeurRole;
    }
    public function setActeurRole(array $acteurRole){
        $this->_ActeurRole = $acteurrole;
    }

    //Fonction qui permet de lister les acteurs qui ont joué le même rôle
?>