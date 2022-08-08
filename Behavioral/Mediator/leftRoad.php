<?php

    namespace Behavioral\Mediator;

    class leftRoad extends Road
    {
        const ID = "LEFT";

        function getId(): string
        {
            return  self::ID;
        }
    }