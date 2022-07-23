<?php

    namespace Structural\AdapterThirdParty;

use BasicAuth\BasicAuthenticator;

    class BasicAuthAdapter implements AuthenticatorInterface
    {

        private $authenticator;

        public function __construct(BasicAuthenticator $authenticator)
        {
            $this->authenticator = $authenticator;

        }

        public function login(array $params)
        {
            return $this->authenticator->basicLogin($params['userName'] , $params['password']);
        }
    }    