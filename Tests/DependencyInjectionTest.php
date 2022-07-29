<?php


namespace Tests;

use Structural\DependncyInjection\DataBaseConfig;
use Structural\DependncyInjection\DataBaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testCanGetDataBaseStringURLFromDataBaseConnection(): void
    {
        $dataBaseConfig = new DataBaseConfig('localhost' ,'root','root','3306' ,'admin');
        $dataBaseConnection = new DataBaseConnection($dataBaseConfig);

        $this->assertEquals('mysql://root:root@localhost:3306/admin',$dataBaseConnection->getConnectionString());
    }
}