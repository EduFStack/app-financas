<?php

class Despesa extends Carteira
{
    public function __construct(float $xValor, string $xCategoria, string $xData, string $xDescricao){
    $this->valor=(-1)*$xValor;
    $this->categoria=$xCategoria;
    parent::__construct($xData, $xDescricao);
    }
    
}