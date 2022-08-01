<?php

    namespace Structural\FluentInterface;

    class QueryBuilder implements QueryBuilderInterface
    {
        private array $conditions;
        private array $fields;
        private string $table;
        private string $alias;

        public function select(array $fields):self
        {
            $this->fields = $fields;
            return $this;
        }

        public function from(string $table , string $alias):self
        {
            $this->table = $table;
            $this->alias  = $alias;
            return $this;
        }

        public function where(array $coditions):self
        {
            $this->conditions = $coditions;
            return $this;
        }

        public function getSQL()
        {
            return  sprintf('SELECT %s FROM %s AS %s WHERE %s',
            implode(',',$this->fields),
            $this->table,
            $this->alias,
            implode('AND',$this->conditions)
            );      
        }


    }