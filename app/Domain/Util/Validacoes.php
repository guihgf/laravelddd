<?php
/**
 * Created by PhpStorm.
 * User: guihgf
 * Date: 19/07/2015
 * Time: 10:28
 */

namespace App\Domain\Util;


class Validacoes
{
    static  function validarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            throw new \InvalidArgumentException("E-mail inválido.");
    }

    static function validarTamanho($campo,$nome,$min,$max){
        if(strlen($campo)<$min || strlen($campo)>$max)
            throw new \InvalidArgumentException($nome." deve possuir entre ".$min." e ".$max." caracteres");
    }

    static function validarNulos($campo,$nome){
        if($campo==null || $campo==""){
            throw new \InvalidArgumentException($nome." não pode ser vazio");
        }
    }

    static function validarData($data){
        if($data==null || $data==""){
            throw new \InvalidArgumentException("Data inválida.");
        }

        list($dd,$mm,$yyyy) = explode('/',$data);
        if (!checkdate($mm,$dd,$yyyy)) {
            throw new \InvalidArgumentException("Data inválida.");
        }

        return $yyyy.'-'.$mm.'-'.$dd;
    }
}