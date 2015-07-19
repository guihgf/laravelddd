<?php
/**
 * Created by PhpStorm.
 * User: guihgf
 * Date: 19/07/2015
 * Time: 10:40
 */

namespace App\Infra\Factories;


class UsuarioFactory extends BaseFactory
{
    private static $model="App\\Domain\\Entities\\Usuario";

    public static final function makeDomainModel($infraModel){
        $map = self::createMap(self::$model);

        $map->id=$infraModel->id;
        $map->email=$infraModel->email;
        $map->senha=$infraModel->senha;
        $map->nome=$infraModel->nome;
        $map->dataCadastro=$infraModel->data_cadastro;
        $map->dataCancelamento=$infraModel->data_cancelamento;
        $map->dataReativacao=$infraModel->data_reativacao;
        $map->status=$infraModel->status;

        $usuario=self::convertToModel($map, self::$model);

        return $usuario;
    }

    public static final function makeDomainModelList($infraModelList){
        $usuarios=array();
        if($infraModelList){
            foreach ($infraModelList as $infraModel){
                $obj=self::makeDomainModel($infraModel);
                array_push($usuarios, $obj);
            }
        }

        return $usuarios;
    }
}