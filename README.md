Soundex FR Bundle
=================

The bundle provides a **Soundex FR** integration for your Symfony2 Project. It automatically registers the new 
```soundex_fr``` service. Original Soundex FR by [�douard BERG�](http://www.roudoudou.com).

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
$this->get('soundex_fr')->phonetique('�l�phant'); // ELEFAN
```

License
=======

Cet algorithme et son application en PHP sont tous deux distribu�s sous la licence

        Creative Commons Paternit� - Pas d'Utilisation Commerciale 2.0
            http://creativecommons.org/licenses/by-nc/2.0/fr/
       
Vous �tes libres :
* de reproduire, distribuer et communiquer cette cr�ation au public
* de modifier cette cr�ation

Selon les conditions suivantes :
* Paternit�. Vous devez citer le nom de l'auteur original de la mani�re indiqu�e
    par l'auteur de l'oeuvre ou le titulaire des droits qui vous conf�re cette
    autorisation (mais pas d'une mani�re qui sugg�rerait qu'ils vous soutiennent
    ou approuvent votre utilisation de l'oeuvre).
    Demande de l'auteur: Citer "�douard BERG�" et/ou "http://www.roudoudou.com"
* Pas d'Utilisation Commerciale. Vous n'avez pas le droit d'utiliser cette
    cr�ation � des fins commerciales sauf autorisation de l'auteur.