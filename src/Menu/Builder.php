<?php

namespace App\Menu; 

use Knp\Menu\FactoryInterface; 
use Symfony\Component\HttpFoundation\RequestStack; 

class Builder   
{ 
    private $factory; 

    /** 
     * @param FactoryInterface $factory 
     */ 
    public function __construct(FactoryInterface $factory) 
    { 
        $this->factory = $factory; 
    } 

    public function mainMenu(RequestStack $requestStack) 
    { 
        $menu = $this->factory->createItem('root'); 

        $menu->addChild('Home', ['route' => 'home']);  

        return $menu; 
    } 
}