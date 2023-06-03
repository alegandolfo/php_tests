<?php


use PHPUnit\Framework\TestCase;
use ENGA5\ListaNumerica;

class ListaNumericaTest extends TestCase {

    /**
     * @dataProvider casosDeTestes
     */

    public function testQuantidadeValores($vet, $expected) {
        $ln = new ListaNumerica;
        $ln->setValores($vet);

        $this->assertEquals($expected, $ln->verificaQuantidade());
    }

    public function casosDeTestes(): array {
        return [
            'Quantidade vazia.'                  => [[], 'Invalido'],
            'Quantidade menor que 4.'            => [[10001, 10002, 10003], 'Invalido'],
            'Quantidade e intervalo válido.'     => [[10001, 10002, 10003, 10004], 'Valido']
        ];
    }

    /**
     *@dataProvider casosDeTestes2
     */

    public function testValores($vet, $expected) {
        $ln = new ListaNumerica;
        $ln->setValores($vet);

        $this->assertEquals($expected, $ln->verificaValores());
    }

    public function casosDeTestes2(): array {
        return [
            'Valor vazio.'                         => [[], 'Invalido'],
            'Valor menor do que 10000.'            => [[55555, 66666, 77777, 3333], 'Invalido'],
            'Valores validos.'                     => [[55555, 66666, 77777, 33333], 'Valido']
        ];
    }

    /*
    public function testQuantidadeDeValoresVazios(){
        $lnq = new ListaNumerica;
        $lnq->setValores([]);

        $this->assertEquals('Invalido', $lnq->verificaQuantidade());
    }

    public function testUmValorMenorDoQue10000(){
        $lnq = new ListaNumerica;
        $lnq->setValores([9999]);

        $this->assertEquals('Invalido', $lnq->verificaValores());
    }

    public function testQuantidadeEIntervaloDeValoresValidos(){
        $lnq = new ListaNumerica;
        $lnq->setValores([23333, 55555, 55556, 55577, 67890]);

        $this->assertEquals('Valido', $lnq->verificaQuantidade());
        $this->assertEquals('Valido', $lnq->verificaValores());
    }

    public function testMaisQue10Valores(){
        $lnq = new ListaNumerica;
        $lnq->setValores([10001, 10002, 10003, 10004, 10005, 10006, 10007, 10008, 10009, 10010, 10011]);

        $this->assertEquals('Invalido', $lnq->verificaQuantidade());
    }

    public function testMenosQue4Valores(){
        $lnq = new ListaNumerica;
        $lnq->setValores([10001, 10002, 10003]);

        $this->assertEquals('Invalido', $lnq->verificaQuantidade());
    }

    public function testExatamente10Valores(){
        $lnq = new ListaNumerica;
        $lnq->setValores([10001, 10002, 10003, 10004, 10005, 10006, 10007, 10008, 10009, 10010]);

        $this->assertEquals('Valido', $lnq->verificaQuantidade());
    }

    public function testUmValorMaiorQue99999(){
        $lnq = new ListaNumerica;
        $lnq->setValores([100000]);

        $this->assertEquals('Invalido', $lnq->verificaValores());
    }

    public function testUmValorIgualA99999(){
        $lnq = new ListaNumerica;
        $lnq->setValores([99999]);

        $this->assertEquals('Valido', $lnq->verificaValores());
    }

    public function testUmValorIgualA10000(){
        $lnq = new ListaNumerica;
        $lnq->setValores([10000]);

        $this->assertEquals('Valido', $lnq->verificaValores());
    }
*/
};
?>