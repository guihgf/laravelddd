<?php
/**
 * Created by PhpStorm.
 * User: guihgf
 * Date: 19/07/2015
 * Time: 10:35
 */

namespace App\Infra\Repositories;


use App\Domain\Interfaces\Repositories\IUsuarioRepository;
use App\Infra\EntityConfig\Usuario;
use App\Infra\Factories\UsuarioFactory;

class UsuarioRepository implements IUsuarioRepository
{
    public function  listar()
    {
        return UsuarioFactory::makeDomainModelList(Usuario::all());
    }

}