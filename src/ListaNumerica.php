<?php

namespace ENGA5;

class ListaNumerica{
    private $valores;

    public function setValores($v1){
        $this->valores = $v1;
    }

    public function getValores(){
        return $this->valores;
    }

    public function verificaQuantidade(){
        $tam = sizeof($this->valores);
        if ($tam <= 0) {
            return 'Invalido';
        }
        $tam = sizeof($this->valores);
        if($tam >= 4 && $tam <= 10){
            return 'Valido';
        }

        return 'Invalido';
    }

    public function verificaValores(){
        $tam = sizeof($this->valores);
        if ($tam <= 0) {
            return 'Invalido';
        }
        for($i = 0; $i < $tam; $i++){
            if($this->valores[$i] < 10000 || $this->valores[$i] > 99999){
                return 'Invalido';
            }
        }
        return 'Valido';
    }
}

/*
$ln = new ListaNumerica;
$vet = array(10001, 100020, 10003, 10004, 102000);
$ln->setValores($vet);
echo $ln->verificaQuantidade() . '<br>';
echo $ln->verificaValores() . '<br>';
*/
?>