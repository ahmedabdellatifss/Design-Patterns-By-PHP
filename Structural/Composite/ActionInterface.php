<?php 

    namespace Structural\Composite;

interface ActionInterface
{
    public function add(ProductInterface $product);
    public function remove(ProductInterface $product);

}