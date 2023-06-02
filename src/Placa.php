<?php

namespace ENGA5;

class Placa{
    private $placa;

    public function setValores($p1){
        $this->placa = $p1;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function verificaComprimento(){
        $tam = strlen($this->placa);
        if ($tam != 7) {
            return 'Invalido';
        }
        return 'Valido';
    }

    public function verificaLetras(){
        if(preg_match('/[a-zA-Z]/', $this->placa[0]) &&
           preg_match('/[a-zA-Z]/', $this->placa[1]) &&
           preg_match('/[a-zA-Z]/', $this->placa[2]) &&
           preg_match('/[a-zA-Z]/', $this->placa[4])){
            return 'Valido';
        }
        return 'Invalido';
    }

    public function verificaNumeros(){
        if(is_numeric($this->placa[3]) &&
           is_numeric($this->placa[5]) &&
           is_numeric($this->placa[6])){
            return 'Valido';
        }
        return 'Invalido';
    }
}
?>