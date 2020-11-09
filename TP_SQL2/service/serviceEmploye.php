<?php

class serviceEmploye {

    public static function add($no_emp,$nom,$prenom,$emploi,$embauche,$salaire,$commission,$noserv,$sup) {
        
        $employe = new Employe();
        $employe->setNoEmploye($no_emp)->setNom($nom)->setPrenom($prenom)->setEmploi($emploi)
        ->setEmbauche($embauche)->setSalaire($salaire)->setCommission($commission)->setNoServ($noserv)
        ->setNoSup($sup);
            
        return EmployeMysqliDAO::addEmployes($employe);
    
    }

    public static function delete($no_emp) {
        
    
            
        return  EmployeMysqliDAO::deleteEmployes($no_emp);
    
    }

    public static function modify($no_emp,$nom,$prenom,$emploi,$embauche,$salaire,$commission,$noserv,$sup){
        
        $employe = new Employe();
        $employe->setNoEmploye($no_emp)->setNom($nom)->setPrenom($prenom)->setEmploi($emploi)
        ->setEmbauche($embauche)->setSalaire($salaire)->setCommission($commission)->setNoServ($noserv)
        ->setNoSup($sup);

    return  EmployeMysqliDAO::modifyEmployes($employe);
        
            
    }

    public static function tabGenerate(){
        return EmployeMysqliDAO::generateTab();
    }
}