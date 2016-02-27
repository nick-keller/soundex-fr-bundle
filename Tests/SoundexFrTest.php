<?php

namespace Keller\SoundexFrBundle\Tests;

require_once __DIR__ . '/../Services/SoundexFr.php';
use Keller\SoundexFrBundle\Services\SoundexFr;

class SoundexFrTest extends \PHPUnit_Framework_TestCase
{
    private $soudexFr;

    public function setUp()
    {
        $this->soudexFr = new SoundexFr();
    }

    /**
     * @dataProvider wordsProvider
     */
    public function testPhonetique($input, $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->soudexFr->phonetique($input));
    }

    public function wordsProvider()
    {
        return array(
            ['zoo', 'ZOU'],
            ['saoul', 'SOUL'],
            ['Éléphant', 'ELEFAN'],
            ['Dîner', 'DIN'],
            ['manger', 'MANJ'],
            ['echo', 'EKO'],
            ['coeur', 'KER'],
            ['physique', 'FISIK'],
            ['beaucoup', 'BOKOU'],
        );
    }
}