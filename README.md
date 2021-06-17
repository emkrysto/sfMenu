# sfMenu
How to create menu using KNPMENUBUNDLE

# Quick Steps to create the project

## install a new Symfony project (LTS - the latest stable version)
    symfony new sfMenu --version=lts

## move into your new project directory
	cd sfMenu

## start the server in the background
    symfony server:start -d

## install require bundles
    composer req knplabs/knp-menu-bundle
    composer req --dev maker 
    composer req twig
    composer req annotations
	
## generate new HomeController
    php bin/console make:controller Home
	
## change route (scr\controller\HomeController.php)
    * @Route("/home", name="home"
    to 
    * @Route("/", name="home"

## make and go to a new directory
    md src\Menu 
    cd src\Menu

## create a new file 
    touch Builder.php

## add below code to Builder.php file

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