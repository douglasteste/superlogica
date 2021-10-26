<?php

class Exemplo {

        private $array = [];
        private $novo_array = [];
        private $string_posicoes;

        public function __construct() {                
                for ($i=0; $i < 8; $i++) { 
                        $valor = mt_rand(1,99);
                        array_push($this->array, $valor);
                }
        }

        public function getArray() {
                return $this->array;
        }

        public function getNovoArray() {
                return $this->novo_array;
        }

        public function getStringPosicoes() {
                return $this->string_posicoes;
        }

        public function gerarVariavelPosicoes() {
                $valor_final = '';
                foreach ($this->array as $valor) {
                        $valor_final .= "$valor,";
                }

                if ($valor_final != '') {
                        $this->string_posicoes = substr($valor_final, 0, -1);
                }
        }

        public function criarNovoArray() {
                $string_com_valores = explode(',', $this->string_posicoes);
                $novo_array = [];
                foreach ($string_com_valores as $valor) {
                        array_push($novo_array, $valor);
                }
                $this->novo_array = $novo_array;
                unset($this->array);
        }

        public function buscarNumero14() {
                $retorno = 'Não';
                if (in_array('14', $this->novo_array)) {
                        $retorno = 'Sim';
                }
                return $retorno;
        }

        public function percorrerArrayExcluindoNumerosMenores() {
                $valor_anterior = '';
                $posicoes_removidas = [];
                foreach ($this->novo_array as $posicao => $valor_atual) {
                        if ($valor_anterior == '') {
                                $valor_anterior = $this->novo_array[0];
                        } else {
                                if ($valor_atual < $valor_anterior) {
                                        array_push($posicoes_removidas, $posicao);
                                } else {
                                        $valor_anterior = $valor_atual;
                                }
                        }
                }
                foreach ($posicoes_removidas as $posicao) {
                        unset($this->novo_array[$posicao]);
                }
        }

        public function removerUltimaPosicaoArray() {
                array_pop($this->novo_array);
        }

        public function quantidadeElementosArray() {
                return count($this->novo_array);
        }

        public function inverterPosicaoArray() {
                return array_reverse($this->novo_array);
        }

}