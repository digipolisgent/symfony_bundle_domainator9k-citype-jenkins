<?php


namespace DigipolisGent\Domainator9k\CiTypes\JenkinsBundle\Tests\Fixtures;

use DigipolisGent\Domainator9k\CoreBundle\Entity\AbstractApplication;

class FooApplication extends AbstractApplication
{

    public static function getType()
    {
        return 'foo';
    }

    public function setId($id){
        $this->id = $id;
    }
}