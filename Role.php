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
?>