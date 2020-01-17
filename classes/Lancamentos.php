<?php
abstract class Lancamentos {
    private $data;
    private $descricao;

    public function __construct( string $xData, string $xDescricao){
        $this->data = DateTime::createFromFormat("d/m/Y", $xData);
        $this->descricao = $xDescricao;
    }

    abstract public function getValor(): float;

    public function getData(): DateTime{
        return $this->data;
    }

    public function getDescricao(): string{
        return $this->descricao;
    }

}
?>
