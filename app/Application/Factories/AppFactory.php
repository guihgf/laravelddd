<?php
/**
 * Created by PhpStorm.
 * User: guihgf
 * Date: 19/07/2015
 * Time: 12:03
 */

namespace App\Application\Factories;


abstract class AppFactory
{
    public static final function convertToArray($values){
        $obj=[];


        foreach ($values as $data){

            $destinationReflection = new \ReflectionObject($data);
            $destinationProperties = $destinationReflection->getProperties();

            $prop=[];
            foreach ($destinationProperties as $destinationProperty) {
                $name = $destinationProperty->getName();
                $propDest = $destinationReflection->getProperty($name);
                $propDest->setAccessible(true);
                $prop[$name]=$propDest->getValue($data);
            }

            array_push($obj, $prop);
        }

        if($obj==[]){
            $data=$values;
            $destinationReflection = new \ReflectionObject($data);
            $destinationProperties = $destinationReflection->getProperties();

            $prop=[];
            foreach ($destinationProperties as $destinationProperty) {
                $name = $destinationProperty->getName();
                $propDest = $destinationReflection->getProperty($name);
                $propDest->setAccessible(true);
                $prop[$name]=$propDest->getValue($data);
            }

            array_push($obj, $prop);
        }
        return $obj;
    }
}