<?php

class Sistema {
    // Funções para formatação de datas, horas e valores em PHP

    /**
     * Formata uma data no formato brasileiro (dd/mm/yyyy)
     *
     * @param string $data A data no formato yyyy-mm-dd
     * @return string A data no formato dd/mm/yyyy
     */
    public static function formatarData($data) {
        $timestamp = strtotime($data);
        return date('d/m/Y', $timestamp);
    }

    /**
     * Formata uma hora no formato 24 horas (HH:mm:ss)
     *
     * @param string $hora A hora no formato HH:mm:ss
     * @return string A hora no formato HH:mm:ss
     */
    public static function formatarHora($hora) {
        $timestamp = strtotime($hora);
        return date('H:i:s', $timestamp);
    }

    /**
     * Formata um valor monetário no formato brasileiro (R$ 1.234,56)
     *
     * @param float $valor O valor a ser formatado
     * @return string O valor formatado como moeda brasileira
     */
    public static function formatarValor($valor) {
        return number_format($valor, 2, ',', '.');
    }

    /**
     * Retorna a data atual no formato desejado
     *
     * @param string $formato O formato da data desejado (opcional, padrão é 'd/m/Y')
     * @return string A data formatada conforme o formato especificado
     */
    public static function dataAtual($formato = 'd/m/Y') {
        return date($formato);
    }
}

?>
