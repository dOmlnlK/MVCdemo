<?php

/*
 * 工厂类生产单例model对象
 */

namespace framework\core;


class Factory{
    static private $model_arr = array();
    
    private function __construct(){}
    
    static public function getModel($modelName){
        
        $modelName = MODULE.'\model\\'.$modelName;
        if(isset(self::$model_arr[$modelName])){
            return self::$model_arr[$modelName];
        }
        self::$model_arr[$modelName] = new $modelName;
        return self::$model_arr[$modelName];
    }
       
    
}
