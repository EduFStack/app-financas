<?php

class Extrato{
    private $lancamentos = [];

    public function adicionarLancamento(Lancamentos $Lancamento){
        $this->lancamentos[]=$Lancamento;
    }
}