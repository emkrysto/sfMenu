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