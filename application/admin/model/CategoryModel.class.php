<?php
namespace admin\model;

use framework\core\Model;
use framework\core\Factory;

class CategoryModel extends Model{
    
    public function getTreeList($cat_list,$parent_id=0,$level=0){
        static $tree = array();
        foreach($cat_list as $cat){
            if($cat['parent_id']==$parent_id){
                $cat['level'] = $level;
                $tree[] = $cat;
                $this->getTreeList($cat_list,$cat['cat_id'],$level+1);
            }  
        }
        
        return $tree;
        
    }
    
    public function isParent($cat_id){
        $sql = "select 1 from ask_category where parent_id=$cat_id";
        return $this->dao->fetchone($sql);
    }
   
}  