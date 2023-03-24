<?php

class Role{
    private string $_RoleNom;
<<<<<<< HEAD
    private Acteur $_Acteur;
// On utilise array pour dresser une liste des acteurs qui ont joué le rôle en question ($_RoleNom)

    public function __construct(string $roleNom, Acteur $acteur){
        $this->_RoleNom = $roleNom;
        $this->_Acteur = $acteur;
=======
    private array $_ActeurRole;
// On utilise array pour dresser une liste des acteurs qui ont joué le rôle en question ($_RoleNom)
}
    public function __construct(string $roleNom, array $acteurRole){
        $this->_RoleNom = $roleNom;
        $this->_ActeurRole = [];
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
    }

    public function getRoleNom(){
        return $this->_RoleNom;
    }
    public function setRoleNom(string $roleNom){
        $this->_RoleNom = $roleNom;
    }
    public function getActeurRole(){
<<<<<<< HEAD
        return $this->_Acteur;
    }
    public function setActeurRole(Acteur $acteur){
        $this->_Acteur = $acteur;
    }
}
    //Fonction qui permet de lister les acteurs qui ont joué le même rôle

=======
        return $this->_ActeurRole;
    }
    public function setActeurRole(array $acteurRole){
        $this->_ActeurRole = $acteurrole;
    }

    //Fonction qui permet de lister les acteurs qui ont joué le même rôle
>>>>>>> 704311b613a2d39ba25eba5836dc785582346805
?>