<?php
/**
 * Created by PhpStorm.
 * User: guihgf
 * Date: 19/07/2015
 * Time: 11:03
 */

namespace App\Application;


use App\Application\Interfaces\IUsuarioApp;
use App\Application\Factories\AppFactory;
use App\Domain\Interfaces\Repositories\IUsuarioRepository;

class UsuarioApp  implements  IUsuarioApp
{
    private $repo;

    public function __construct(IUsuarioRepository $repo){
        $this->repo=$repo;
    }

    public function listar()
    {
        $usuarios=$this->repo->listar();
        if($usuarios)
            $usuarios=AppFactory::convertToArray($usuarios);
        else
            $usuarios=[];
        return $usuarios;
    }

}