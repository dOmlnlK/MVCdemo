<?php
/* Smarty version 3.1.30, created on 2019-01-13 11:56:53
  from "C:\www\MVC\application\admin\view\category\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c3b2785bf2601_68716591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0ec2665914f6642c723a23e0188570e112aafc1' => 
    array (
      0 => 'C:\\www\\MVC\\application\\admin\\view\\category\\index.html',
      1 => 1547380571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/layout.html' => 1,
  ),
),false)) {
function content_5c3b2785bf2601_68716591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
f	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19287588275c3b2785bf1ca8_70553175', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../common/layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_19287588275c3b2785bf1ca8_70553175 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="aw-header">
        <button class="btn btn-sm mod-head-btn pull-left">
         <i class="icon icon-bar"></i>
        </button>

        <div class="mod-header-user">
            <ul class="pull-right">

                <li class="dropdown username">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="">
                        <img width="30" class="img-circle" src="<?php echo PUBLIC_PATH;?>
common/avatar-mid-img.png">
                        itbull
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu pull-right mod-user">
                        <li>
                            <a target="_blank" href="">
                                <i class="icon icon-user"></i>
                                账户
                            </a>
                        </li>

                        <li>
                            <a href="login.html">
                                <i class="icon icon-logout"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div id="aw-side" class="aw-side ps-container">
        <div class="mod">
            <div class="mod-logo">
                <img alt="" src="<?php echo PUBLIC_PATH;?>
admin/img/logo.png" class="pull-left">
                <h1>有问必答</h1>
            </div>

            <div class="mod-message">
                <div class="message">
                    <a title="首页" target="_blank" href="../index.html" class="btn btn-sm">
                        <i class="icon icon-home"></i>
                    </a>

                    <a title="退出" href="login.html" class="btn btn-sm">
                        <i class="icon icon-logout"></i>
                    </a>
                </div>
            </div>

            <ul class="mod-bar">
                <input type="hidden" val="0" id="hide_values">
                <li>
                    <a class=" icon icon-ul" href="index.html">
                        <span>摘要信息</span>
                    </a>
                </li>

                <li>
                    <a data="icon" class=" icon icon-reply active" href="javascript:;">
                        <span>内容管理</span>
                    </a>

                    <ul class="hide" style="display: block;">
                        <li>
                            <a class="active" href="category.html">
                                <span>分类管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="question.html">
                                <span>问题管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="topic.html">
                                <span>话题管理</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data="icon" class=" icon icon-user" href="javascript:;">
                        <span>用户管理</span>
                    </a>

                    <ul class="hide">
                        <li>
                            <a href="user.html">
                                <span>用户列表</span>
                            </a>
                        </li>
                        <li>
                            <a href="role.html">
                                <span>用户角色</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data="icon" class="icon icon-setting" href="javascript:;">
                        <span>全局设置</span>
                    </a>

                    <ul class="hide">
                        <li>
                            <a href="site.html">
                                <span>站点信息</span>
                            </a>
                        </li>
                        <li>
                            <a href="regedit.html">
                                <span>注册访问</span>
                            </a>
                        </li>
                        <li>
                            <a href="mail.html">
                                <span>邮件设置</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data="icon" class=" icon icon-job" href="javascript:;">
                        <span>工具</span>
                    </a>

                    <ul class="hide">
                        <li>
                            <a href="tool.html">
                                <span>系统维护</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="ps-scrollbar-x-rail" style="width: 235px; display: none; left: 0px; bottom: 3px;">
            <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 607px; display: inherit; right: 0px;">
            <div class="ps-scrollbar-y" style="top: 0px; height: 560px;"></div>
        </div>
    </div>

    <div class="aw-content-wrap">
        <div class="mod">
            <div class="mod-head">
                <h3>
                    <span class="pull-left">分类管理</span>
                </h3>
            </div>

            <div class="tab-content mod-body">
                <div class="alert alert-success hide error_message"></div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>分类标题</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <form onsubmit="return false" method="post" action="#" id="category_form"></form>
                            
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_list']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>                
                            	<tr>
                            		<td>
                                		<a href="#"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</a>
                            		</td>
                            
		                            <td>
		                                <div class="col-sm-6 clo-xs-12 col-lg-offset-3">
		                                    0
		                                </div>
		                            </td>
		                            <td>
		                                <a title="" class="icon icon-edit md-tip" data-toggle="tooltip" href="?m=admin&c=Category&a=editAction&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
" data-original-title="编辑"></a>
		                                <a title="" class="icon icon-trash md-tip" data-toggle="tooltip"  data-original-title="删除" href="?m=admin&c=Category&a=deleteAction&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
"></a>
		                                
		                            </td>
	                        	</tr>
                        	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        

                        </tbody>
                        <tfoot class="mod-foot-center">
                        <tr>
                            <td colspan="3">
                            <form onsubmit="return false" method="post" action="http://localhost/wecenter/?/admin/ajax/save_category/" id="add_category_form">
                               
                                <div class="pull-right" style="margin-right: 150px">
                                 <a class="btn-primary btn" href="?m=admin&c=category&a=addAction">添加分类</a>
                                </div>
                            </form>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="hide" id="target-category">
            <option value="1">默认分类</option>    
        </div>
    </div>


    <div class="aw-footer">
        <p>
            Copyright &copy; 2016-2099 - Powered By
            <a target="blank" href="http://helloitbull.net/">有问必答 1.0</a>
        </p>
    </div>

    <?php
}
}
/* {/block "content"} */
}
