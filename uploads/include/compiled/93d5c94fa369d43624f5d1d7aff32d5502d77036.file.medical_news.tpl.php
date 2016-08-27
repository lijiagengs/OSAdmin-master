<?php /* Smarty version Smarty-3.1.15, created on 2016-08-05 11:46:49
         compiled from "F:\CI\OSAdmin-master\uploads\include\template\xhdoctor\medical_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2941957a407c8ad81f6-91028982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d5c94fa369d43624f5d1d7aff32d5502d77036' => 
    array (
      0 => 'F:\\CI\\OSAdmin-master\\uploads\\include\\template\\xhdoctor\\medical_news.tpl',
      1 => 1470368798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2941957a407c8ad81f6-91028982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57a407c8cab064_08753841',
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'osadmin_quick_note' => 0,
    'medical_news' => 0,
    'medical' => 0,
    'page_no' => 0,
    'page_html' => 0,
    'osadmin_action_confirm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a407c8cab064_08753841')) {function content_57a407c8cab064_08753841($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>

<?php echo $_smarty_tpl->tpl_vars['osadmin_quick_note']->value;?>


<div class="btn-toolbar" style="margin-bottom:2px;">
    <a href="medical_news_add.php" class="btn btn-primary"><i class="icon-plus"></i>医疗新闻</a>
</div>

</div>
    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">医疗新闻列表</a>
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
                   <?php  $_smarty_tpl->tpl_vars['medical'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['medical']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['medical_news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['medical']->key => $_smarty_tpl->tpl_vars['medical']->value) {
$_smarty_tpl->tpl_vars['medical']->_loop = true;
?>
					<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['medical']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['medical']->value['title'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['medical']->value['create_time'];?>
</td>
					<td>
                                            <a href="medical_news_modify.php?id=<?php echo $_smarty_tpl->tpl_vars['medical']->value['id'];?>
" title= "修改" ><i class="icon-pencil"></i></a>
                                        &nbsp;&nbsp;
					<a data-toggle="modal" href="#medical_news" title= "删除" ><i class="icon-remove" href="medical_news.php?page_no=<?php echo $_smarty_tpl->tpl_vars['page_no']->value;?>
&method=del&id=<?php echo $_smarty_tpl->tpl_vars['medical']->value['id'];?>
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
