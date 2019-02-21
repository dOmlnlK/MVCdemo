<?php
namespace admin\controller;

use framework\core\Controller;
use framework\core\Factory;
use framework\tools\Upload;
use framework\tools\Thumb;


class CategoryController extends Controller{
    
    public function indexAction(){
        //获取当前已有分类
        $model = Factory::getModel("CategoryModel");
        $sql = 'select * from ask_category';
        $cat_list = $model->select($sql);
        $cat_list = $model->getTreeList($cat_list);
        
        
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('./application/admin/view/category/index.html');
    }
    
    public function addAction(){
        //获取当前已有分类
        $model = Factory::getModel("CategoryModel");
        $sql = 'select * from ask_category';
        $cat_list = $model->select($sql);
        $cat_list = $model->getTreeList($cat_list);
        
        
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('./application/admin/view/category/add.html');
    }
    
    //接收addAction表单传来的数据，并入库
    public function addHandleAction(){
        //处理上传图标
        $file = $_FILES['cat_logo'];
        $upload = new Upload();
        $upload->upload_path = UPLOAD_PATH . 'category/';
        $file_path = $upload->doUpload($file);
        
        //压缩图片
        $thumb = new Thumb($upload->upload_path . $file_path);
        $thumb->thumb_path = THUMB_PATH . 'category/';
        $thumb_path = $thumb->makeThumb(50, 50);
        
        //打包sql语句
        $cat_name = $_POST['cat_name'];
        $cat_desc = $_POST['cat_desc'];
        $parent_id = $_POST['parent_id'];
        
        $values = "(null,'$cat_name','$thumb_path','$cat_desc',$parent_id)";
        //echo $values;
        $sql = "insert into ask_category values $values";
        
        //获取model对象
        $model = Factory::getModel('CategoryModel');
        $ret = $model->add($sql);
        if($ret){
            header('Refresh:3;url=?m=admin&c=Category&a=indexAction');
        }else{
            header('Refresh:3;url=?m=admin&c=Category&a=addHandleAction');
        }
        
        
    }
    
    public function editAction(){
        //查询要修改的分类信息
        $id = $_GET['id'];
        $sql = "select * from ask_category where cat_id=$id";
        $model = Factory::getModel("CategoryModel");
        $cat = $model->select($sql)[0];
        //获取当前所有分类
        $sql = 'select * from ask_category';
        $cat_list = $model->select($sql);
        $cat_list = $model->getTreeList($cat_list);
        
        $this->smarty->assign('cat',$cat);
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('./application/admin/view/category/edit.html');
    }
    
    //处理修改表单
    public function editHandleAction(){
        //判断是否更新了图标，是的话需要删除旧的图标图片
        //如果更新了图标
        $thumb_path = $_POST['old_cat_logo'];
        if($_FILES['cat_logo']['name']){
            //旧的缩略图路径
            $old_thumb = THUMB_PATH . 'category/' . $_POST['old_cat_logo'];
            //旧的原图路径
            $old_origin = UPLOAD_PATH . 'category/' . str_replace('thumb_', '', $_POST['old_cat_logo']);
            //删除两个旧相关图标文件
            if(file_exists($old_thumb)){
                unlink($old_thumb);
            }
            if(file_exists($old_origin)){
                unlink($old_origin);
            }
            
            
            
            //处理新的图标文件
            //处理上传图标
            $file = $_FILES['cat_logo'];
            $upload = new Upload();
            $upload->upload_path = UPLOAD_PATH . 'category/';
            $file_path = $upload->doUpload($file);
            
            //压缩图片
            $thumb = new Thumb($upload->upload_path . $file_path);
            $thumb->thumb_path = THUMB_PATH . 'category/';
            $thumb_path = $thumb->makeThumb(50, 50);
            
            
            
        }
        
        //打包sql语句
        $cat_id = $_POST['cat_id'];
        $cat_name = $_POST['cat_name'];
        $cat_desc = $_POST['cat_desc'];
        $parent_id = $_POST['parent_id'];
        $sql = "update ask_category set cat_name='$cat_name',cat_desc='$cat_desc',cat_logo='$thumb_path',parent_id=$parent_id where cat_id=$cat_id";
        
        //获取model对象进行数据更新
        $model = Factory::getModel('CategoryModel');
        $ret = $model->update($sql);
        if($ret){
            header('Refresh:3;url=?m=admin&c=Category&a=indexAction');
        }else{
            header("Refresh:3;url=?m=admin&c=Category&a=editAction&id=$cat_id");
        }
        
    
    }
    
    public function deleteAction(){
        $cat_id = $_GET['id'];
        //判断该分类是否有子类
        $model = Factory::getModel('CategoryModel');
        $ret = $model->isParent($cat_id);
        
        if($ret){
            //存在子类时
            echo '该分类存在子类，暂时不能删除';
            header("Refresh:3;url=?m=admin&c=Category&a=indexAction");
        }else{
            //没有子类时，删除时要把图标文件删除
            $cat_logo = $model->select("select cat_logo from ask_category where cat_id=$cat_id")[0]['cat_logo'];
            //旧的缩略图路径
            $old_thumb = THUMB_PATH . 'category/' . $cat_logo;
            //旧的原图路径
            $old_origin = UPLOAD_PATH . 'category/' . str_replace('thumb_', '', $cat_logo);
            //删除两个旧相关图标文件
            if(file_exists($old_thumb)){
                unlink($old_thumb);
            }
            if(file_exists($old_origin)){
                unlink($old_origin);
            }
            
            $ret = $model->delete($cat_id);
            header("Refresh:3;url=?m=admin&c=Category&a=indexAction");
            
        }
        
        
    }
}