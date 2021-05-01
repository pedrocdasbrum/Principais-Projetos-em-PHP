<?php
  class Validation
  {
    static function validateName($value)
    {
      $vn = "/^[a-zA-Z]{3,60}$/";

      if (preg_match($vn, $value))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    static function validateAge($value)
    {
      $va = "/^[0-9]{2,3}$/";

      if (preg_match($va, $value))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    static function validateCpf($value)
    {
      $vcpf = "/^([0-9]){3}\.([0-9]){3}\.([0-9]){3}-([0-9]){2}$/";
      if (preg_match($vcpf, $value))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    static function validateTel($value)
    {
      $vtel = "/^([0-9]){2,3} [0-9]{1} [0-9]{4}-[0-9]{4}$/";

      if (preg_match($vtel, $value))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    static function validateAddress($value)
    {
      $vaddress = "/^[a-zA-Z]{3,60}$/";

      if (preg_match($vaddress, $value))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    static function validateSelectCar()
    {
      switch ($car)
      {
        case 'Fiat Argo':
          return "Fiat Argo - R$ 53.990,00";
          break;
        case 'Ford Ka':
          return "Ford Ka - R$ 45.490,00";
          break;
        case 'Renault Sandero':
          return "Renault Sandero - R$ 55.990,00";
          break;
        default:
          return "Você não selecionou nenhum automóvel!";
          break;
      }
    }
    /*
    public function testarExpressao($expressao, $variavel)
    {
      return preg_match($expressao,$variavel);
    }

    static function validateName($value)
    {
      $vn = '/^[a-zA-Z]{3,60}$/';

      if (preg_match($vn, $value))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    static function validateAge($value)
    {
      $va = '/^[0-9]{2,3}$/';

      if (preg_match($va, $value))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    static function validateRg($value)
    {
      $vrg = '/^[0-9]{10}$/';

      if (preg_match($vrg, $value))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    static function validateTel($value)
    {
      $vtel = '/^[0-9]{11}$/';

      if (preg_match($vtel, $value))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    static function validateAddress($value)
    {
      $vaddress = '/^[a-zA-Z]{10,60}$/';

      if (preg_match($vaddress, $value))
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    static function validateSelectCar()
    {
      switch ($car)
      {
        case 'Fiat Argo':
          return "Fiat Argo - R$ 53.990,00";
          break;
        case 'Ford Ka':
          return "Ford Ka - R$ 45.490,00";
          break;
        case 'Renault Sandero':
          return "Renault Sandero - R$ 55.990,00";
          break;
        default:
          return "Você não selecionou nenhum automóvel!";
          break;
      }
    }

    //Função para converter tudo em maiusculo:
    function converterMaiusculo($variavel)
    {
      return strtoupper($variavel);
    }

    //Função para converter letras para minúsculo:
    function converterMinusculo($variavel)
    {
      return strtolower($variavel);
    }

    //Função para contar os caracteres:
    function contarCaracteres($variavel)
    {
      return strlen($variavel);
    }

    //Função para converter palavras para primeira letra maiuscula e demais minuscula:
    function converterPrimeiraLetra($variavel)
    {
      return ucwords($variavel);
    }

    //Função para retirar espaços do texto:
    function retirarEspaco($variavel)
    {
      return trim();
    }
    */
  }
 ?>
