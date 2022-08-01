<?php

    namespace Structural\FluentInterface;

    interface  QueryBuilderInterface
    {
        public function select(array $filds);
        public function from(string $table , string $alies);
        public function where(array $conditions);
    }