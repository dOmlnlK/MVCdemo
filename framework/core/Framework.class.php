<?php
namespace framework\core;

/*
 * 入口分装类
 */


class Framework{
    
    public function __construct(){
        
        $this->initConst();
        $this->initAutoload();
        $this->initMCA();
        $this->dispatch();
        
    }
    
    public function initAutoload(){
        spl_autoload_register(array($this,'autoloader'));
    }
    
    public function autoloader($className){
        //echo '需要加载：'.$className . '<br>';
        
        $className_arr = explode('\\', $className);
        
        $className = str_replace('\\', '/', $className);
        
        //判断要加载的是类还是接口，确定文件后缀
        
        if(substr($className_arr[count($className_arr)-1], 0,2)=='I_'){
            $fix = '.interface.php';
        }else{
            $fix = '.class.php';
        }
        
        //判断需要加载的类的根位置
        if($className_arr[0] == 'framework'){
            $basic_path = './';
        }else{
            $basic_path = './application/';
        }
        $class_path = $basic_path . $className . $fix;
        
        //只加载符合我们定义的类，不加载第三方类需要的加载类
        if(file_exists($class_path)){
            require_once $class_path;
        }
      
    }
    
    public function initMCA(){
        //前台or后台
        $m = isset($_GET['m'])?$_GET['m']:'home';
        define('MODULE',$m);
        //选择哪个控制器
        $c = isset($_GET['c'])?$_GET['c']:'Index';
        define('CONTROLLER',$c);
        //执行哪个动作方法
        $a = isset($_GET['a'])?$_GET['a']:'indexAction';
        define('ACTION',$a);
    }
    
    public function dispatch(){
        $className = MODULE.'\controller\\' . CONTROLLER . 'Controller';

        $controller = new $className;
        $a = ACTION;
        $controller->$a();
    }
    
    public function initConst(){
        define('PUBLIC_PATH', '/MVC/application/public/');
        
        //上传路径不能使用根目录
        define('UPLOAD_PATH', './application/public/uploads/');
        //压缩图路径
        define('THUMB_PATH', './application/public/thumbs/');
    }
    
    
    
}