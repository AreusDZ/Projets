<?php

class serviceService{


    public static function add($noserv,$ville,$serv) {
        
        $service = new Service();
        $service->setNoServ($noserv)->setVille($ville)->setService($serv);
        
        return ServiceMysqliDAO::addService($service);
    
    
    }

    public static function delete($noserv) {
        
    
            
        return ServiceMysqliDAO::deleteService($noserv);
    
    }

    public static function modify($noserv,$ville,$serv) {
        
        $service = new Service();
        $service->setNoServ($noserv)->setVille($ville)->setService($serv);

        return ServiceMysqliDAO::modifyService($service);
    
        
            
    }

    public static function tabGenerate(){
        return ServiceMysqliDAO::generateTab();
    }
}