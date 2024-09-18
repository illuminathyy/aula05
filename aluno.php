<?php
    class aluno{
        public $nome;
        public $sexo;
        public $cpf;
        public $dataNascimento;
    

    public function __construct($nome, $sexo, $cpf, $dataNascimento) {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
}
    public function idade(){
        $ano = substr($this->dataNascimento,0,4);
        $atual = date("Y");
        return $atual - $ano;
}
    }
?>