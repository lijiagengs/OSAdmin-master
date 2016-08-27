<?php /* Smarty version Smarty-3.1.15, created on 2016-07-29 10:31:10
         compiled from "F:\CI\OSAdmin-master\uploads\include\template\xhdoctor\healthinquiry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10938579abf24c082d6-59950789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7ddfa9ff69517085b915e33204ac75251d499cc' => 
    array (
      0 => 'F:\\CI\\OSAdmin-master\\uploads\\include\\template\\xhdoctor\\healthinquiry.tpl',
      1 => 1469759412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10938579abf24c082d6-59950789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_579abf24d52f93_27261326',
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'osadmin_quick_note' => 0,
    'healthinquiry' => 0,
    'healthinq' => 0,
    'page_no' => 0,
    'page_html' => 0,
    'osadmin_action_confirm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579abf24d52f93_27261326')) {function content_579abf24d52f93_27261326($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>

<?php echo $_smarty_tpl->tpl_vars['osadmin_quick_note']->value;?>


<div class="btn-toolbar" style="margin-bottom:2px;">
    <a href="healthinquiry_add.php" class="btn btn-primary"><i class="icon-plus"></i>健康资讯</a>
</div>

</div>
    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">健康资讯列表</a>
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
                   <?php  $_smarty_tpl->tpl_vars['healthinq'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['healthinq']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['healthinquiry']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['healthinq']->key => $_smarty_tpl->tpl_vars['healthinq']->value) {
$_smarty_tpl->tpl_vars['healthinq']->_loop = true;
?>
					<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['healthinq']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['healthinq']->value['title'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['healthinq']->value['create_time'];?>
</td>
					<td>
                                            <a href="healthinquiry_modify.php?id=<?php echo $_smarty_tpl->tpl_vars['healthinq']->value['id'];?>
" title= "修改" ><i class="icon-pencil"></i></a>
                                        &nbsp;&nbsp;
					<a data-toggle="modal" href="#healthinquiry" title= "删除" ><i class="icon-remove" href="healthinquiry.php?page_no=<?php echo $_smarty_tpl->tpl_vars['page_no']->value;?>
&method=del&id=<?php echo $_smarty_tpl->tpl_vars['healthinq']->value['id'];?>
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
