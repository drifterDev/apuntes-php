# Comandos básicos de Composer

1. composer init
2. composer require dependencia
3. composer requier --dev dependencia
4. composer install
5. composer update
6. composer self.update
7. composer dump-autoload
8. composer show 
9. composer dump 
10. composer remove dependencia

Para configurar `composer.json`:

* minimum-stability (dev, alpha, beta, RC, stable)
* autoload.files (funciones, constantes, etc)
* autoload.classmap (clases)
* autoload.psr-4 (Se hace enfasis en la carpeta principal)
* autoload.psr-0 (Se tiene que poner todo el path)
