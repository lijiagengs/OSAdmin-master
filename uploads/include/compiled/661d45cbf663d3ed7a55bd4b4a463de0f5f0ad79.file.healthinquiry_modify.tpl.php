<?php /* Smarty version Smarty-3.1.15, created on 2016-07-29 11:00:23
         compiled from "F:\CI\OSAdmin-master\uploads\include\template\xhdoctor\healthinquiry_modify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21546579ac6c7822770-46588302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '661d45cbf663d3ed7a55bd4b4a463de0f5f0ad79' => 
    array (
      0 => 'F:\\CI\\OSAdmin-master\\uploads\\include\\template\\xhdoctor\\healthinquiry_modify.tpl',
      1 => 1469761218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21546579ac6c7822770-46588302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'osadmin_action_alert' => 0,
    'osadmin_quick_note' => 0,
    'healthinquiry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_579ac6c7851ee2_59867875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579ac6c7851ee2_59867875')) {function content_579ac6c7851ee2_59867875($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navibar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $_smarty_tpl->tpl_vars['osadmin_action_alert']->value;?>

<?php echo $_smarty_tpl->tpl_vars['osadmin_quick_note']->value;?>


<div class="well">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">请填写健康资讯</a></li>
    </ul>	

    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="home">

            <form id="tab" method="post" action="" enctype="multipart/form-data">
                <label>标题</label>
                <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['healthinquiry']->value['title'];?>
" class="input-xlarge" required="true" autofocus="true" >
                <label>图片上传</label>
                <input type="file" name="file" id="file" /> 
                <label>描述</label>
                <!-- 加载编辑器的容器 -->
                <script id="container" name="desc" type="text/plain" style="width:98%;height:400px;">
                    <?php echo $_smarty_tpl->tpl_vars['healthinquiry']->value['content'];?>

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
