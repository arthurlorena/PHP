<?php

/**
 * Calcula o valor de cada parcela de um produto.
 *
 * @param float $preco Valor total do produto.
 * @param int   $parc Quantidade de parcelas.
 *
 * @return string Valor da parcela formatado em moeda brasileira.
 *
 * @throws InvalidArgumentException Quando a quantidade de parcelas for menor ou igual a zero.
 */
function calcularParcela(float $preco, int $parc): string
{
    if ($parc <= 0) {
        throw new InvalidArgumentException(
            'A quantidade de parcelas deve ser maior que zero.'
        );
    }

    return formatarValor($preco / $parc);
}

/**
 * Formata um valor numérico para o padrão monetário brasileiro.
 *
 * @param float $valor Valor a ser formatado.
 *
 * @return string Valor formatado no padrão "R$ 0,00".
 */
function formatarValor(float $valor): string
{
    return 'R$ ' . number_format($valor, 2, ',', '.');
}