<?php

use PHPUnit\Framework\TestCase;
use ENGA5\Placa;

class PlacaTest extends TestCase {

    /**
     * @dataProvider casosDeTestes1
     */

    public function testTamanhoDaPlaca($placa, $expected) {
        $ln = new Placa;
        $ln->setValores($placa);

        $this->assertEquals($expected, $ln->verificaComprimento());
    }

    public function casosDeTestes1(): array {
        return [
            'Placa vazia.'                                          => [' ', 'Invalido'],
            'Quantidade de caracteres menor que 7.'                 => ['123456', 'Invalido'],
            'Quantidade de caracteres maior que 7.'                 => ['12345678', 'Invalido'],
            'Quantidade de caracteres igual a 7.'                   => ['1234567', 'Valido']
        ];
    }

    /**
     * @dataProvider casosDeTestes2
     */

    public function testLetrasValidas($placa, $expected) {
        $ln = new Placa;
        $ln->setValores($placa);

        $this->assertEquals($expected, $ln->verificaLetras());
    }

    public function casosDeTestes2(): array {
        return [
            'Números onde se esperam letras.'                         => ['1230400', 'Invalido'],
            'Caracteres especiais onde se esperam letras.'            => ['@#$0%00', 'Invalido'],
            'Letras acentuadas onde se esperam letras.'               => ['ÁÀÕ0Ê00', 'Invalido'],
            'Letras inseridas de maneira válida.'                     => ['ABC0D00', 'Valido']
        ];
    }

    /**
     * @dataProvider casosDeTestes3
     */

     public function testNumerosValidos($placa, $expected) {
        $ln = new Placa;
        $ln->setValores($placa);

        $this->assertEquals($expected, $ln->verificaNumeros());
    }

    public function casosDeTestes3(): array {
        return [
            'Letras onde se esperam números.'                         => ['XXXAXBC', 'Invalido'],
            'Caracteres especiais onde se esperam números.'           => ['XXX@X#$', 'Invalido'],
            'Números inseridos de maneira válida.'                    => ['XXX1X23', 'Valido']
        ];
    }
};
?>