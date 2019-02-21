<?php

namespace home\controller;
use framework\core\Controller;
use framework\core\Factory;

class IndexController extends Controller{
    
    public function indexAction(){
        //获取当前已有分类
        $model = Factory::getModel("CategoryModel");
        $sql = 'select * from ask_category';
        $cat_list = $model->select($sql);
        $cat_list = $model->getTreeList($cat_list);
        
        
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('./application/home/view/index.html');
    }
    
}