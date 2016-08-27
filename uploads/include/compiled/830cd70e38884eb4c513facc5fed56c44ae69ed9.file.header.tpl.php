<?php /* Smarty version Smarty-3.1.15, created on 2016-07-28 17:43:28
         compiled from "F:\CI\OSAdmin-master\uploads\include\template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1131757908bd9dde232-61631836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830cd70e38884eb4c513facc5fed56c44ae69ed9' => 
    array (
      0 => 'F:\\CI\\OSAdmin-master\\uploads\\include\\template\\header.tpl',
      1 => 1469697809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1131757908bd9dde232-61631836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57908bd9ea3e37_04503615',
  'variables' => 
  array (
    'page_title' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57908bd9ea3e37_04503615')) {function content_57908bd9ea3e37_04503615($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php echo @constant('ADMIN_TITLE');?>
 - Powered by OSAdmin!</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/assets/lib/bootstrap/css/bootstrap.css">  
    <link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/assets/stylesheets_<?php echo $_smarty_tpl->tpl_vars['user_info']->value['template'];?>
/theme.css">
    <link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/assets/lib/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/assets/css/other.css">
	<link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/assets/css/jquery-ui.css" />

    <script src="<?php echo @constant('ADMIN_URL');?>
/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="<?php echo @constant('ADMIN_URL');?>
/assets/lib/jquery.cookie.js" ></script>
	<script src="<?php echo @constant('ADMIN_URL');?>
/assets/lib/bootstrap/js/bootbox.min.js"></script>
	<script src="<?php echo @constant('ADMIN_URL');?>
/assets/lib/bootstrap/js/bootstrap-modal.js"></script>
	<script src="<?php echo @constant('ADMIN_URL');?>
/assets/js/other.js"></script>
	<script src="<?php echo @constant('ADMIN_URL');?>
/assets/js/jquery-ui.js"></script>
    <!--wysihtml5
    <script src="<?php echo @constant('ADMIN_URL');?>
/wysihtml5/js/wysihtml5-0.3.0.js" ></script>
    <script src="<?php echo @constant('ADMIN_URL');?>
/wysihtml5/js/jquery-1.7.2.min.js" ></script>
    <script src="<?php echo @constant('ADMIN_URL');?>
/wysihtml5/js/bootstrap.min.js" ></script>
    <script src="<?php echo @constant('ADMIN_URL');?>
/wysihtml5/js/bootstrap-wysihtml5.js" ></script>-->
    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>    
    <!--wysihtml5
   <link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/wysihtml5/css/bootstrap-wysihtml5.css" />
   <!--<link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/wysihtml5/css/bootstrap.min.css" />
   <link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/wysihtml5/css/wysiwyg-color.css" />-->
   <!--ueditor-->
   <link rel="stylesheet" href="<?php echo @constant('ADMIN_URL');?>
/ueditor/themes/default/css/ueditor.css" />

   <script src="<?php echo @constant('ADMIN_URL');?>
/ueditor/ueditor.config.js"></script>
   <script src="<?php echo @constant('ADMIN_URL');?>
/ueditor/ueditor.all.js"></script>
   <script src="<?php echo @constant('ADMIN_URL');?>
/ueditor/lang/zh-cn/zh-cn.js"></script>
   <script type="text/javascript">
    $(function(){
        window.ue = UE.getEditor('container', {
            /* 传入配置参数,可配参数列表看umeditor.config.js */
            toolbar: ['undo redo | bold italic underline ']
        });
    });
</script>
  </head>
<?php }} ?>
