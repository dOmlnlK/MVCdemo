<?php

namespace admin\controller;

use framework\core\Controller;
use framework\core\Factory;


class TagController extends Controller{
    
    public function indexAction(){
        $model = Factory::getModel('admin\model\GoodsModel');
        $goods_list = $model->select();
        $this->smarty->assign('goods_list',$goods_list);
        $this->smarty->display('./application/admin/view/goods_list.tpl');
    }
    
    public function selectAction(){
        
    }
    
    public function editAction(){
        
    }
    
    public function deleteAction(){
        
    }
    
    
}