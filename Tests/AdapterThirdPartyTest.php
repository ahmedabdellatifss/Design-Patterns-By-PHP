<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\AdapterThirdParty\BasicAuthAdapter;
use Structural\AdapterThirdParty\TokenAuthAdapter;
use Structural\AdapterThirdParty\UserLogin;

class AdapterThirdPartyTest extends TestCase
{
    public function testCanAuthWithBasicAuthLib()
    {
        $basicAuthAdapter = $this->createMock(BasicAuthAdapter::class);
        $basicAuthAdapter->expects($this->once())
            ->method('login')
            ->willReturn('test-test');
        $userLogin = new UserLogin($basicAuthAdapter);
        $userLogin->login(['userName'=>'test' , 'password'=>'test']);
    }

    public function testCanAuthWithTokenAuthLib()
    {
        $tokenAuthAdapter = $this->createMock(TokenAuthAdapter::class);
        $tokenAuthAdapter->expects($this->once())
            ->method('login')
            ->willReturn(base64_decode('test-test'));
        $userLogin = new UserLogin($tokenAuthAdapter);
        $userLogin->login(['key'=>'test' , 'token'=>'test']);
    }
}