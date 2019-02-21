<?php
/*
 * model类的基类
 */

namespace framework\core;

use framework\dao\DaoMySQLi;

class Model{
    protected $dao;
    
    public function __construct(){
        
        $option = array(
            'host'=>'localhost',
            'user'=>'root',
            'pwd'=>'q123456',
            'dbname'=>'ask',
            'charset'=>'utf8',
            'port'=>3306
        );
        
        $this->dao = DaoMySQLi::getSingleton($option);
        
    }
    
    //添加方法
    public function add($sql){
        
        return $this->dao->update($sql);
    }
    
    //删除方法
    public function delete($cat_id){
        $sql = "delete from ask_category where cat_id=$cat_id";
        return $this->dao->update($sql);
        
    }
    
    //修改方法
    public function update($sql){
        return $this->dao->update($sql);
    }
    
    //查询方法
    public function select($sql){
        return $this->dao->query($sql);
    }
    
    
    
}