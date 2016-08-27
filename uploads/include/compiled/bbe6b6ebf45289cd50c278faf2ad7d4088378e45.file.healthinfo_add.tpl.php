<?php /* Smarty version Smarty-3.1.15, created on 2016-08-10 11:49:31
         compiled from "F:\CI\OSAdmin-master\uploads\include\template\xhdoctor\healthinfo_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2737579819f6af7c22-71413088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe6b6ebf45289cd50c278faf2ad7d4088378e45' => 
    array (
      0 => 'F:\\CI\\OSAdmin-master\\uploads\\include\\template\\xhdoctor\\healthinfo_add.tpl',
      1 => 1470800966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2737579819f6af7c22-71413088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_579819f6b5f164_86068422',
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'osadmin_quick_note' => 0,
    '_POST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579819f6b5f164_86068422')) {function content_579819f6b5f164_86068422($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>

<?php echo $_smarty_tpl->tpl_vars['osadmin_quick_note']->value;?>

    
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">请填写健康知识</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">
            
           <form id="tab" method="post" action="" enctype="multipart/form-data">
				<label>标题</label>
				<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['_POST']->value['title'];?>
" class="input-xlarge" required="true" autofocus="true" >
				<label>描述</label>
				<textarea name="name" rows="3" class="input-xlarge" required="true" autofocus="true"><?php echo $_smarty_tpl->tpl_vars['_POST']->value['name'];?>
</textarea>                               
                                <label>图片上传</label>
                                <input type="file" name="file" id="file" /> 
                                <label>描述</label>
                                <!-- 加载编辑器的容器 -->
                                <script id="container" name="desc" type="text/plain" style="width:98%;height:400px;">
                                </script>
				<div class="btn-toolbar">
			        <button type="submit" class="btn btn-primary"><strong>提交</strong></button>
				</div>
			</form>
        </div>
    </div>
</div>
                                
	
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
