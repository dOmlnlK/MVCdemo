<?php

/*
 * controller的基类
 */
namespace framework\core;

class Controller{
    
    protected $smarty;
    
    public function __construct(){
        require_once './framework/vendor/smarty/Smarty.class.php';
        
        $this->smarty = new \Smarty();
        $this->smarty->left_delimiter = '<{';
        $this->smarty->right_delimiter = '}>';
        $this->smarty->setTemplateDir('./application/'.MODULE.'/view');
        $this->smarty->setCompileDir('./application/'.MODULE.'/view/tpl_c') ; 
        
    }
    
    
}