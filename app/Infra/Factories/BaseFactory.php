<?php
/**
 * Created by PhpStorm.
 * User: guihgf
 * Date: 19/07/2015
 * Time: 10:42
 */

namespace App\Infra\Factories;


abstract class BaseFactory
{
    protected static final function createMap($class){
        $class = new \ReflectionClass("$class");
        $properties = $class->getProperties();

        foreach ($properties as $property) {
            $name = $property->getName();
            $propertyVal = $class->getProperty($name);
            $propertyVal->setAccessible(true);
        }

        return $class;

    }

    protected static final function convertToModel($map,$model){
        $model=new $model();

        $class = new \ReflectionClass($model);
        $properties = $class->getProperties();

        foreach ($properties as $property) {
            $name = $property->getName();

            if (isset($map->$name)) {

                $propertyVal = $map->getProperty($name);
                $propertyVal->setAccessible(true);
                $propertyVal->setValue($model,$map->$name);
            }
        }

        return $model;
    }
}