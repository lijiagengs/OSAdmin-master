<?php /* Smarty version Smarty-3.1.15, created on 2016-07-26 18:23:56
         compiled from "F:\CI\OSAdmin-master\uploads\include\template\xhdoctor\healthinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3836579712dcd374e7-17789616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f72253015a6b4b9f7e680907a611acf021d69923' => 
    array (
      0 => 'F:\\CI\\OSAdmin-master\\uploads\\include\\template\\xhdoctor\\healthinfo.tpl',
      1 => 1469528554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3836579712dcd374e7-17789616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_579712dd020ea0_14798410',
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'osadmin_quick_note' => 0,
    'healthinfo' => 0,
    'healthin' => 0,
    'page_no' => 0,
    'page_html' => 0,
    'osadmin_action_confirm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579712dd020ea0_14798410')) {function content_579712dd020ea0_14798410($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>

<?php echo $_smarty_tpl->tpl_vars['osadmin_quick_note']->value;?>


<div class="btn-toolbar" style="margin-bottom:2px;">
    <a href="healthinfo_add.php" class="btn btn-primary"><i class="icon-plus"></i>健康知识</a>
</div>

</div>
    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">健康信息列表</a>
        <div id="page-stats" class="block-body collapse in">
               <table class="table table-striped">
              <thead>
                <tr>
					<th >#</th>
					<th >标题</th>
					<th >创建时间</th>
					<th style="width:80px">操作</th>
                </tr>
              </thead>
              <tbody>			
                   <?php  $_smarty_tpl->tpl_vars['healthin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['healthin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['healthinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['healthin']->key => $_smarty_tpl->tpl_vars['healthin']->value) {
$_smarty_tpl->tpl_vars['healthin']->_loop = true;
?>
					<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['healthin']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['healthin']->value['title'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['healthin']->value['create_time'];?>
</td>
					<td>
                                            <a href="healthinfo_modify.php?id=<?php echo $_smarty_tpl->tpl_vars['healthin']->value['id'];?>
" title= "修改" ><i class="icon-pencil"></i></a>
                                        &nbsp;&nbsp;
					<a data-toggle="modal" href="#healthinfo" title= "删除" ><i class="icon-remove" href="healthinfo.php?page_no=<?php echo $_smarty_tpl->tpl_vars['page_no']->value;?>
&method=del&id=<?php echo $_smarty_tpl->tpl_vars['healthin']->value['id'];?>
" ></i></a>
					</td>
					</tr>
                   <?php } ?>
              </tbody>
            </table>
				<!--- START 分页模板 --->
				
               <?php echo $_smarty_tpl->tpl_vars['page_html']->value;?>

					
			   <!--- END --->              
        </div>
    </div>
<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $_smarty_tpl->tpl_vars['osadmin_action_confirm']->value;?>
               
<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
