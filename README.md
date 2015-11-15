Soundex FR Bundle
=================

The bundle provides a **Soundex FR** integration for your Symfony2 Project. It automatically registers the new 
```soundex_fr``` service. Original Soundex FR by [Édouard BERGÉ](http://www.roudoudou.com).

Installation
============

Require the bundle with composer:
```sh
composer require keller/soundex-fr-bundle
```

Add bundle to your application kernel:
```php
// app/AppKernel.php
public function registerBundles()
{
    return array(
        // ...
        new Keller\SoundexFrBundle\KellerSoundexFrBundle(),
        // ...
    );
}
```

Usage
=====

The ```soundex_fr``` service is very simple to use:
```php
$this->get('soundex_fr')->phonetique('Éléphant'); // ELEFAN
```

License
=======

Cet algorithme et son application en PHP sont tous deux distribués sous la licence

        Creative Commons Paternité - Pas d'Utilisation Commerciale 2.0
            http://creativecommons.org/licenses/by-nc/2.0/fr/
       
Vous êtes libres :
* de reproduire, distribuer et communiquer cette création au public
* de modifier cette création

Selon les conditions suivantes :
* Paternité. Vous devez citer le nom de l'auteur original de la manière indiquée
    par l'auteur de l'oeuvre ou le titulaire des droits qui vous confère cette
    autorisation (mais pas d'une manière qui suggérerait qu'ils vous soutiennent
    ou approuvent votre utilisation de l'oeuvre).
    Demande de l'auteur: Citer "Édouard BERGÉ" et/ou "http://www.roudoudou.com"
* Pas d'Utilisation Commerciale. Vous n'avez pas le droit d'utiliser cette
    création à des fins commerciales sauf autorisation de l'auteur.