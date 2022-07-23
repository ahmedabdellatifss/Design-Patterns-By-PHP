<?php

    namespace Structural\AdapterThirdParty;

    class TokenAuthAdapter implements AuthenticatorInterface
    {

        private $authenticator;

        public function __construct(TokenAutenticator $authenticator)
        {
            $this->authenticator = $authenticator;

        }

        public function login(array $params)
        {
            return $this->authenticator->tokenLogin($params['key'] , $params['token']);
        }
    }