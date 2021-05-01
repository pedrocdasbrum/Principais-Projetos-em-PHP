<?php

class Hotel
{
    private $nome;
    private $email;
    private $telefone;
    private $rg;
    private $quarto;   // escolher entre 3 tipos de acomodação
    private $qntDias;  // numero de diárias

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function escolherQuarto()
    {
        $stringDefault = '<br><br>O valor Total das diárias será de R$ ';
        switch ($this->quarto) {
            case 'master':
                return 'Suíte Master – R$ 150,00' . $stringDefault . '' . $this->moneyFormatter(($this->qntDias * 150));
                break;
            case 'familia':
                return 'Suíte Família – R$ 180,00' . $stringDefault . '' . $this->moneyFormatter(($this->qntDias * 180));
                break;
            case 'single':
                return 'Suíte Single – R$ 100,00' . $stringDefault . '' . $this->moneyFormatter(($this->qntDias * 100));
                break;
            default:
                return 'Quarto não selecionado';
                break;
        }
    }
    public function getQuartoSelecionado()
    {
        switch ($this->quarto) {
            case 'master':
                return 'Suíte Master';
                break;
            case 'familia':
                return 'Suíte Família';
                break;
            case 'single':
                return 'Suíte Single';
                break;
            default:
                return 'Quarto não selecionado';
                break;
        }
    }

    public function moneyFormatter($number)
    {
        // por exemplo: 5 dias * 100,00
        $floatValue = $this->floatFormatter($number);     // 500 float

        $moneyValue = number_format($floatValue, 2, ',', '.');  // 500.00

        return $this->addAddons($moneyValue);  // 'R$ 500.00'
    }

    public function floatFormatter($numberToFloat)
    {
        return floatval((float)$numberToFloat);
    }

    public function addAddons($string)
    {
        return 'R$ ' . $string;
    }

/*

300 ---> 300,00  moneyFormatter

300 ---> R$ 300,00 addAddons

300 ---> 300.00  floatFormatter

 */

}// fim da classe





